<?php /* Smarty version Smarty-3.1.19, created on 2021-10-08 12:49:36
         compiled from "/var/www/html/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722535897616076a060ecc9-98196658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054ee18e10f9e5a0c181cf7338d0f61ae4e9d03d' => 
    array (
      0 => '/var/www/html/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl',
      1 => 1632986425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722535897616076a060ecc9-98196658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_SHORT_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_616076a0612614_83621764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616076a0612614_83621764')) {function content_616076a0612614_83621764($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'About','mod'=>'wkfooteraboutblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-about-hotel">
			<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value,220,'',true), ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</section>
</div><?php }} ?>
