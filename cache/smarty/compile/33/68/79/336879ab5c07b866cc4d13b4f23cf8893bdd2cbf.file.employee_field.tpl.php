<?php /* Smarty version Smarty-3.1.19, created on 2021-10-08 12:48:21
         compiled from "/var/www/html/admin467mrggxr/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136022149661607655c7f6a2-52776468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '336879ab5c07b866cc4d13b4f23cf8893bdd2cbf' => 
    array (
      0 => '/var/www/html/admin467mrggxr/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1632986425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136022149661607655c7f6a2-52776468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61607655c807d3_64197946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61607655c807d3_64197946')) {function content_61607655c807d3_64197946($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
