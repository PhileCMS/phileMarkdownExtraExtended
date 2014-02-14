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

Noticeable differences:

```markdown
> (http://www.whatwg.org/) Content inside a blockquote must be quoted
> from another source, whose address, if it has one,
> may be cited in the `cite` attribute.

===
![phile image](content/images/Icon.png)
===

=== [A **happy face** is good for web developers]
![phile image](content/images/Icon.png)
===
```

Output:

```html
<blockquote cite="http://www.whatwg.org/">
  <p>Content inside a blockquote must be quoted<br>
  from another source, whose address, if it has one,<br>
  may be cited in the <code>cite</code> attribute.</p>
</blockquote>
<figure>
  <p><img src="content/images/Icon.png" alt="phile image"></p>
</figure>
<figure>
<figcaption><p>A <strong>happy face</strong> is good for web developers</p></figcaption>
  <p><img src="content/images/Icon.png" alt="phile image"></p>
</figure>
```

Fenced code blocks with github style

    ```markdown
    /*
    Title: Welcome
    Description: This description will go in the meta description tag
    Author: Joe Bloggs
    Date: 2013/01/01
    Robots: noindex,nofollow
    */
    ```

```html
<pre><code class="language-markdown">/*
Title: Welcome
Description: This description will go in the meta description tag
Author: Joe Bloggs
Date: 2013/01/01
Robots: noindex,nofollow
*/
</code></pre>
```