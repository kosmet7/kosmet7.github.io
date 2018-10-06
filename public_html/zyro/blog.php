<?php if ($lang == 'ru') { ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Blog" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20171208161001" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20171215085102" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1514263619" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1514263619" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = 'ru';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance162" class="wb_element wb-menu wb-menu-mobile"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="ru/%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F/" target="_self" title="Главная">Главная</a></li><li><a href="ru/o-nas/" target="_self" title="О нас">О нас</a></li><li><a href="ru/kontakty/" target="_self" title="Контакты">Контакты</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance163" class="wb_element wb_element_picture"><img alt="gallery/vintage_logo_detail" src="gallery_gen/2cfaedff3ca3e0ca3545a6c941e1b5d5.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance166" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance166");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance166").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 180px;"><div id="wb_element_instance164" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><a href="http://kosmet7.ru">kosmet7.ru</a> ©Copyright</p>
</div><div id="wb_element_instance165" class="wb_element" style=" overflow: hidden;"><!-- «Сайтофициально.рф/обратный-звонок-бесплатно.html» {literal} --> <script type="text/javascript"> (function(){ var widget_id = '9008074887'; var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://сайтофициально.рф/script/js/callback/'+widget_id+'/callback_st_of.js'; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script><!-- {/literal} «Сайтофициально.рф/обратный-звонок-бесплатно.html» --></div><div id="wb_element_instance167" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>


<?php } else if ($lang == 'en') { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Blog" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20171208161001" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20171215085102" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1514263619" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1514263619" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = 'en';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance168" class="wb_element wb-menu wb-menu-mobile"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="en/%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F/" target="_self" title="Главная">Главная</a></li><li><a href="en/o-nas/" target="_self" title="О нас">О нас</a></li><li><a href="en/kontakty/" target="_self" title="Контакты">Контакты</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance169" class="wb_element wb_element_picture"><img alt="gallery/vintage_logo_detail" src="gallery_gen/2cfaedff3ca3e0ca3545a6c941e1b5d5.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance172" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance172");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance172").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 180px;"><div id="wb_element_instance170" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><a href="http://kosmet7.ru">kosmet7.ru</a> ©Copyright</p>
</div><div id="wb_element_instance171" class="wb_element" style=" overflow: hidden;"><!-- «Сайтофициально.рф/обратный-звонок-бесплатно.html» {literal} --> <script type="text/javascript"> (function(){ var widget_id = '9008074887'; var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://сайтофициально.рф/script/js/callback/'+widget_id+'/callback_st_of.js'; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script><!-- {/literal} «Сайтофициально.рф/обратный-звонок-бесплатно.html» --></div><div id="wb_element_instance173" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>


<?php } ?>
