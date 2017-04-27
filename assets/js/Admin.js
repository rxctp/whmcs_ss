jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip();

    jQuery(".credit-card-type li a").click(function() {
        jQuery("#selectedCard").html(jQuery(this).html());
        jQuery("#cctype").val(jQuery('span.type', this).html());
    });

    jQuery('body').on('click', 'a.autoLinked', function (e) {
        e.preventDefault();

        var child = window.open();
        child.opener = null;
        child.location = e.target.href;
    });

    jQuery('#tblModuleSettings').on('click', '.icon-refresh', function() {
        fetchModuleSettings(jQuery(this).data('product-id'), 'simple');
    });

    jQuery('#mode-switch').click(function() {
        fetchModuleSettings(jQuery(this).data('product-id'), jQuery(this).attr('data-mode'));
    });

    $('body').on('click', '.modal-setup-wizard .modal-submit', function() {
        var modal = $('#modalAjax');
        modal.find('.loader').show();
        modal.find('.modal-submit').prop('disabled', true);

        $('.modal-setup-wizard .wizard-step:hidden :input').attr('disabled', true);

        var form = document.forms.namedItem('frmWizardContent'),
            oData = new FormData(form),
            currentStep = $('.modal-setup-wizard .wizard-step:visible').data('step-number'),
            ccGatewayFormSubmitted = $('#ccGatewayFormSubmitted').val(),
            enomFormSubmitted = $('#enomFormSubmitted').val(),
            oReq = new XMLHttpRequest();

        if ((ccGatewayFormSubmitted && currentStep == 3) || (enomFormSubmitted && currentStep == 5)) {
            wizardStepTransition(false, true);
            fadeoutLoaderAndAllowSubmission(modal);
        } else {

            oReq.open('POST', $('#frmWizardContent').attr('action'), true);

            oReq.send(oData);
            oReq.onload = function () {
                if (oReq.status == 200) {
                    try {
                        var data = JSON.parse(oReq.responseText),
                            doNotShow = $('#btnWizardDoNotShow');
                        if (doNotShow.is(':visible')) {
                            doNotShow.fadeOut('slow', function () {
                                $('#btnWizardSkip').hide().removeClass('hidden').fadeIn('slow');
                            });
                        }

                        if (data.success) {
                            wizardStepTransition(data.skipNextStep, false);
                        } else {
                            wizardError(data.error);
                        }
                    } catch (err) {
                        wizardError('An error occurred while communicating with the server. Please try again.');
                    } finally {
                        fadeoutLoaderAndAllowSubmission(modal);
                    }
                } else {
                    alert('An error occurred while communicating with the server. Please try again.');
                    modal.find('.loader').fadeOut();
                }
            };
        }
    });

    $('body').on('click', '#btnWizardSkip', function(e) {
        e.preventDefault();
        wizardStepTransition(false, true);
    });

    // Handle the BACK button click.
    $('body').on('click', '#btnWizardBack', function(e) {
        e.preventDefault();
        wizardStepBackTransition();
    });

    $('body').on('click', '#btnWizardDoNotShow', function(e) {
        e.preventDefault();
        $.post('wizard.php', 'dismiss=true', function() {
            //Success or no, still hide now
            $('#modalAjax').modal('hide');
        });
    });

    $('#modalAjax').on('hidden.bs.modal', function (e) {
        if ($('#modalAjax').hasClass('modal-wizard')) {
            $('#btnWizardSkip').remove();
            $('#btnWizardBack').remove();
            $('#btnWizardDoNotShow').remove();
        }
    });

    $('#prodsall').click(function () {
        var checkboxes = $('.checkprods');
        checkboxes.filter(':visible').prop('checked', $(this).prop('checked')).end();
        if ($(this).prop('checked')) {
            checkboxes.filter(':hidden').prop('checked', !$(this).prop('checked')).end();
        }
    });
    $('#addonsall').click(function () {
        var checkboxes = $('.checkaddons');
        checkboxes.filter(':visible').prop('checked', $(this).prop('checked')).end();
        if ($(this).prop('checked')) {
            checkboxes.filter(':hidden').prop('checked', !$(this).prop('checked')).end();
        }
    });
    $('#domainsall').click(function () {
        var checkboxes = $('.checkdomains');
        checkboxes.filter(':visible').prop('checked', $(this).prop('checked')).end();
        if ($(this).prop('checked')) {
            checkboxes.filter(':hidden').prop('checked', !$(this).prop('checked')).end();
        }
    });
});

