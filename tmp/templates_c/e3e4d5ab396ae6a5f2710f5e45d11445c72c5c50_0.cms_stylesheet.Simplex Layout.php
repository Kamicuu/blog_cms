<?php
/* Smarty version 3.1.31, created on 2022-05-18 12:30:36
  from "cms_stylesheet:Simplex Layout" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6284cacc4ffe61_61569500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e4d5ab396ae6a5f2710f5e45d11445c72c5c50' => 
    array (
      0 => 'cms_stylesheet:Simplex Layout',
      1 => '1650813737',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284cacc4ffe61_61569500 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_uploads_url')) require_once 'D:\\ROZNE\\blog_cms\\lib\\plugins\\function.uploads_url.php';
?>
/* cmsms stylesheet: Simplex Layout modified: 24 April 2022 17:22:17 */
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'path', null);
echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/simplex/images<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'font', null);
echo smarty_function_uploads_url(array(),$_smarty_tpl);?>
/simplex/fonts<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('light_grey', '#f1f1f1');
$_smarty_tpl->_assignInScope('grey', '#e9e9e9');
$_smarty_tpl->_assignInScope('dark_grey', '#555' ,false ,32);
$_smarty_tpl->_assignInScope('white', '#fff');
$_smarty_tpl->_assignInScope('orange', '#f39c2c' ,false ,32);
$_smarty_tpl->_assignInScope('dark_orange', '#e6870e');
$_smarty_tpl->_assignInScope('yellow', '#fdbd34');
?>@font-face {font-family: 'simplex';src: url('<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
/simplex.eot');src: url('<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
/simplex.eot?#iefix') format('embedded-opentype'),url('<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
/simplex.woff') format('woff'),url('<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
/simplex.ttf') format('truetype'),url('<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
/simplex.svg#simplex') format('svg');font-weight: normal;font-style: normal;}[class^="icon-"], [class*=" icon-"] {font-family: 'simplex';speak: none;font-style: normal;font-weight: normal;font-variant: normal;text-transform: none;line-height: 1;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;}.icon-arrow-up:before {content: "\e600";}.icon-arrow-left:before {content: "\e601";}.icon-search:before {content: "\e603";}.icon-printer:before {content: "\e604";}.icon-linkedin:before {content: "\e605";}.icon-pinterest:before {content: "\e606";}.icon-youtube:before {content: "\e607";}.icon-facebook:before {content: "\e608";}.icon-google:before {content: "\e609";}.icon-twitter:before {content: "\e60a";}.icon-link:before {content: "\e602";}body {background: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;font-family: 'Noto Sans', sans-serif;font-size: 1em;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;line-height: 1.5;}.leftaligned {margin-left: 0;}.rightaligned {margin-right: 0;}body#boxed {background: #f2f2f2 url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/body-background.png) repeat;}body.fullwidth .row {max-width: none;}a img {border: none;}.right {float: right;}.left {float: left;}.spacing {margin: 15px;}.spacing.left {margin-right: 0;}.spacing.right {margin-left: 0;}.border {border: 2px solid <?php echo $_smarty_tpl->tpl_vars['grey']->value;?>
;}pre, code, kbd, samp {font-family: Consolas, 'Andale Mono WT', 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', monospace;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;}pre code {line-height: 1.4;font-size: .8125em;}pre {padding: 10px;margin: 10px 0;overflow: auto;width: 93%;background: <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;border-radius: 6px;-webkit-border-radius: 6px;-moz-border-radius: 6px;-o-border-radius: 6px;}*:first-child+ html pre {padding-bottom: 20px;overflow-y: hidden;overflow: visible;overflow-x: auto;}* html pre {padding-bottom: 20px;overflow: visible;overflow-x: auto;}hr {border: solid <?php echo $_smarty_tpl->tpl_vars['grey']->value;?>
;border-width: 1px 0 0 0;clear: both;margin: 10px 0 30px 0;height: 0;}a {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}a.external {text-decoration: none;}a:visited {color: <?php echo $_smarty_tpl->tpl_vars['dark_orange']->value;?>
;}a:hover {color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;transition: transform .3s ease-out;-webkit-transition: color .3s ease-out;-moz-transition: color .3s ease-out;-o-transition: color .3s ease-out;text-decoration: underline;}a:focus {outline: thin dotted;}a:hover, a:active {outline: 0;}a.external:after {content: "\e602";padding-left: 4px;font-family: 'simplex';text-decoration: none;}h1, h2 {font-family: 'Oswald', Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-weight: 700;}h3, h4, h5, h6 {font-weight: 400;}h1 {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;margin: 10px 0;font-size: 2em;text-transform: uppercase;}h2 {color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font-size: 1.75em;}h3 {color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font-size: 1.5em;}h4 {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;font-size: 1.375em;}h5 {font-size: 1.25em}h6 {font-size: 1.125em;}blockquote, blockquote p {font-size: 1.0625em;line-height: 1.5;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font-style: italic;font-family: Georgia, Times New Roman, serif;}blockquote {margin: 0 0 20px 0;padding: 9px 10px 10px 19px;border-left: 5px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;}blockquote cite {display: block;font-size: .941176em;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;}blockquote cite:before {content: "\2014 \0020";}blockquote cite a, blockquote cite a:visited, blockquote cite a:visited {font-family: Georgia, Times New Roman, serif;}.page-wrapper {border-top: 5px solid <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;margin-bottom: 15px;}#boxed #wrapper {margin-top: 15px;border-top: 5px solid <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;background: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;box-shadow: 0 0 15px 0 #c6c6c6;}#boxed.page-wrapper {border-top: none;}.inner-section {padding-left: 20px;padding-right: 20px;}.logo {margin-top: 20px;text-align: center;}.logo a {display: block;}.top .header {border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;}.phrase span {font-family: 'Oswald', Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;text-transform: uppercase;color: #ddd;font-weight: 700;font-size: 1.5em;}.search {text-align: right;}input.search-input::-webkit-search-decoration, input.search-input::-webkit-search-results-button,input.search-input::-webkit-search-results-decoration {-webkit-appearance: none;}.search .icon-search {margin-left: -25px;display: inline-block;height: 24px;line-height: 24px;text-align: center;width: 24px;position: relative;z-index: 10;color: #ddd;top: 3px;}.search ::-webkit-input-placeholder,.search ::-moz-placeholder,.search input[placeholder] {line-height: normal;}input.search-input {border: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;line-height: normal;outline: 0;padding: 6px 0 6px .5%;font-size: .6875em;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;transition: all .35s ease-in-out;-webkit-transition: all .35s ease-in-out;-moz-transition: all .35s ease-in-out;-o-transition: all .35s ease-in-out;max-width: 99.5%;}input.search-input:focus {border: 1px solid <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;box-shadow: 0 0 3px <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;-webkit-box-shadow: 0 0 3px <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;-moz-box-shadow: 0 0 3px <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;-o-box-shadow: 0 0 3px <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}#main-menu {margin-top: 25px;}#main-menu > li {display: block;border-bottom: 1px dotted <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;position: relative;}#main-menu > li:last-child {border-bottom: none;}#main-menu > li > a,#main-menu > li.sectionheader > span {font-family: 'Oswald', Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;text-transform: uppercase;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;text-decoration: none;font-size: 1.0625em;font-weight: 700;cursor: pointer;padding: 8px 0;display: block;position: relative;}#main-menu > li.current > a,#main-menu > li.current.sectionheader > span,#main-menu > li:hover > a,#main-menu > li.sectionheader:hover > span {color: <?php echo $_smarty_tpl->tpl_vars['dark_orange']->value;?>
;}#main-menu > li > ul,#main-menu > li > ul > li > ul  {position: absolute;left: -999em;}#main-menu > li:hover > ul,#main-menu > li.active > ul,#main-menu > li > ul > li:hover > ul,#main-menu > li > ul > li.active > ul {position: relative;left: 0;}#main-menu > li > ul > li > a,#main-menu > li > ul > li.sectionheader > span,#main-menu > li > ul > li > ul > li > a,#main-menu > li > ul > li > ul > li.sectionheader > span {text-decoration: none;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;text-transform: uppercase;display: block;padding: 4px 0;}#main-menu > li > ul > li:hover > a,#main-menu > li > ul > li.sectionheader:hover > span,#main-menu > li > ul > li > ul > li:hover > a,#main-menu > li > ul > li > ul > li.sectionheader:hover > span {color: #999;}#main-menu > li > ul > li > ul > li > a,#main-menu > li > ul > li > ul > li.sectionheader > span {padding-left: 15px;font-size: .875em;text-transform: none;}#main-menu > li > a i,#main-menu > li > ul > li > a i,#main-menu > li.sectionheader > span i,#main-menu > li > ul > li.sectionheader > span i {float: right;position: relative;padding-top: 6px;-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-ms-transform: rotate(0deg);-o-transform: rotate(0deg);transform: rotate(0deg);-webkit-transition: -webkit-transform 250ms ease-out 0s;-moz-transition: -moz-transform 250ms ease-out 0s;-o-transition: -o-transform 250ms ease-out 0s;transition: transform 250ms ease-out 0s;}#main-menu > li:hover > a i,#main-menu > li.active > a i,#main-menu > li > ul > li:hover > a i,#main-menu > li > ul > li.active > a i,#main-menu > li.sectionheader:hover > span i,#main-menu > li.active.sectionheader > span i,#main-menu > li > ul > li.sectionheader:hover > span i,#main-menu > li > ul > li.active.sectionheader > span i {-webkit-transform: rotate(-90deg);-moz-transform: rotate(-90deg);-ms-transform: rotate(-90deg);-o-transform: rotate(-90deg);transform: rotate(-90deg);}.content-wrapper {padding-top: 20px;}.content-top {font-family: Georgia, Times New Roman, serif;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font-style: italic;line-height: 20px;position: relative;}.content-top .title-border {content: '';height: 1px;display: block;width: 100%;border-bottom: 1px dotted #ddd;position: absolute;top: 50%;}.breadcrumb {display: inline-block;background: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;width: auto;padding-right: 6px;z-index: 1;position: relative;}.breadcrumb a {color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;display: inline-block;width: auto;background: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;}a.printbutton {display: none;}.content .news-summary span.heading {display: none;}.content .news-article {margin-bottom: 15px;padding-bottom: 15px;border-bottom: 1px dotted <?php echo $_smarty_tpl->tpl_vars['grey']->value;?>
;}.content .news-summary ul.category-list {margin: 15px 0;}.content .news-summary ul.category-list li a, .news-summary ul.category-list li span {border-radius: 4px;}.news-summary ul.category-list li span {opacity: .4;}.news-article h2 {margin: 0 0 15px 0;}.news-article h2 a {font-family: 'Oswald', Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;text-transform: uppercase;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font-size: 16px;text-decoration: none;font-weight: 700;}.news-article .date {background: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;color: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;display: block;float: left;width: 40px;padding: 6px;height: 40px;border-radius: 26px;text-align: center;font-family: Georgia, Times New Roman, serif;}.news-article .day {font-size: 20px;line-height: 1;padding-bottom: 2px;font-style: italic;display: block;}.news-article.month {font-size: 11px;display: block}.news-article .author, .news-article .category {font-family: Georgia, Times New Roman, serif;display: block;padding-left: 60px;font-size: 11px;font-style: italic;}.news-summary ul.category-list {margin: 15px 0 -1px 0;padding: 0;list-style: none;}.news-summary ul.category-list li {float: left;display: block;width: auto;margin-right: 5px;}.news-summary ul.category-list li a, .news-summary ul.category-list li span {display: block;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;padding: 4px 8px;background: <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;border-radius: 4px 4px 0 0;text-decoration: none;font-size: 11px;text-transform: uppercase;}.news-summary ul.category-list li a:hover {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}.news-summary .paginate {font: italic 11px/1.2 Georgia, Times New Roman, serif;}.news-summary .paginate a {padding: 0 3px;}.news-meta {background: <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;padding: 10px;margin: 10px 0;}.more, .more a,.back, .back a,.previous a, .next a, .previous, .next {font: italic 12px/1.3 Georgia, Times New Roman, serif;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;text-decoration: none;}.more a:hover, .back a:hover, .previous a:hover, .next a:hover {text-decoration: underline;}.previous, .next {padding: 6px 0;}.previous {float: left;}.next {float: right;}.sidebar .news-summary span.heading {position: relative;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font: normal 1em/1.25 Georgia, Times New Roman, serif;margin: 0 0 15px 0;display: block;}.sidebar .news-summary span.heading:after {content: '';height: 1px;display: block;width: 100%;border-bottom: 1px dotted #ddd;position: absolute;top: 50%;}.sidebar .news-summary .heading span {display: inline-block;width: auto;background: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;padding-right: 6px;position: relative;z-index: 10;}.sidebar .news-article {padding: 15px;position: relative;background: <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;margin-bottom: 20px;border-radius: 0 0 6px 0;font-size: .8125em;}.sidebar .news-article:before {content: '';position: absolute;bottom: -15px;right: 25px;width: 10px;height: 35px;-webkit-transform: rotate(55deg) skewY(55deg);-moz-transform: rotate(55deg) skewY(55deg);-o-transform: rotate(55deg) skewY(55deg);-ms-transform: rotate(55deg) skewY(55deg);transform: rotate(55deg) skewY(55deg);background: <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;}.lt-ie9 .sidebar .news-article:before {display: none;}.footer {position: relative;border-top: 8px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;margin: 25px 0 10px 0;padding-top: 20px;padding-bottom: 20px;}.footer:before {content: ' ';border-top: 2px dotted <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;border-bottom: 2px dotted <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;height: 4px;display: block;position: absolute;width: 100%;top: -8px;left: 0;}.copyright {padding-top: 15px;}.copyright-info {color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;font-size: .6875em;}.footer ul.social {padding: 0;margin: 0;list-style: none;text-align: center;}.footer .social li {display: inline;margin: 0;padding: 0;margin-right: 6px;}.footer .social li a {display: inline-block;text-decoration: none;font-size: 2.625em;line-height: 1;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;}.footer .social li a:hover {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}.footer .social li a i {display: inline-block;}.back-top a {display: inline-block;width: 16px;height: 16px;line-height: 16px;padding: 8px;border: 5px solid <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;text-decoration: none;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;border-radius: 500px;-webkit-border-radius: 500px;-moz-border-radius: 500px;-o-border-radius: 500px;position: absolute;top: -24px;left: 50%;margin-left: -12px;-webkit-transition: all 200ms ease-in-out;-moz-transition: all 200ms ease-in-out;-ms-transition: all 200ms ease-in-out;-o-transition: all 200ms ease-in-out;transition: all 200ms ease-in-out;}.back-top a:hover {background-color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;color: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;-webkit-transform: scale(1.1);-moz-transform: scale(1.1);-ms-transform: scale(1.1);-o-transform: scale(1.1);transform: scale(1.1);}.footer-navigation {padding-top: 15px;border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;}#footer-menu li > a,#footer-menu li.sectionheader > span {color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;display: block;text-decoration: none;}#footer-menu li > a:hover,#footer-menu li > a.current,#footer-menu li.sectionheader > span:hover,#footer-menu li.sectionheader > span.current {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}#footer-menu > li > a,#footer-menu > li.sectionheader > span {font-family: 'Oswald', Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;text-transform: uppercase;text-decoration: none;display: block;}#footer-menu > li > ul > li > a,#footer-menu > li > ul > li.sectionheader > span {font-size: .875em;padding: 2px 0;}#footer-menu > li > ul {margin: 15px 0;}@media screen and (min-width: 768px) {.lt-768 {display: none;}.logo {margin-top: 12px;position: relative;text-align: left;}.logo .palm {position: absolute;top: 5px;left: 45px;background: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/palm-circle.png) no-repeat;display: block;width: 48px;height: 48px;transition: transform 0.6s ease-out;-webkit-transition: -webkit-transform 0.6s ease-out;-moz-transition: -moz-transform 0.6s ease-out;-o-transition: -o-transform 0.6s ease-out;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;}.logo a:hover .palm {transform: rotate(360deg);-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);-o-transform: rotate(360deg);}nav.main-navigation {z-index: 990;height: 55px;line-height: 37px;margin-top: 20px;}#main-menu {float: right;margin-top: 0;}#main-menu > li {display: inline-block;padding: 0;margin: 0 4px;border: none;position: relative;}#main-menu > li i {display: none;}.touch-device #main-menu > li i {display: inline-block;float: none;}.touch-device #main-menu > li li i {float: left;display: inline-block;margin-right: 8px;padding-top: 2px;text-align: left;}.touch-device #main-menu > li:first-child li i {float: right;}#main-menu > li:first-child, #main-menu > li.first {margin-left: 0;}#main-menu > li:last-child, #main-menu > li.last {margin-right: 0;}#main-menu > li > a,#main-menu > li.sectionheader span {padding: 0 6px 0 10px;line-height: 37px;font-size: 1em;}#main-menu > li.parent:hover > a,#main-menu > li.sectionheader.parent:hover > span,#main-menu > li.parent.active > a,#main-menu > li.parent.active > span {color: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;background-color: rgba(85, 85, 85, .95);}#main-menu > li > ul,#main-menu > li > ul > li > ul  {display: block;width: 260px;}#main-menu > li:hover > ul,#main-menu > li.active > ul,#main-menu > li > ul > li:hover > ul,#main-menu > li > ul > li.active > ul {height: auto;position: absolute;z-index: 9999;top: 37px;right: 0;left: auto;display: block;border-radius: 3px;}#main-menu > li:first-child:hover > ul,#main-menu > li:first-child.active > ul {right: auto;left: 0;}#main-menu > li > ul > li {position: relative;line-height: 1;margin: 0;padding-left: 10px;}#main-menu > li:first-child > ul > li {padding-right: 10px;padding-left: 0;}#main-menu > li > ul > li > a,#main-menu > li > ul > li.sectionheader > span,#main-menu > li > ul > li > ul > li > a,#main-menu > li > ul > li > ul > li.sectionheader > span {color: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;display: block;text-transform: none;line-height: 1.2;border-bottom: 1px dotted #858585;background-color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;background-color: rgba(90, 90, 90, .98);padding: 8px 12px;font-size: .875em;text-decoration: none;}#main-menu > li > ul > li.current > a,#main-menu > li > ul > li.current.sectionheader > span,#main-menu > li > ul > li > ul > li.current > a,#main-menu > li > ul > ul > li > li.current.sectionheader > span {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}#main-menu > li > ul > li:hover > ul,#main-menu > li > ul > li.active > ul {width: 250px;height: auto;top: 0;right: auto;left: -250px;}#main-menu > li:first-child > ul > li:hover > ul,#main-menu > li:first-child > ul > li.active > ul {left: auto;right: -250px;}.lt-ie9 #main-menu > li > ul > li:hover > ul,.lt-ie9 #main-menu > li > ul > li.active > ul {left: -247px;}#main-menu > li > ul > li:hover > ul:after,#main-menu > li > ul > li.active > ul:after {content: ' ';width: 0px;height: 0px;border-style: solid;border-width: 7px 0 7px 6px;border-color: transparent transparent transparent <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;border-color: transparent transparent transparent rgba(85, 85, 85, .95);position: absolute;right: -6px;top: 12px;}.lt-ie9 #main-menu > li:first-child > ul > li:hover > ul,.lt-ie9 #main-menu > li:first-child > ul > li.active > ul {left: auto;right: -247px;}#main-menu > li:first-child > ul > li:hover > ul:after,#main-menu > li:first-child > ul > li.active > ul:after {left: -10px;right: auto;}#main-menu li ul li a:hover,#main-menu li ul li span.sectionheader:hover {box-shadow: 0 0 5px rgba(85, 85, 85, .9);z-index: 2;}#main-menu > ul > li:last-child > a,#main-menu > ul > li.sectionheader:last-child > span,#main-menu > ul > li > ul > li:last-child > a,#main-menu > ul > li > ul > li.sectionheader:last-child > span {border-bottom: none;}.header-bottom {height: 55px;line-height: 55px;padding: 8px 0;}.phrase-text {text-align: left;}input.search-input {height: 17px;line-height: 17px;width: 100%;max-width: 320px;}input.search-input:focus {max-width: 90%;}a.printbutton {display: block;padding-left: 6px;width: 16px;height: 16px;float: right;text-decoration: none;color: <?php echo $_smarty_tpl->tpl_vars['dark_grey']->value;?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;z-index: 1;position: relative;}a.printbutton i {display: inline-block;-webkit-transform: rotateY(0deg);-moz-transform: rotateY(0deg);-ms-transform: rotateY(0deg);-o-transform: rotateY(0deg);transform: rotateY(0deg);-webkit-transition: -webkit-transform 250ms ease-out 0s;-moz-transition: -moz-transform 250ms ease-out 0s;-o-transition: -o-transform 250ms ease-out 0s;transition: transform 250ms ease-out 0s;}a.printbutton:hover {color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}a.printbutton:hover i {-webkit-transform: rotateY(360deg);-moz-transform: rotateY(180deg);-ms-transform: rotateY(360deg);-o-transform: rotateY(360deg);transform: rotateY(360deg);}.footer ul.social {text-align: left;}.footer .social li a i {display: inline-block;-webkit-transform: rotateY(0deg);-moz-transform: rotateY(0deg);-ms-transform: rotateY(0deg);-o-transform: rotateY(0deg);transform: rotateY(0deg);-webkit-transition: -webkit-transform 250ms ease-out 0s;-moz-transition: -moz-transform 250ms ease-out 0s;-ms-transition: -moz-transform 250ms ease-out 0s;-o-transition: -o-transform 250ms ease-out 0s;transition: transform 250ms ease-out 0s;}.footer .social li a:hover i {-webkit-transform: rotateY(360deg);-moz-transform: rotateY(180deg);-ms-transform: rotateY(360deg);-o-transform: rotateY(360deg);transform: rotateY(360deg);}.footer-navigation {border-bottom: none;}#footer-menu > li {float: left;display: block;position: relative;margin-left: 3.8%;width: 30.75%;}#footer-menu > li:first-child {margin-left: 0;}}@media only screen and (max-width: 780px) {.search {margin-top: 15px;}input.search-input {width: 100%;max-width: 100%;float: left;}input.search-input:focus {max-width: none;}.header-bottom {padding-top: 20px;text-align: center;line-height: inherit;padding: 20px 0;}}@media only screen and (min-width: 940px) and (max-width: 1110px) {#main-menu > li {margin: 0;}#main-menu > li > a,#main-menu > li.sectionheader span {padding: 0 6px;}}@media only screen and (min-width: 768px) and (max-width: 1050px) {.row nav.main-navigation {height: auto;float: none;display: block;margin-left: 0;width: 100%;clear: left;}#main-menu {margin-top: 15px;margin-bottom: 15px;border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;float: none;display: block;}#main-menu > li {margin: 0;bottom: -1px;text-align: center;border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;border-right: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;border-top: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;}#main-menu > li.current {border-bottom-color: <?php echo $_smarty_tpl->tpl_vars['white']->value;?>
;border-top-color: <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;}#main-menu > li.current > a {border-top: 1px solid <?php echo $_smarty_tpl->tpl_vars['orange']->value;?>
;line-height: 45px;}#main-menu > li:first-child {border-left: 1px solid <?php echo $_smarty_tpl->tpl_vars['light_grey']->value;?>
;}#main-menu > li > a,#main-menu > li > span {line-height: 46px;padding-left: 12px;padding-right: 6px;}#main-menu > li:hover > ul,#main-menu > li.active > ul {top: 45px;}.header-bottom {height: auto;}.row .seven-col.phrase-text,.row .five-col.search {display: block;float: none;width: 100%;margin-left: 0;text-align: center;}}@-ms-viewport {width: device-width;}@-o-viewport {width: device-width;}@-moz-viewport {width: device-width;}@-webkit-viewport {width: device-width;}@viewport {width: device-width;}
<?php }
}
