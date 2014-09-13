<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:42
         compiled from "C:\xampp\htdocs\Tassel\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:458853e50f965b1ad7-65107364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea896a47c230b5c45341204b38d300a0cbdf3ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1407520297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '458853e50f965b1ad7-65107364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f965bb173_60289680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f965bb173_60289680')) {function content_53e50f965bb173_60289680($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
