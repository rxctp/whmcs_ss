$(document).ready(function(){
    var minimisedWidgets = null;
    if(typeof(Storage) !== "undefined") {
        minimisedWidgets = JSON.parse(localStorage.getItem("minimisedWidgets"));
    }
    if (!minimisedWidgets) {
        minimisedWidgets = [];
    }
    $(".widget-minimise").click(function(e) {
        e.preventDefault();
        var obj = $(this);
        var icon = obj.find('i'),
            widget = obj.closest('.panel').data('widget');
        if (icon.hasClass('fa-chevron-up')) {
            obj.closest('.panel').find('.panel-body').slideUp('fast', function() {
                icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
                $('.home-widgets-container').masonry().masonry('reloadItems');
            });
            if (minimisedWidgets.indexOf(widget) == -1) {
                minimisedWidgets.push(widget);
            }
        } else {
            obj.closest('.panel').find('.panel-body').slideDown('fast', function() {
                icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
                $('.home-widgets-container').masonry().masonry('reloadItems');
            });
            minimisedWidgets.splice(minimisedWidgets.indexOf(widget), 1);
        }
        if(typeof(Storage) !== "undefined") {
            localStorage.setItem("minimisedWidgets", JSON.stringify(minimisedWidgets));
        }
    });
    $(".widget-refresh").click(function(e) {
        e.preventDefault();
        var obj = $(this);
        var icon = obj.find('i');
        var widget = obj.closest('.panel').data('widget');
        var panelBody = obj.closest('.panel').find('.panel-body');
        icon.addClass('fa-spin');
        refreshWidget(widget, 'refresh=1');
    });

    minimisedWidgets.forEach(function(currentValue) {
        $('#panel' + currentValue).find('.panel-body').hide().end()
            .find('i.fa-chevron-up').removeClass('fa-chevron-up').addClass('fa-chevron-down');
    });
});

function refreshWidget(widgetName, requestString) {
    var obj = $('.panel[data-widget="' + widgetName + '"]');
    var panelBody = obj.find('.panel-body');
    var icon = obj.find('i.fa-refresh');
    panelBody.addClass('panel-loading');
    var jqxhr = $.post('index.php', 'action=refreshwidget&widget=' + widgetName + '&' + requestString,
        function(data) {
            panelBody.html(data.widgetOutput);
            panelBody.removeClass('panel-loading');
        }, 'json')
        .always(function() {
            icon.removeClass('fa-spin');
        });
}
