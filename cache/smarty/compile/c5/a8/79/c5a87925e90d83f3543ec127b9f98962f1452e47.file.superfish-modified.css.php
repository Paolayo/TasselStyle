<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:22
         compiled from "C:\xampp\htdocs\Tassel\themes\default-bootstrap\css\modules\blocktopmenu\css\superfish-modified.css" */ ?>
<?php /*%%SmartyHeaderCode:1492253e50f829b4694-15038037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a87925e90d83f3543ec127b9f98962f1452e47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\default-bootstrap\\css\\modules\\blocktopmenu\\css\\superfish-modified.css',
      1 => 1407520378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1492253e50f829b4694-15038037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f829e5ac6_44287806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f829e5ac6_44287806')) {function content_53e50f829e5ac6_44287806($_smarty_tpl) {?>/*** ESSENTIAL STYLES ***/
.sf-contener {
  clear: both;
  float: left;
  width: 100%; }

.sf-menu,
.sf-menu * {
  margin: 0;
  padding: 0;
  list-style: none; }

.sf-menu {
  position: relative;
  padding: 0;
  width: 100%;
  border-bottom: 3px solid #e9e9e9;
  background: #f6f6f6; }
  @media (max-width: 767px) {
    .sf-menu {
      display: none; } }

.sf-menu ul {
  position: absolute;
  top: -999em;
  background: white; }
  @media (max-width: 767px) {
    .sf-menu ul {
      position: relative; } }

.sf-menu ul li {
  width: 100%; }

.sf-menu li:hover {
  visibility: inherit;
  /* fixes IE7 'sticky bug' */ }

.sf-menu > li {
  float: left;
  border-right: 1px solid #d6d4d4;
  margin-bottom: -3px; }
  @media (max-width: 767px) {
    .sf-menu > li {
      float: none;
      position: relative;
      border-right: none; }
      .sf-menu > li span {
        position: absolute;
        right: 6px;
        top: 20px;
        width: 30px;
        height: 30px;
        z-index: 2; }
        .sf-menu > li span:after {
          font-family: "FontAwesome";
          content: "\f067";
          font-size: 26px; }
        .sf-menu > li span.active:after {
          content: "\f068"; } }
  .sf-menu > li > a {
    font: 600 18px/22px "Open Sans", sans-serif;
    text-transform: uppercase;
    color: #484848;
    display: block;
    padding: 17px 20px;
    border-bottom: 3px solid #e9e9e9; }
  .sf-menu > li.sfHover > a,
  .sf-menu > li > a:hover, .sf-menu > li.sfHoverForce > a {
    background: #333333;
    border-bottom-color: #666666;
    color: white; }

.sf-menu li li li a {
  display: inline-block;
  position: relative;
  color: #777777;
  font-size: 13px;
  line-height: 16px;
  font-weight: bold;
  padding-bottom: 10px; }
  .sf-menu li li li a:before {
    content: "\f105";
    display: inline-block;
    font-family: "FontAwesome";
    padding-right: 10px; }
  .sf-menu li li li a:hover {
    color: #333333; }

.sf-menu li ul {
  display: none;
  left: 0;
  top: 59px;
  /* match top ul list item height */
  z-index: 99;
  padding: 12px 0px 18px 0px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 13px;
  -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 13px;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 13px; }
  @media (max-width: 767px) {
    .sf-menu li ul {
      top: 0; } }

.sf-menu li li ul {
  position: static;
  display: block !important;
  opacity: 1 !important;
  background: none;
  -webkit-box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px;
  -moz-box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px;
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px; }

.sf-menu li li li ul {
  padding: 0 0 0 20px; }

.sf-menu li li li ul {
  width: 220px; }

ul.sf-menu li:hover li ul,
ul.sf-menu li.sfHover li ul {
  top: -999em; }

ul.sf-menu li li:hover ul,
ul.sf-menu li li.sfHover ul {
  left: 200px;
  /* match ul width */
  top: 0; }

ul.sf-menu li li:hover li ul,
ul.sf-menu li li.sfHover li ul {
  top: -999em; }

ul.sf-menu li li li:hover ul,
ul.sf-menu li li li.sfHover ul {
  left: 200px;
  /* match ul width */
  top: 0; }

.sf-menu > li > ul {
  padding: 26px 30px 31px;
  width: 100%; }
  .sf-menu > li > ul > li > a {
    text-transform: uppercase;
    font: 600 16px/20px "Open Sans", sans-serif;
    color: #333333; }
    .sf-menu > li > ul > li > a:hover {
      color: #515151; }

.sf-menu > li > ul > li {
  float: left;
  width: 20%;
  padding-right: 15px; }
  @media (max-width: 767px) {
    .sf-menu > li > ul > li {
      width: 50%; } }
  @media (max-width: 479px) {
    .sf-menu > li > ul > li {
      width: 100%;
      padding-bottom: 20px; } }
  @media (min-width: 768px) {
    .sf-menu > li > ul > li.first-in-line-lg {
      clear: left; } }
  @media (min-width: 480px) and (max-width: 767px) {
    .sf-menu > li > ul > li.first-in-line-xs {
      clear: left; } }

.sf-menu > li > ul > li#category-thumbnail {
  width: 100% !important;
  float: none;
  clear: both;
  overflow: hidden;
  padding-right: 0; }
  .sf-menu > li > ul > li#category-thumbnail > div {
    float: left;
    padding-left: 10px;
    width: 33.333%; }
    @media (max-width: 479px) {
      .sf-menu > li > ul > li#category-thumbnail > div {
        width: 100%;
        padding-left: 0;
        padding-top: 10px;
        text-align: center; } }
    .sf-menu > li > ul > li#category-thumbnail > div:first-child {
      padding-left: 0; }
    .sf-menu > li > ul > li#category-thumbnail > div img {
      max-width: 100%;
      display: block; }

.cat-title {
  display: none; }
  @media (max-width: 767px) {
    .cat-title {
      display: block;
      font: 600 18px/22px "Open Sans", sans-serif;
      text-transform: uppercase;
      color: #484848;
      display: block;
      padding: 17px 20px;
      border-bottom: 3px solid #e9e9e9;
      background: #f6f6f6;
      position: relative; }
      .cat-title:hover {
        background: #333333;
        border-bottom-color: #666666;
        color: white; }
      .cat-title:after {
        display: block;
        font-family: "FontAwesome";
        content: "\f067";
        position: absolute;
        right: 15px;
        top: 18px;
        font-size: 26px; }
      .cat-title.active:after {
        content: "\f068"; } }

.sf-menu li.sf-search {
  border: none; }
  .sf-menu li.sf-search input {
    display: inline;
    padding: 0 13px;
    height: 30px;
    line-height: 30px;
    background: white;
    margin: 13px 10px 0 0;
    font-size: 13px;
    color: #9c9b9b;
    border: 1px solid #d6d4d4; }
<?php }} ?>