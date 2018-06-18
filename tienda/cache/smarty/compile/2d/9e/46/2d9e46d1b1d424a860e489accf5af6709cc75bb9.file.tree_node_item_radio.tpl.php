<?php /* Smarty version Smarty-3.1.19, created on 2016-08-16 18:00:52
         compiled from "/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200460029257b39b24234f66-03439076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d9e46d1b1d424a860e489accf5af6709cc75bb9' => 
    array (
      0 => '/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1470768978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200460029257b39b24234f66-03439076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b39b2425f255_67317559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b39b2425f255_67317559')) {function content_57b39b2425f255_67317559($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
