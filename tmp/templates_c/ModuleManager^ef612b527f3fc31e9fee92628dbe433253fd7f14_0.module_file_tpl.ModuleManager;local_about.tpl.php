<?php
/* Smarty version 3.1.31, created on 2022-05-18 17:25:12
  from "module_file_tpl:ModuleManager;local_about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62850fd894f267_02376919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef612b527f3fc31e9fee92628dbe433253fd7f14' => 
    array (
      0 => 'module_file_tpl:ModuleManager;local_about.tpl',
      1 => 1650813684,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62850fd894f267_02376919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="pageheader"><?php echo $_smarty_tpl->tpl_vars['about_title']->value;?>
</p>

<?php echo $_smarty_tpl->tpl_vars['about_page']->value;?>


<p class="pageback">
	<a class="pageback" href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('back');?>
</a>
</p><?php }
}
