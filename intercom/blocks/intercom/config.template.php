<?php
/**
 * intercom - Config
 * 
 * Intercom is a fundamentally new way for internet businesses to communicate with customers, personally, at scale. It’s a customer communication platform with a suite of integrated products for every team – including sales, marketing, product, and support.
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Intercom Settings') ?></h4>
<schlix-config:textbox config-key='str_app_id' label='<?= ___('App ID') ?>' class='form-control' required='required'/>
<p><?= ___('<a href="https://www.intercom.com/help/en/articles/3539-where-can-i-find-my-workspace-id-app-id" target="_blank">Where can I find my app ID ?</a>') ?></p>