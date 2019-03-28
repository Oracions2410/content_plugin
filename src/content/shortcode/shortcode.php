<?php

defined('_JEXEC') or die('Restrincted access');

class plgContentShortcode extends JPlugin
{

	protected $autoloadLanguage = true;

	function onContentPrepare($context, $article, $params, $limitstart){


		$article->text = str_replace('[copyright]', 'copyright &copy; 2019', $article->text);
		return true;

	}

}
?>