function updateServerGroups(requiredModule) {
    var optionServerTypes = '';
    var doShowOption = false;

    $('#inputServerGroup').find('option:not([value=0])').each(function() {
        optionServerTypes = $(this).attr('data-server-types');

        if (requiredModule) {
            doShowOption = (optionServerTypes.indexOf(',' + requiredModule + ',') > -1);
        } else {
            doShowOption = true;
        }

        if (doShowOption) {
            $(this).attr('disabled', false);
        } else {
            $(this).attr('disabled', true);

            if ($(this).is(':selected')) {
                $('#inputServerGroup').val('0');
            }
        }
    });
}

function fetchModuleSettings(productId, mode) {
    var gotValidResponse = false;
    var dataResponse = '';
    var switchLink = $('#mode-switch');
    var module = $('#inputModule').val();

    mode = mode || 'simple';
    if (mode != 'simple' && mode != 'advanced') {
        mode = 'simple';
    }
    requestedMode = mode;
    $('#tblModuleSettings').addClass('module-settings-loading');
    $('#tblModuleAutomationSettings').addClass('module-settings-loading');
    $('#serverReturnedError').addClass('hidden');
    $('#moduleSettingsLoader').show();
    switchLink.attr('data-product-id', productId);
    $.post(window.location.pathname, {
        'action': 'module-settings',
        'module': module,
        'servergroup': $('#inputServerGroup').val(),
        'id': productId,
        'mode': mode
    },
    function(data) {
        gotValidResponse = true;
        $('#tblModuleSettings').removeClass('module-settings-loading');
        $('#tblModuleAutomationSettings').removeClass('module-settings-loading');
        $('#tblModuleSettings tr').not(':first').remove();
        switchLink.addClass('hidden');
        if (module && data.error) {
            $('#serverReturnedErrorText').html(data.error);
            $('#serverReturnedError').removeClass('hidden');
        }
        if (module && data.content) {
            $('#noModuleSelectedRow').addClass('hidden');
            $('#tblModuleSettings').append(data.content);
            $('#tblModuleAutomationSettings').find('input[type=radio]').removeAttr('disabled');
            if (data.mode == 'simple') {
                switchLink.attr('data-mode', 'advanced').find('a').find('span').addClass('hidden').parent().find('.text-advanced').removeClass('hidden');
                switchLink.removeClass('hidden');
            } else {
                if (data.mode == 'advanced' && requestedMode == 'advanced') {
                    switchLink.attr('data-mode', 'simple').find('a').find('span').addClass('hidden').parent().find('.text-simple').removeClass('hidden');
                    switchLink.removeClass('hidden');
                } else {
                    switchLink.addClass('hidden');
                }
            }
        } else {
            $('#noModuleSelectedRow').removeClass('hidden');
            $('#tblModuleAutomationSettings').find('input[type=radio]').attr('disabled', true);
        }
        $('#moduleSettingsLoader').fadeOut();
        jQuery('[data-toggle="tooltip"]').tooltip();
    }, "json")
    .always(function() {
        updateServerGroups(gotValidResponse ? module : '');

        if (!gotValidResponse) {
            // non json response, likely session expired
        }
    });
    return dataResponse;
}

function wizardCall(action, request, handler) {
    var requestString = 'wizard=' + $('input[name="wizard"]').val()
        + '&step=' + $('input[name="step"]').val()
        + '&token=' + $('input[name="token"]').val()
        + '&action=' + action
        + '&' + request;

    $.post('wizard.php', requestString, handler);
}

function wizardError(errorMsg) {
    $('.modal-setup-wizard .wizard-content').css('overflow', 'hidden');
    $('.info-alert:visible:first').html(errorMsg).addClass('alert-danger').effect('shake', function() {
        $('.modal-setup-wizard .wizard-content').css('overflow', 'auto');
    });
}

