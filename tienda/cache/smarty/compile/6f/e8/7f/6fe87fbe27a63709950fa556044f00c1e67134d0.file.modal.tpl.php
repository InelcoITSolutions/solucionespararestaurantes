<?php /* Smarty version Smarty-3.1.19, created on 2016-08-15 17:50:09
         compiled from "/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106345229357b24721501044-41676164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe87fbe27a63709950fa556044f00c1e67134d0' => 
    array (
      0 => '/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1470768965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106345229357b24721501044-41676164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b24721505116_08799167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b24721505116_08799167')) {function content_57b24721505116_08799167($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
