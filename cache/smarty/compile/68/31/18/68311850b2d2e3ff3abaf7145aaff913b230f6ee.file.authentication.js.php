<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:24
         compiled from "C:\xampp\htdocs\Tassel\themes\default-bootstrap\js\authentication.js" */ ?>
<?php /*%%SmartyHeaderCode:1606653e50f844cab14-64059481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68311850b2d2e3ff3abaf7145aaff913b230f6ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\default-bootstrap\\js\\authentication.js',
      1 => 1407520376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1606653e50f844cab14-64059481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f844e3304_91127336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f844e3304_91127336')) {function content_53e50f844e3304_91127336($_smarty_tpl) {?>/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$(document).ready(function(){
	$(document).on('submit', '#create-account_form', function(e){
		e.preventDefault();
		submitFunction();
	});
	$('.is_customer_param').hide();
});

function submitFunction()
{
	$('#create_account_error').html('').hide();
	$.ajax({
		type: 'POST',
		url: baseUri,
		async: true,
		cache: false,
		dataType : "json",
		data: 
		{
			controller: 'authentication',
			SubmitCreate: 1,
			ajax: true,
			email_create: $('#email_create').val(),
			back: $('input[name=back]').val(),
			token: token
		},
		success: function(jsonData)
		{
			if (jsonData.hasError) 
			{
				var errors = '';
				for(error in jsonData.errors)
					//IE6 bug fix
					if(error != 'indexOf')
						errors += '<li>' + jsonData.errors[error] + '</li>';
				$('#create_account_error').html('<ol>' + errors + '</ol>').show();
			}
			else
			{
				// adding a div to display a transition
				$('#center_column').html('<div id="noSlide">' + $('#center_column').html() + '</div>');
				$('#noSlide').fadeOut('slow', function()
				{
					$('#noSlide').html(jsonData.page);
					$(this).fadeIn('slow', function()
					{
						if (typeof bindUniform !=='undefined')
							bindUniform();
						if (typeof bindStateInputAndUpdate !=='undefined')
							bindStateInputAndUpdate();
						document.location = '#account-creation';
					});
				});
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown)
		{
			error = "TECHNICAL ERROR: unable to load form.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
			if (!!$.prototype.fancybox)
			{
			    $.fancybox.open([
		        {
		            type: 'inline',
		            autoScale: true,
		            minHeight: 30,
		            content: "<p class='fancybox-error'>" + error + '</p>'
		        }],
				{
			        padding: 0
			    });
			}
			else
			    alert(error);
		}
	});
}<?php }} ?>
