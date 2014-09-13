<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:42
         compiled from "C:\xampp\htdocs\Tassel\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659253e50f96423c44-16957131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5ddc5220ff042fe4b58319656d832c23ed3358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1407520297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659253e50f96423c44-16957131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f96431081_23535747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f96431081_23535747')) {function content_53e50f96431081_23535747($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
