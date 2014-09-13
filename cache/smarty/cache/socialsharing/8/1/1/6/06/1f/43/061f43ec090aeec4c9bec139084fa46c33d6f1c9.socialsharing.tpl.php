<?php /*%%SmartyHeaderCode:437253e532150087e7-64241700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '061f43ec090aeec4c9bec139084fa46c33d6f1c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1407520365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '437253e532150087e7-64241700',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
    'product_image_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e532150b8079_14681093',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e532150b8079_14681093')) {function content_53e532150b8079_14681093($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Pendientes y colgante rojo http://localhost/tassel/es/home/8-pendientes-y-colgante-rojo.html');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://localhost/tassel/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Compartir
				<!-- <img src="http://localhost/tassel/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://localhost/tassel/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
										<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('http://localhost/tassel/24-thickbox_default/pendientes-y-colgante-rojo.jpg');">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://localhost/tassel/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
