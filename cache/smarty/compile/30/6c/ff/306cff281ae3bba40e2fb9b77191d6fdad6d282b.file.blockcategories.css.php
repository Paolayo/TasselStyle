<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:22
         compiled from "C:\xampp\htdocs\Tassel\themes\default-bootstrap\css\modules\blockcategories\blockcategories.css" */ ?>
<?php /*%%SmartyHeaderCode:2519053e50f826b7ee5-43081856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306cff281ae3bba40e2fb9b77191d6fdad6d282b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\default-bootstrap\\css\\modules\\blockcategories\\blockcategories.css',
      1 => 1407520377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2519053e50f826b7ee5-43081856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f826d26b5_23905660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f826d26b5_23905660')) {function content_53e50f826d26b5_23905660($_smarty_tpl) {?>#categories_block_top {
  clear: both;
  position: relative;
  top: 30px; }
  #categories_block_top .sf-menu {
    position: relative; }
    #categories_block_top .sf-menu > li {
      position: static; }
      #categories_block_top .sf-menu > li > ul {
        width: 100%;
        top: 60px;
        margin: 0 20px; }
        #categories_block_top .sf-menu > li > ul > li {
          display: block;
          float: left;
          width: 20%;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
          padding: 0 10px; }
        #categories_block_top .sf-menu > li > ul > .category_thumb {
          display: block;
          clear: both;
          overflow: hidden;
          width: 100%; }
          #categories_block_top .sf-menu > li > ul > .category_thumb img {
            display: inline-block;
            width: 33%; }
      #categories_block_top .sf-menu > li h4 a {
        font-size: 1.1em; }
        #categories_block_top .sf-menu > li h4 a:before {
          display: none; }
      #categories_block_top .sf-menu > li .main-level-submenus {
        position: relative;
        display: block !important;
        visibility: visible !important;
        top: 0;
        background: none;
        box-shadow: none;
        padding: 0;
        left: 0; }
    #categories_block_top .sf-menu .category_thumb {
      display: none; }

#categories_block_left .block_content > ul {
  border-top: 1px solid #d6d4d4; }
#categories_block_left li {
  position: relative; }
  #categories_block_left li a {
    font-weight: bold;
    color: #333333;
    display: block;
    font-size: 13px;
    line-height: 30px;
    padding: 0 30px 0 19px;
    border-bottom: 1px solid #d6d4d4; }
  #categories_block_left li span.grower {
    display: block;
    background: #f6f6f6;
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    font-family: "FontAwesome";
    font-size: 14px; }
    #categories_block_left li span.grower.OPEN:before, #categories_block_left li span.grower.CLOSE:before {
      content: "\f068";
      display: block;
      vertical-align: middle;
      width: 30px;
      height: 30px;
      color: #333333;
      line-height: 30px;
      text-align: center; }
    #categories_block_left li span.grower.CLOSE:before {
      content: "\f067";
      color: silver; }
  #categories_block_left li span.grower:hover + a,
  #categories_block_left li a:hover,
  #categories_block_left li a.selected {
    background: #f6f6f6; }
  #categories_block_left li li a {
    font-weight: normal;
    color: #777777; }
    #categories_block_left li li a:before {
      content: "\f105";
      font-family: "FontAwesome";
      line-height: 29px;
      padding-right: 8px; }
<?php }} ?>
