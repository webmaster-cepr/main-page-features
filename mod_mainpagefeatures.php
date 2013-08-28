<?php
/**
 * Main Page Features
 * 
 * @license        GNU/GPL, see LICENSE.php
 * mod_mainpagefeatures is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$headline_one = $params->get('headline_one');
$headline_two = $params->get('headline_two');
$headline_three = $params->get('headline_three');

$headline_one_link = $params->get('headline_one_link');
$headline_two_link = $params->get('headline_two_link');
$headline_three_link = $params->get('headline_three_link');

$headline_one_image = $params->get('headline_one_image');
$headline_two_image = $params->get('headline_two_image');
$headline_three_image = $params->get('headline_three_image');
 
$headline_one_text = $params->get('headline_one_text');
$headline_two_text = $params->get('headline_two_text');
$headline_three_text = $params->get('headline_three_text');

?>
