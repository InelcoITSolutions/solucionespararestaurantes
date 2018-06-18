<?php /*%%SmartyHeaderCode:98373181357b252d05ee573-15649247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6050c904c52df50880f2aca7f50ff9d5ff4fae7' => 
    array (
      0 => '/hsphere/local/home/c265935/solucionespararestaurantes.mx/tienda/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1470768065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98373181357b252d05ee573-15649247',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57b4a905170e14_07712866',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b4a905170e14_07712866')) {function content_57b4a905170e14_07712866($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//solucionespararestaurantes.mx/tienda/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
