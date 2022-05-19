<?php
/* Smarty version 3.1.31, created on 2022-05-19 19:10:43
  from "tpl_body:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62867a13d51a75_26548364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e929a2c9d74a66a5213b8a066517df683c2aaaa4' => 
    array (
      0 => 'tpl_body:30',
      1 => '1652980235',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62867a13d51a75_26548364 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_sitename')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.sitename.php';
?>
<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
			<header id="header">
				<h1><span><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</span></h1>
				<nav class="links">
				    <?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

				</nav>
			</header>

		<!-- Main -->
			<div id="main">
			    <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
			</div>

		<!-- Sidebar -->
			<section id="sidebar">

				<!-- Intro -->
					<section id="intro">
						<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
						<header>
							<h2>Najlepszy blog tematyczny w sieci</h2>
							<p>Zapraszam do lektury<br><a href="http://html5up.net"> Based on HTML5 UP</a></p>
						</header>
					</section>

				<!-- Posts List -->
					<section>
					    <?php echo News::function_plugin(array('browsecat'=>"1",'number'=>"2",'browsecattemplate'=>"BLOG_news_browse_category",'detailtemplate'=>"BLOG_news_details"),$_smarty_tpl);?>

					</section>

				<!-- About -->
					<section class="blurb">
						<h2>About</h2>
						<p>Blog został stworzony na potrzeby zaliczenia przedmiotu Aplikacje sieciowe II - wykorzystany został gotowy template FUTURE IMPERFECT oraz system zarządzania treścia CMS Made Simple</p>
						<ul class="actions">
							<li><a href="http://www.cmsmadesimple.org" class="button">Learn More</a></li>
						</ul>
					</section>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</section>

	</div>
</body>

	<!-- Scripts -->
		<?php echo '<script'; ?>
 src="templates/future/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="templates/future/assets/js/browser.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="templates/future/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="templates/future/assets/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="templates/future/assets/js/main.js"><?php echo '</script'; ?>
>

</html><?php }
}
