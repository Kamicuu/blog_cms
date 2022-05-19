<?php
/* Smarty version 3.1.31, created on 2022-05-18 18:50:38
  from "cms_template:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_628523deab6239_59564285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1652871448',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628523deab6239_59564285 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.cms_stylesheet.php';
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="templates/future/assets/css/main.css" />
</head>

<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
			<header id="header">
				<h1><span><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</span></h1>
				<nav class="links">
				    
				</nav>
			</header>

		<!-- Main -->
			<div id="main">
			    
			    

				<!-- Post -->
					<article class="post">
						<header>
							<div class="title">
								<h2><a href="single.html">Magna sed adipiscing</a></h2>
								<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
							</div>
							<div class="meta">
								<time class="published" datetime="2015-11-01">November 1, 2015</time>
								<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
							</div>
						</header>
						<a href="single.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
						<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
						<footer>
							<ul class="actions">
								<li><a href="single.html" class="button large">Continue Reading</a></li>
							</ul>
							<ul class="stats">
								<li><a href="#">General</a></li>
								<li><a href="#" class="icon solid fa-heart">28</a></li>
								<li><a href="#" class="icon solid fa-comment">128</a></li>
							</ul>
						</footer>
					</article>

				<!-- Post -->
					<article class="post">
						<header>
							<div class="title">
								<h2><a href="single.html">Ultricies sed magna euismod enim vitae gravida</a></h2>
								<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
							</div>
							<div class="meta">
								<time class="published" datetime="2015-10-25">October 25, 2015</time>
								<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
							</div>
						</header>
						<a href="single.html" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
						<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
						<footer>
							<ul class="actions">
								<li><a href="single.html" class="button large">Continue Reading</a></li>
							</ul>
							<ul class="stats">
								<li><a href="#">General</a></li>
								<li><a href="#" class="icon solid fa-heart">28</a></li>
								<li><a href="#" class="icon solid fa-comment">128</a></li>
							</ul>
						</footer>
					</article>

				<!-- Post -->
					<article class="post">
						<header>
							<div class="title">
								<h2><a href="single.html">Euismod et accumsan</a></h2>
								<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
							</div>
							<div class="meta">
								<time class="published" datetime="2015-10-22">October 22, 2015</time>
								<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
							</div>
						</header>
						<a href="single.html" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
						<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
						<footer>
							<ul class="actions">
								<li><a href="single.html" class="button large">Continue Reading</a></li>
							</ul>
							<ul class="stats">
								<li><a href="#">General</a></li>
								<li><a href="#" class="icon solid fa-heart">28</a></li>
								<li><a href="#" class="icon solid fa-comment">128</a></li>
							</ul>
						</footer>
					</article>


				<!-- Pagination -->
					<ul class="actions pagination">
						<li><a href="" class="disabled button large previous">Previous Page</a></li>
						<li><a href="#" class="button large next">Next Page</a></li>
					</ul>

			</div>

		<!-- Sidebar -->
			<section id="sidebar">

				<!-- Intro -->
					<section id="intro">
						<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
						<header>
							<h2>Future Imperfect</h2>
							<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
						</header>
					</section>

				<!-- Posts List -->
					<section>
						<ul class="posts">
							<li>
								<article>
									<header>
										<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
										<time class="published" datetime="2015-10-20">October 20, 2015</time>
									</header>
									<a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
								</article>
							</li>
							<li>
								<article>
									<header>
										<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
										<time class="published" datetime="2015-10-15">October 15, 2015</time>
									</header>
									<a href="single.html" class="image"><img src="images/pic09.jpg" alt="" /></a>
								</article>
							</li>
							<li>
								<article>
									<header>
										<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
										<time class="published" datetime="2015-10-10">October 10, 2015</time>
									</header>
									<a href="single.html" class="image"><img src="images/pic10.jpg" alt="" /></a>
								</article>
							</li>
							<li>
								<article>
									<header>
										<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
										<time class="published" datetime="2015-10-08">October 8, 2015</time>
									</header>
									<a href="single.html" class="image"><img src="images/pic11.jpg" alt="" /></a>
								</article>
							</li>
							<li>
								<article>
									<header>
										<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
										<time class="published" datetime="2015-10-06">October 7, 2015</time>
									</header>
									<a href="single.html" class="image"><img src="images/pic12.jpg" alt="" /></a>
								</article>
							</li>
						</ul>
					</section>

				<!-- About -->
					<section class="blurb">
						<h2>About</h2>
						<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
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
