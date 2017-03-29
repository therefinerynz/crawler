<?php
/**
 * Crawler plugin for Craft CMS
 *
 * Crawler Variable
 *
 * @author    The Refinery
 * @copyright Copyright (c) 2017 The Refinery
 * @link      http://therefinery.co.nz
 * @package   Crawler
 * @since     1.0.0
 */

namespace Craft;

class CrawlerVariable
{
	/**
	 * Get a Crawler instance wrapped around an HTML page, fetched from a given URL
	 *
	 * @param string $url
	 *
	 * @return Crawler
	 */
	public function fetch($url)
	{
		return craft()->crawler->fetch($url);
	}

	/**
	 * Wrapper around HTMLPageCrawler's static create method
	 *
	 * Get a Crawler object from a HTML string, DOMNode, DOMNodeList or Crawler
	 * This is the equivalent to jQuery's $() function when used for wrapping DOMNodes or creating DOMElements from HTML code.
	 *
	 * @param string|HtmlPageCrawler|\DOMNode|\DOMNodeList|array $content
	 *
	 * @return Crawler
	 */
	public function create($html)
	{
		return craft()->crawler->create($html);
	}
}
