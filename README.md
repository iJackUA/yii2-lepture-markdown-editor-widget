Yii2 Lepture Markdown Editor widget
---
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Yii2 widget for Lepture Markdown Editor (https://github.com/lepture/editor) - A markdown editor you really want

## Demo

on [http://lab.lepture.com/editor/](http://lab.lepture.com/editor/)

## Installation via Composer
add to `require` section of your `composer.json`
`"ijackua/yii2-lepture-markdown-editor-widget"`
and run composer update

## Usage example

### Active widget

```php
use ijackua\lepture\Markdowneditor;

Markdowneditor::widget(
			[
				'model' => $model,
				'attribute' => 'full_text',
			])
```

### Simple widget

```php
use ijackua\lepture\Markdowneditor;

Markdowneditor::widget(
			[
				'name' => 'editor',
				'value' => '# Hello world'
			])
```

## Editor options

see on [official site](https://github.com/lepture/editor)

```php
use ijackua\lepture\Markdowneditor;

Markdowneditor::widget(
			[
				'model' => $model,
				'attribute' => 'full_text',
				'leptureOptions' => [
					'toolbar' => false
				]
			])
```

## Marked options (markdown parser used by Lepture Editor)
see on [official Marked site](https://github.com/chjj/marked)

```php
use ijackua\lepture\Markdowneditor;

Markdowneditor::widget(
			[
				'model' => $model,
				'attribute' => 'full_text',
				'markedOptions' => [
					'tables' => false
				]
			])
```

## Credits

- [Ievgen Kuzminov][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ijackua/yii2-lepture-markdown-editor-widget.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ijackua/yii2-lepture-markdown-editor-widget.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ijackua/yii2-lepture-markdown-editor-widget
[link-downloads]: https://packagist.org/packages/ijackua/yii2-lepture-markdown-editor-widget
[link-author]: https://github.com/iJackUA
[link-contributors]: ../../contributors
