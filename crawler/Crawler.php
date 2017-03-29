<?php

namespace crawler;

use Wa72\HtmlPageDom\HtmlPageCrawler;

/**
 * Crawler plugin for Craft CMS
 *
 * Crawler
 *
 * Extends \Wa72\HtmlPageDom\HtmlPageCrawler
 * Overwrites innerHTML method to work on a given node (not on a set of nodes)
 * and adds some other nice helper methods as well
 *
 * @author    The Refinery
 * @copyright Copyright (c) 2017 The Refinery
 * @link      http://therefinery.co.nz
 * @package   Crawler
 * @since     1.0.0
 */
class Crawler extends HtmlPageCrawler
{
	 /**
	 * Get the inner HTML of the given node
	 *
	 * @param \DOMNode $node
	 *
	 * @return string HTML code fragment
	 */
	public function innerHTML(\DOMNode $node)
	{
		$innerHTML = '';
		$children = $node->childNodes;
		foreach ($children as $child) {
			$innerHTML .= $child->ownerDocument->saveHTML($child);
		}

		return $innerHTML;
	}

	 /**
	 * Get the outer HTML of the given node
	 *
	 * @param \DOMNode $node
	 *
	 * @return string HTML code fragment
	 */
	public function outerHTML(\DOMNode $node)
	{
		return $node->ownerDocument->saveHTML($node);
	}

	/**
	 * Filters the list of nodes with a CSS selector.
	 *
	 * Alias for parent's filter method
	 *
	 * @param string $selector
	 *
	 * @return Crawler
	 */
	public function find($selector)
	{
		return $this->filter($selector);
	}
}
