phileMarkdownExtraExtended
==========================

[Markdown Extra Extended](https://github.com/egil/php-markdown-extra-extended) plugin for PhileCMS

### Download

This project has a few steps. So it is easier to install via the [zip download](https://github.com/PhileCMS/phileMarkdownExtraExtended/archive/master.zip).

### Installation with Composer

Add dependency to your composer.json file and make sure you add the line about the `minimum-stability`:

```json
{
  "minimum-stability": "dev",
  "require": {
      "php": ">=5.3.0",
      "twig/twig": "1.15.*",
      "michelf/php-markdown": "1.3",
      "egil/php-markdown-extra-extended": "dev-master",
      "phile-cms/plugin-installer-plugin": "*"
  }
}
```

Now run your `composer update` command as normal.

Move the `phileMarkdownExtraExtended` folder into your plugins directory.

Move the `MarkdownExtraExtended.php` file to `project_root/lib/Phile/Parser`. If you do not do this, nothing will work.

Modify your `config.php` file:

```php
$config['plugins'] = array(
  // disable the default parser
  'phileParserMarkdown' => array('active' => false),
  // enable the new parser
  'phileParserMarkdownExtraExtended' => array('active' => true)
);
```

### Why Use?

Check out the [project homepage](https://github.com/egil/php-markdown-extra-extended) to see the additional details.