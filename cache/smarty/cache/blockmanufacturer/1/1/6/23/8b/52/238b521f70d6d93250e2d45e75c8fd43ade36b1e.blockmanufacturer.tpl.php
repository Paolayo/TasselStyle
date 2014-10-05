<?php /*%%SmartyHeaderCode:67365431406baa6059-93761540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238b521f70d6d93250e2d45e75c8fd43ade36b1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\Theme-Tassel\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1412513391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67365431406baa6059-93761540',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54314e3160e8c5_33936437',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54314e3160e8c5_33936437')) {function content_54314e3160e8c5_33936437($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost/tassel/es/fabricantes" title="Fabricantes">
						Fabricantes
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost/tassel/es/1_fashion-manufacturer" title="Más acerca de Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/tassel/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Todas las marcas</option>
													<option value="http://localhost/tassel/es/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
