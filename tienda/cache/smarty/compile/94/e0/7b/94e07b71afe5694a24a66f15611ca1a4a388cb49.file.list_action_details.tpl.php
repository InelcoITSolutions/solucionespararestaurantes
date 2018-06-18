<?php /* Smarty version Smarty-3.1.19, created on 2016-08-16 17:39:42
         compiled from "/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57555435757b3962e7f3061-27182668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94e07b71afe5694a24a66f15611ca1a4a388cb49' => 
    array (
      0 => '/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/admin066yuehxk/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1470768962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57555435757b3962e7f3061-27182668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b3962e8ba015_81684042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b3962e8ba015_81684042')) {function content_57b3962e8ba015_81684042($_smarty_tpl) {?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="">
	<i class="icon-eye-open"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
