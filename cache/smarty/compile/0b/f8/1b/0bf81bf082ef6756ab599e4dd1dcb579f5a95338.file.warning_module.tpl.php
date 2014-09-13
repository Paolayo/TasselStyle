<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:27
         compiled from "C:\xampp\htdocs\Tassel\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1052753e50f874afa78-92501092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf81bf082ef6756ab599e4dd1dcb579f5a95338' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1407520294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1052753e50f874afa78-92501092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f874bf475_92981990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f874bf475_92981990')) {function content_53e50f874bf475_92981990($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
