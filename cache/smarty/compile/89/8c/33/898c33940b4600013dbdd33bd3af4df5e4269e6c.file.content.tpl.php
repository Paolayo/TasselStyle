<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:21
         compiled from "C:\xampp\htdocs\Tassel\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2662553e50f8152f295-51707599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898c33940b4600013dbdd33bd3af4df5e4269e6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\admin\\themes\\default\\template\\content.tpl',
      1 => 1407520287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2662553e50f8152f295-51707599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f81540030_14832890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f81540030_14832890')) {function content_53e50f81540030_14832890($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
