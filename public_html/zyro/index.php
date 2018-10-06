<?php
	error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => array('ru' => 'Главная', 'en' => 'Главная'), 'file' => '1.php','controllers' => array()),
		'1'	=> array('id' => '2', 'alias' => array('ru' => 'o-nas', 'en' => 'o-nas'), 'file' => '2.php','controllers' => array()),
		'2'	=> array('id' => '3', 'alias' => array('ru' => 'kontakty', 'en' => 'kontakty'), 'file' => '3.php','controllers' => array())
	);
	$forms = array(
		'3'	=> array(
			'61b43a30' => Array( 'email' => 'kosmet7ru@gmail.com', 'emailFrom' => 'kosmet7ru@gmail.com', 'subject' => 'Юль прими заказ', 'sentMessage' => 'Форма отправлена.', 'object' => '', 'objectRenderer' => '', 'loggingHandler' => '', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'recSiteKey' => null, 'recSecretKey' => null, 'maxFileSizeTotal' => '2', 'fields' => array( array( 'fidx' => '0', 'name' => 'Имя', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'Эл. почта', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Сообщение', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$langs = array(
		'ru' => true, 'en' => false
	);
	$def_lang = 'ru';
	$base_lang = 'ru';
	$site_id = "43a9c89a";
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'kosmet7.ru';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang, $urlArgs, $route) = parse_uri();
	$user_key = "E/UN4lCIiEy/dQ==";
	$user_hash = "d122a321f2c86f54";
	$comment_callback = "http://uk.zyro.com/ru-RU/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if ($page && $page['id'] == $home_page && $route) {
		header('Location: '.$base_url.(($lang && $lang != $def_lang) ? (($mod_rewrite ? '' : '?route=').$lang.'/') : ''), true, 301);
	}
	$hr_out = '';
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $ln => $default) {
					$pageUri = getPageUri($page['id'], $ln);
					$out = str_replace(urlencode('{{lang_'.$ln.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_HTTPS']) && $_SERVER['HTTP_X_HTTPS'] !== 'off') ? 'https' : 'http';
			$baseUrl = $proto.'://'.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost').'/';
			$out = str_replace('{{base_url}}', $baseUrl, $out);
			$out = str_replace('{{curr_url}}', $baseUrl.($lang && $lang != $def_lang ? $lang.'/' : '').$route, $out);
			$out = str_replace('{{hr_out}}', $hr_out, $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>