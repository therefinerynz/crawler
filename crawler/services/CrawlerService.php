<?php
/**
 * Crawler plugin for Craft CMS
 *
 * Crawler Service
 *
 * A simple wrapper service around the HtmlPageDom library
 *
 * @author    The Refinery
 * @copyright Copyright (c) 2017 The Refinery
 * @link      http://therefinery.co.nz
 * @package   Crawler
 * @since     1.0.0
 */

namespace Craft;

use crawler\Crawler;

class CrawlerService extends BaseApplicationComponent
{
	/**
	 * Get a Crawler instance wrapped around an HTML page, fetched from a given URL
	 *
	 * @param string $url
	 *
	 * @return Crawler|null
	 */
	public function fetch($url)
	{
		// Suppress warning
		$html = @file_get_contents($url);

		// Did we find anything?
		if (!$html) {
			CrawlerPlugin::log('Could not fetch content for the page located at '. $url, LogLevel::Error, true);

			return null;
		}

		// Success
		return new Crawler($html);
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
		return Crawler::create($html);
	}
}
