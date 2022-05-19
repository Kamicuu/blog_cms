<?php
/* Smarty version 3.1.31, created on 2022-05-19 19:05:09
  from "cms_template:BLOG_news_details" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628678c5d92d97_69431671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15dfc2ad94b6687602e8135e9c8ff37f16ec174a' => 
    array (
      0 => 'cms_template:BLOG_news_details',
      1 => '1652979852',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628678c5d92d97_69431671 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\modifier.cms_date_format.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->canonical)) {?>
  
  <?php $_smarty_tpl->_assignInScope('canonical', $_smarty_tpl->tpl_vars['entry']->value->canonical ,false ,32);
}?>
<article class="post">
	<header>
		<div class="title">
			<h2><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a></h2>
			<p>
                <?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>

			</p>
		</div>
		<div class="meta">
			<time class="published"><?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
		        <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

		        <?php }?>
		    </time>
			<a class="author">
			    <span class="name">
			    <?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

			    </span>
			    <img src="templates/future/images/1024px-User-avatar.jpg" alt="" />
			</a>
		</div>
	</header>
	<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

</article><?php }
}
