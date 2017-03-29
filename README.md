# Crawler plugin for Craft CMS

Traverse, manipulate and display HTML fetched from URLs in your Twig templates.

![Logo](crawler/resources/icon.svg)


## Requirements

This plugin is tested and works with Craft 2.6.x.


## Installation

To install Crawler, follow these steps:

1. Upload the crawler/ folder to your craft/plugins/ folder.
2. Go to Settings > Plugins from your Craft control panel and enable the Crawler plugin.


## Overview

Crawler is a wrapper around the `HtmlPageCrawler` library provided by [Christoph Singer's](https://github.com/wasinger) [HtmlPageDom](https://github.com/wasinger/htmlpagedom).


## Usage

Directly from your Twig templates you can fetch an external HTML page, find elements using CSS selectors, and output these as you wish.

### Example 1: output outerHTML

```php
{# Fetch HTML #}
{% set crawler = craft.crawler.fetch('http://example.com') %}
{# For each p element #}
{% for p in crawler.find('p') %}
	{# Output that element's outerHTML #}
	{{ crawler.outerHTML(p)|raw }}
{% endfor %}
```

The above will output:
```html
<p>This domain is established to be used for illustrative examples in documents. You may use this
domain in examples without prior coordination or asking for permission.</p>
<p><a href="http://www.iana.org/domains/example">More information...</a></p>
```

### Example 2: output innerHTML of first match
```php
{# Fetch HTML #}
{% set crawler = craft.crawler.fetch('http://example.com') %}
{# For the first p element on this page #}
{% for p in crawler.find('p').first() %}
	{# Output that element's innerHTML #}
	{{ crawler.innerHTML()|raw }}
{% endfor %}
```

The above will output:
```html
This domain is established to be used for illustrative examples in documents. You may use this
domain in examples without prior coordination or asking for permission.
```


### Example 3: add a class to each element, and output
```php
{# Fetch HTML #}
{% set crawler = craft.crawler.fetch('http://example.com') %}
{# Find p elements on page, and add someclass to each element #}
{% for p in crawler.find('p').addClass('someclass') %}
	{# Output those elements #}
	{{ crawler.outerHTML(p)|raw }}
{% endfor %}
```

The above will output:
```html
<p class="someclass">This domain is established to be used for illustrative examples in documents. You may use this domain in examples without prior coordination or asking for permission.</p>
<p class="someclass"><a href="http://www.iana.org/domains/example">More information...</a></p>
```


### Example 4: attributes
```php
{# Fetch HTML #}
{% set crawler = craft.crawler.fetch('http://example.com') %}
{# Find a elements on page, and use their href values to output some custom markup #}
<ul>
	{% for a in crawler.find('a') %}
		{% set href = a.getAttribute('href') %}
		<li>
			<a href="{{ href }}">{{ href }}</a>
		</li>
	{% endfor %}
</ul>
```

The above will output:
```html
<ul>
	<li>
		<a href="http://www.iana.org/domains/example">http://www.iana.org/domains/example</a>
	</li>
</ul>
```


## Crawler Roadmap

If there are any other features you would like to see in Crawler, please open an issue.

* Add option to cache fetched pages


## Credit

### HTMLPageDOM
[HtmlPageDom](https://github.com/wasinger/htmlpagedom) library provided by [Christoph Singer](https://github.com/wasinger).

### Crawler Plugin
Brought to you by [The Refinery](http://therefinery.co.nz)


## Changelog
### 1.0
* Initial release


