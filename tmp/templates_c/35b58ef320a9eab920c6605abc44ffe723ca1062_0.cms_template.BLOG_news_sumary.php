<?php
/* Smarty version 3.1.31, created on 2022-05-19 19:04:58
  from "cms_template:BLOG_news_sumary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628678ba77fe28_82740785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35b58ef320a9eab920c6605abc44ffe723ca1062' => 
    array (
      0 => 'cms_template:BLOG_news_sumary',
      1 => '1652979847',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628678ba77fe28_82740785 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\modifier.cms_date_format.php';
?>
</p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
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

			</time><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
			<a class="author">
			    <span class="name">
			    <?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

			    </span>
			    <img src="templates/future/images/1024px-User-avatar.jpg" alt="" />
			</a>
			<?php }?>
		</div>
	</header>
	    <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
            <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

	    <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
	        <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

	    <?php }?>
	</p>
	<footer>
		<ul class="actions">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->detail_url;?>
" class="button large">Continue Reading</a></a></li>
		</ul>
	</footer>
</article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<!-- Pagination -->
<ul class="actions pagination">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['prevurl']->value;?>
" 
	class="button large previous
	<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value == 1) {?> disabled <?php }?>">
	    Previous Page</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['nexturl']->value;?>
" 
	class="button large next
	<?php if ($_smarty_tpl->tpl_vars['pagecount']->value == 1 || $_smarty_tpl->tpl_vars['pagenumber']->value == $_smarty_tpl->tpl_vars['pagecount']->value) {?> disabled <?php }?>
	">Next Page</a></li>
</ul>
<!-- End News Display Template --><?php }
}
