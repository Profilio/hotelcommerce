<?php /* Smarty version Smarty-3.1.19, created on 2021-10-08 12:39:54
         compiled from "/var/www/html/modules/hotelreservationsystem/views/templates/admin/_partials/htl-form-fields-flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18233125516160745a788a66-84736945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c40cc9f29137022b5a28f2661ccf20af13ff613' => 
    array (
      0 => '/var/www/html/modules/hotelreservationsystem/views/templates/admin/_partials/htl-form-fields-flag.tpl',
      1 => 1632986425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18233125516160745a788a66-84736945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'currentLang' => 0,
    'ps_img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6160745a78c938_44045342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6160745a78c938_44045342')) {function content_6160745a78c938_44045342($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<img class="all_lang_icon" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ps_img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
.jpg">
<?php }?><?php }} ?>
