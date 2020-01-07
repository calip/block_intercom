<?php
namespace Block;
/**
 * intercom - Main Class
 * 
 * Intercom is a fundamentally new way for internet businesses to communicate with customers, personally, at scale. It’s a customer communication platform with a suite of integrated products for every team – including sales, marketing, product, and support.
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package intercom
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_intercom
 */
class intercom extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__intercom_loaded;
		if ($__intercom_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $app_id = $this->config['str_app_id'];
      
			$__intercom_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
