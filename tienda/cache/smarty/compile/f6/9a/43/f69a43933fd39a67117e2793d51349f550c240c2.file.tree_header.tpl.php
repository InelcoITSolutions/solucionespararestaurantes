<?php /* Smarty version Smarty-3.1.19, created on 2016-08-16 18:00:52
         compiled from "/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159106637357b39b2421ff26-60885763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69a43933fd39a67117e2793d51349f550c240c2' => 
    array (
      0 => '/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1470768968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159106637357b39b2421ff26-60885763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b39b24231b79_15339816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b39b24231b79_15339816')) {function content_57b39b24231b79_15339816($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
