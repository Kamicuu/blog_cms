<?php
/* Smarty version 3.1.31, created on 2022-05-19 18:37:13
  from "cms_template:24" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62867239613738_82089409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf0a509d1c792b09c8ce07e1559527e0fad4053' => 
    array (
      0 => 'cms_template:24',
      1 => '1650813745',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62867239613738_82089409 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\modifier.cms_date_format.php';
?>


<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->canonical)) {?>
  <?php $_smarty_tpl->_assignInScope('canonical', $_smarty_tpl->tpl_vars['entry']->value->canonical ,false ,32);
?>
  <?php $_smarty_tpl->_assignInScope('main_title', $_smarty_tpl->tpl_vars['entry']->value->title ,false ,32);
}?>


<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
    <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

<?php }?>
    <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->extra) {?>
        <?php echo $_smarty_tpl->tpl_vars['extra_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

<?php }
if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
    <br />
        <span class='back'>&#8592; <?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?></span>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
     <div>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
      
          <img src='<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
' alt='' />
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
     </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }?>
    <footer class='news-meta'>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
        <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->category) {?>
        <strong><?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
        <strong><?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

    <?php }?>
    </footer><?php }
}
