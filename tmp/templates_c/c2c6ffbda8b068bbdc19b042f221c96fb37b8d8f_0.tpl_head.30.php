<?php
/* Smarty version 3.1.31, created on 2022-05-19 19:10:43
  from "tpl_head:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62867a13e78e83_36536049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c6ffbda8b068bbdc19b042f221c96fb37b8d8f' => 
    array (
      0 => 'tpl_head:30',
      1 => '1652980235',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62867a13e78e83_36536049 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_title')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.cms_stylesheet.php';
?>
<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="templates/future/assets/css/main.css" />
</head><?php }
}
