**NOTE:** This repository is not maintained anymore and archived.

phileMarkdownExtraExtended
==========================

[Markdown Extra Extended](https://github.com/egil/php-markdown-extra-extended) plugin for PhileCMS

### Download

This project has a few steps. So it is easier to install via the [zip download](https://github.com/PhileCMS/phileMarkdownExtraExtended/archive/master.zip).

### 1.1 Installation (composer)

Add `"minimum-stability": "dev"` to your composer.json file. Then run the following:

```
php composer.phar require phile/markdown-extra-extended:dev-master
```

### 1.2 Installation (Download)

* Install [Phile](https://github.com/PhileCMS/Phile)
* Clone or unzip this repo into `plugins/phile/markdownExtraExtended`

### Activation

After you have installed the plugin. You need to add the following line to your `config.php` file:

* add `$config['plugins']['phile\\markdownExtraExtended'] = array('active' => true);` to your `config.php`

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

Output:

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