function wizardStepTransition(skipNextStep, skip) {
    var currentStepNumber = $('.modal-setup-wizard .wizard-step:visible').data('step-number');
    if (skipNextStep) {
        increment = 2;
    } else {
        increment = 1;
    }
    var lastStep = $('.modal-setup-wizard .wizard-step:visible');
    var nextStepNumber = currentStepNumber + increment;
    if ($('#wizardStep' + nextStepNumber).length) {
        $('#wizardStep' + currentStepNumber).fadeOut('', function() {
            var newClass = 'completed';
            if (skip) {
                newClass = 'skipped';
                $('#wizardStepLabel' + currentStepNumber + ' i').removeClass('fa-check-circle-o').addClass('fa-minus-circle');
            } else {
                lastStep.find('.signup-frm').hide();
                lastStep.find('.signup-frm-success').removeClass('hidden');

                if (currentStepNumber == 3) {
                    lastStep.find('.signup-frm-success')
                        .append('<input type="hidden" id="ccGatewayFormSubmitted" name="ccGatewayFormSubmitted" value="1" />');
                } else if (currentStepNumber == 5) {
                    lastStep.find('.signup-frm-success')
                        .append('<input type="hidden" id="enomFormSubmitted" name="enomFormSubmitted" value="1" />');
                }

            }

            if (nextStepNumber > 0) {
                // Show the BACK button.
                if (!$('#btnWizardBack').is(':visible')) {
                    $('#btnWizardBack').hide().removeClass('hidden').fadeIn('slow');
                }
            } else {
                $('#btnWizardBack').fadeOut('slow');
                $('#btnWizardDoNotShow').fadeIn('slow');
                $('#btnWizardSkip').fadeOut('slow');
            }
            $('#wizardStepLabel' + currentStepNumber).removeClass('current').addClass(newClass);
            $('.modal-setup-wizard .wizard-step:visible :input').attr('disabled', true);
            $('#wizardStep' + nextStepNumber + ' :input').removeAttr('disabled');
            $('#wizardStep' + nextStepNumber).fadeIn();
            $('#inputWizardStep').val(nextStepNumber);
            $('#wizardStepLabel' + nextStepNumber).addClass('current');
        });
        if (!$('#wizardStep' + (nextStepNumber + 1)).length) {
            $('#btnWizardSkip').fadeOut('slow');
            $('#btnWizardBack').fadeOut('slow');
            $('.modal-submit').html('Finish');
        }
    } else {
        // end of steps
        $('#modalAjax').modal('hide');
    }
}

function wizardStepBackTransition() {
    var currentStepNumber = $('.modal-setup-wizard .wizard-step:visible').data('step-number');
    var previousStepNumber = parseInt(currentStepNumber) - 1;

    $('#wizardStep' + currentStepNumber).fadeOut('', function() {
        if (previousStepNumber < 1) {
            $('#btnWizardBack').fadeOut('slow');
            $('#btnWizardDoNotShow').fadeIn('slow');
            $('#btnWizardSkip').addClass('hidden');
        }
        
        $('.modal-setup-wizard .wizard-step:visible :input').attr('disabled', true);
        $('#wizardStep' + previousStepNumber + ' :input').removeAttr('disabled');
        $('#wizardStep' + previousStepNumber).fadeIn();
        $('#inputWizardStep').val(previousStepNumber);
        $('#wizardStepLabel' + previousStepNumber).addClass('current');
        $('#wizardStepLabel' + currentStepNumber).removeClass('current');
    });
}

function fadeoutLoaderAndAllowSubmission(modal) {
    modal.find('.loader').fadeOut();
    modal.find('.modal-submit').removeProp('disabled');
}

function openSetupWizard() {
    $('#modalFooterLeft').html('<a href="#" id="btnWizardSkip" class="btn btn-link pull-left hidden">Skip Step</a>' +
        '<a href="#" id="btnWizardDoNotShow" class="btn btn-link pull-left">Do not show this again</a>' +
        '</div>');
    $('#modalAjaxSubmit').before('<a href="#" id="btnWizardBack" class="btn btn-default hidden">Back</a>');
    openModal('wizard.php?wizard=GettingStarted', '', 'Getting Started Wizard', 'modal-lg', 'modal-wizard modal-setup-wizard', 'Next', '', true);
}
