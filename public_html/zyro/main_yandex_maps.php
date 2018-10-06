<?php
$supportedLocales = array('ru_RU', 'en_US', 'en_RU', 'ru_UA', 'uk_UA', 'tr_TR');
$locale = (in_array($pluginData->currLangLocale, $supportedLocales) ? $pluginData->currLangLocale : 'ru_RU');
?>
<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=en_US&amp;onload=WB_YandexMaps_script_fn&lang=<?php echo $locale; ?>"></script>