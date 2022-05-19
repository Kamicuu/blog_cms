<?php
/* Smarty version 3.1.31, created on 2022-05-19 18:55:57
  from "cms_template:BLOG_news_browse_category" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6286769d9e54f3_15773401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee5b094f2e3cf3855aeed3de48d98db4f866bff' => 
    array (
      0 => 'cms_template:BLOG_news_browse_category',
      1 => '1652979195',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6286769d9e54f3_15773401 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<ul class="posts">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
<li class="newscategory">
    <article>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['count'] > 0) {?>
		<header>
			<h3>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
</a>
			</h3>
			<div>
			    Articles: <?php echo $_smarty_tpl->tpl_vars['node']->value['count'];?>

			</div>
		</header>
		<a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
" class="image"><img src="templates/future/images/simple-folder-icon-png-21.jpg" alt="" /></a>
		<?php } else { ?>
		<header>
			<h3>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
</a>
			</h3>
			<div>
			     Articles: 0
			</div>
		</header>
		<a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
" class="image"><img src="templates/future/images/simple-folder-icon-png-21.jpg" alt="" /></a>
		<?php }?>
	</article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul>
<?php }
}
}
