<?php
/* Smarty version 3.1.31, created on 2022-05-17 00:26:39
  from "tpl_head:2" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6282cf9f1371f3_59296518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a263efb684a5d47dd0f76d4cff7da9eec401532' => 
    array (
      0 => 'tpl_head:2',
      1 => '1650813737',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282cf9f1371f3_59296518 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_sitename')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_title')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_metadata')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.cms_stylesheet.php';
?>
<head>

<title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>


<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>



<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>



</head><?php }
}
