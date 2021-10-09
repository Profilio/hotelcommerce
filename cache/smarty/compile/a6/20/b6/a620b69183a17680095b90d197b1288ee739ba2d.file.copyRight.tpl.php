<?php /* Smarty version Smarty-3.1.19, created on 2021-10-08 12:49:36
         compiled from "/var/www/html/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199713056616076a07890c6-74914207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a620b69183a17680095b90d197b1288ee739ba2d' => 
    array (
      0 => '/var/www/html/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl',
      1 => 1632986425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199713056616076a07890c6-74914207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_ESTABLISHMENT_YEAR' => 0,
    'base_dir' => 0,
    'WK_HTL_CHAIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_616076a078d203_73833984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616076a078d203_73833984')) {function content_616076a078d203_73833984($_smarty_tpl) {?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo smartyTranslate(array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</p>
</div><?php }} ?>
