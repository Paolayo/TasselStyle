<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 22:24:52
         compiled from "C:\xampp\htdocs\Tassel\modules\socialsharing\views\templates\hook\socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1623153e532144be638-52709703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b94ae965d4ebd6a4e7c2499e0c55463db19d7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\modules\\socialsharing\\views\\templates\\hook\\socialsharing_header.tpl',
      1 => 1407520365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623153e532144be638-52709703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e53214516ca6_07501079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e53214516ca6_07501079')) {function content_53e53214516ca6_07501079($_smarty_tpl) {?>
<meta property="og:title" content="" />
<meta property="og:type" content="product" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:email" content="" />
<meta property="og:phone_number" content="" />
<meta property="og:street-address" content="" />
<meta property="og:locality" content="" />
<meta property="og:country-name" content="" />
<meta property="og:postal-code" content="" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?><?php }} ?>
