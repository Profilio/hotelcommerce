<?php /* Smarty version Smarty-3.1.19, created on 2021-10-08 12:49:36
         compiled from "/var/www/html/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600671494616076a0620421-06031299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '855a3a6504e99d0ac209995d46e0c6ebf9774f7e' => 
    array (
      0 => '/var/www/html/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl',
      1 => 1632986425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600671494616076a0620421-06031299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allPaymentBlocks' => 0,
    'module_dir' => 0,
    'paymentBlock' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_616076a0625e83_45453170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616076a0625e83_45453170')) {function content_616076a0625e83_45453170($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'payment accepted','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-payment-block">
			<?php if (isset($_smarty_tpl->tpl_vars['allPaymentBlocks']->value)&&$_smarty_tpl->tpl_vars['allPaymentBlocks']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['paymentBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paymentBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allPaymentBlocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paymentBlock']->key => $_smarty_tpl->tpl_vars['paymentBlock']->value) {
$_smarty_tpl->tpl_vars['paymentBlock']->_loop = true;
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/payment_img/".((string)$_smarty_tpl->tpl_vars['paymentBlock']->value['id_payment_block']).".jpg");?>
">
				<?php } ?>
			<?php }?>
		</div>
	</section>
</div><?php }} ?>
