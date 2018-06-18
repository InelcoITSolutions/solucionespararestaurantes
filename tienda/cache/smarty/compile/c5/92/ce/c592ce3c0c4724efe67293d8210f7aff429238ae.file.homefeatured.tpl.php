<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 10:57:09
         compiled from "/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158778057357c84fd5a7e056-98703366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c592ce3c0c4724efe67293d8210f7aff429238ae' => 
    array (
      0 => '/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1470768076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158778057357c84fd5a7e056-98703366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c84fd5a96b95_65277214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c84fd5a96b95_65277214')) {function content_57c84fd5a96b95_65277214($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
