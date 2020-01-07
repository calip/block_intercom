<?php
/**
 * intercom - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($app_id): ?>
    <script>
        window.intercomSettings = {
            app_id: '<?= ___h($app_id) ?>'
        };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/<?= ___h($app_id) ?>';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<?php else: ?>
    <!-- NOTE - App ID was not set up correctly - please add App ID -->
    <script>console.error("App ID has not been set from configuration");</script>
<?php endif ?>