<?php
/* Smarty version 3.1.29, created on 2017-04-21 17:56:33
  from "/home/wwwroot/whmcs/templates/six/includes/tablelist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9d751820f28_73172534',
  'file_dependency' => 
  array (
    '0f7b6603d3c529a45e085b22f82adf59a99ee47c' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/includes/tablelist.tpl',
      1 => 1492434643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f9d751820f28_73172534 ($_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/dataTables.responsive.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/dataTables.responsive.min.js"><?php echo '</script'; ?>
>

<?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value) && $_smarty_tpl->tpl_vars['filterColumn']->value) {
echo '<script'; ?>
 type="text/javascript">

if (typeof(buildFilterRegex) !== "function") {
    function buildFilterRegex(filterValue) {

        if (filterValue.indexOf('&') === -1) {
            return '[~>]\\s*' + jQuery.fn.dataTable.util.escapeRegex(filterValue) + '\\s*[<~]';
        } else {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = filterValue;

            return '\\s*' + jQuery.fn.dataTable.util.escapeRegex(tempDiv.innerText) + '\\s*';
        }
    }
}

jQuery(".view-filter-btns a").click(function(e) {
    var filterValue = jQuery(this).find("span").not('.badge').html().trim();
    var dataTable = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable();
    var filterValueRegex;
    if (jQuery(this).hasClass('active')) {
        <?php if (!isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value) || !$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
            jQuery(this).removeClass('active');
            jQuery(this).find("i.fa.fa-dot-circle-o").removeClass('fa-dot-circle-o').addClass('fa-circle-o');
        <?php }?>
        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
).search('').draw();
    } else {
        <?php if (!isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value) || !$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
            jQuery('.view-filter-btns .list-group-item').removeClass('active');
            jQuery('i.fa.fa-dot-circle-o').removeClass('fa-dot-circle-o').addClass('fa-circle-o');
            jQuery(this).addClass('active');
            jQuery(this).find(jQuery("i.fa.fa-circle-o")).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
        <?php }?>
        filterValueRegex = buildFilterRegex(filterValue);
        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
)
            .search(filterValueRegex, true, false, false)
            .draw();
    }

    // Prevent jumping to the top of the page 
    // when no matching tag is found.
    e.preventDefault();
});
<?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
var alreadyReady = false; // The ready function is being called twice on page load.
jQuery(document).ready( function () {
    var table = jQuery("#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
").DataTable({
        "dom": '<"listtable"fit>pl',<?php if (isset($_smarty_tpl->tpl_vars['noPagination']->value) && $_smarty_tpl->tpl_vars['noPagination']->value) {?>
        "paging": false,<?php }
if (isset($_smarty_tpl->tpl_vars['noInfo']->value) && $_smarty_tpl->tpl_vars['noInfo']->value) {?>
        "info": false,<?php }
if (isset($_smarty_tpl->tpl_vars['noSearch']->value) && $_smarty_tpl->tpl_vars['noSearch']->value) {?>
        "filter": false,<?php }?>
        "responsive": true,
        "oLanguage": {
            "sEmptyTable":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
            "sInfo":           "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableshowing'];?>
",
            "sInfoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableempty'];?>
",
            "sInfoFiltered":   "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablefiltered'];?>
",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablelength'];?>
",
            "sLoadingRecords": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableloading'];?>
",
            "sProcessing":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableprocessing'];?>
",
            "sSearch":         "",
            "sZeroRecords":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
            "oPaginate": {
                "sFirst":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesfirst'];?>
",
                "sLast":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepageslast'];?>
",
                "sNext":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesnext'];?>
",
                "sPrevious": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesprevious'];?>
"
            }
        },
        "pageLength": 10,
        "order": [
            [ <?php if (isset($_smarty_tpl->tpl_vars['startOrderCol']->value) && $_smarty_tpl->tpl_vars['startOrderCol']->value) {
echo $_smarty_tpl->tpl_vars['startOrderCol']->value;
} else { ?>0<?php }?>, "asc" ]
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableviewall'];?>
"]
        ],
        "aoColumnDefs": [
            {
                "bSortable": false,
                "aTargets": [ <?php if (isset($_smarty_tpl->tpl_vars['noSortColumns']->value) && $_smarty_tpl->tpl_vars['noSortColumns']->value !== '') {
echo $_smarty_tpl->tpl_vars['noSortColumns']->value;
}?> ]
            },
            {
                "sType": "string",
                "aTargets": [ <?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value) && $_smarty_tpl->tpl_vars['filterColumn']->value) {
echo $_smarty_tpl->tpl_vars['filterColumn']->value;
}?> ]
            }
        ],
        "stateSave": true
    });
    jQuery(".dataTables_filter input").attr("placeholder", "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableentersearchterm'];?>
");

    <?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value) && $_smarty_tpl->tpl_vars['filterColumn']->value) {?>
    // highlight remembered filter on page re-load
    var rememberedFilterTerm = table.state().columns[<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
].search.search;
    if (rememberedFilterTerm && !alreadyReady) {
        // This should only run on the first "ready" event.
        jQuery(".view-filter-btns a span").each(function(index) {
            if (buildFilterRegex(jQuery(this).text().trim()) == rememberedFilterTerm) {
                jQuery(this).parent('a').addClass('active');
                jQuery(this).parent('a').find('i').removeClass('fa-circle-o').addClass('fa-dot-circle-o');
            }
        });
    }
    <?php }?>
alreadyReady = true;
} );
<?php echo '</script'; ?>
>
<?php }
}
