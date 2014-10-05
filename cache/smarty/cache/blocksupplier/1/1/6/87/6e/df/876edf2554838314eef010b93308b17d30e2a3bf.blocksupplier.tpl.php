<?php /*%%SmartyHeaderCode:6235431406c3bbbd1-43344518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '876edf2554838314eef010b93308b17d30e2a3bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\Theme-Tassel\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1412513391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6235431406c3bbbd1-43344518',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54314e31710024_94184677',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54314e31710024_94184677')) {function content_54314e31710024_94184677($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost/tassel/es/proveedores" title="Proveedores">
					Proveedores
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost/tassel/es/1__fashion-supplier" 
					title="Más sobre Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/tassel/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Todos los proveedores</option>
													<option value="http://localhost/tassel/es/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
