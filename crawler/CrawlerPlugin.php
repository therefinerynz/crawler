<?php
/**
 * Crawler plugin for Craft CMS
 *
 * Traverse, manipulate and display HTML fetched from URLs in your Twig templates.
 *
 * @author    The Refinery
 * @copyright Copyright (c) 2017 The Refinery
 * @link      http://therefinery.co.nz
 * @package   Crawler
 * @since     1.0.0
 */

namespace Craft;

class CrawlerPlugin extends BasePlugin
{
	/**
	 *
	 * @return mixed
	 */
	public function init()
	{
		parent::init();
		require_once __DIR__ . '/vendor/autoload.php';
	}

	/**
	 * Returns the user-facing name.
	 *
	 * @return mixed
	 */
	public function getName()
	{
		 return Craft::t('Crawler');
	}

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return Craft::t('Traverse, manipulate and display HTML fetched from URLs in your Twig templates.');
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return 'https://github.com/therefinerynz/crawler/blob/master/README.md';
	}

	/**
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/therefinerynz/crawler/master/releases.json';
	}

	/**
	 * Returns the version number.
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '1.0.0';
	}

	/**
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '1.0.0';
	}

	/**
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'The Refinery';
	}

	/**
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://therefinery.co.nz';
	}

	/**
	 * @return bool
	 */
	public function hasCpSection()
	{
		return false;
	}

	/**
	 */
	public function onBeforeInstall()
	{
	}

	/**
	 */
	public function onAfterInstall()
	{
	}

	/**
	 */
	public function onBeforeUninstall()
	{
	}

	/**
	 */
	public function onAfterUninstall()
	{
	}
}
