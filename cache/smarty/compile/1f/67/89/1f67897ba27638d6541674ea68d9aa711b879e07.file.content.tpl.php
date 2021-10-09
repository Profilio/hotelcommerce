<?php /* Smarty version Smarty-3.1.19, created on 2021-10-08 11:58:31
         compiled from "/var/www/html/admin467mrggxr/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38273437061606aa7329771-31498356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f67897ba27638d6541674ea68d9aa711b879e07' => 
    array (
      0 => '/var/www/html/admin467mrggxr/themes/default/template/content.tpl',
      1 => 1632986425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38273437061606aa7329771-31498356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61606aa732aea7_94364802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61606aa732aea7_94364802')) {function content_61606aa732aea7_94364802($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
