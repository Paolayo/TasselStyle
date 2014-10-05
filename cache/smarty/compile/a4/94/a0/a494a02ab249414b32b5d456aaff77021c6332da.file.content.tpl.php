<?php /* Smarty version Smarty-3.1.19, created on 2014-08-09 12:36:19
         compiled from "C:\xampp\htdocs\Tassel\admin7352\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3017453e5f9a341ca42-44231969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a494a02ab249414b32b5d456aaff77021c6332da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\admin7352\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1407520288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3017453e5f9a341ca42-44231969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e5f9a34cfd87_02161497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5f9a34cfd87_02161497')) {function content_53e5f9a34cfd87_02161497($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
