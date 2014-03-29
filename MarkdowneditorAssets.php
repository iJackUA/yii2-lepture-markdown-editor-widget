<?php
/**
 * Lepture Markdown Editor assets class file
 *
 * @author Evgeniy Kuzminov
 * @license MIT License
 * http://stdout.in
 */
namespace ijackua\lepture;

use yii\web\AssetBundle;
use yii;

class MarkdowneditorAssets extends AssetBundle
{
	public $sourcePath = '@leptureeditor/assets';
	public $basePath = '@webroot/assets';
	public $js = [
		'js/marked.js',
		'js/editor.js',
	];
	public $css = [
		'css/editor.css',
		'fonts/icomoon.woff',
		'fonts/icomoon.ttf',
		'fonts/icomoon.svg',
		'fonts/icomoon.eot',
		'fonts/icomoon.dev.svg',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init() {
		Yii::setAlias('@leptureeditor', __DIR__);
		return parent::init();
	}
}