<?php
/** * Carousel Slider
 *
 * NOTICE OF LICENSE
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Corey
 * @package     Carousel_Slider
 * @copyright   Copyright (c) 2015
 * @license     https://github.com/VizualAbstract/carousel-slider
 */
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('slider/slider_links')}` (
      `sliderlink_id` int(5) NOT NULL auto_increment,
      `sliderlink_item` int(4) NOT NULL,
      `sliderlink_title` varchar(200) NULL,
      `sliderlink_x` int(4) NOT NULL,
      `sliderlink_y` int(4) NOT NULL,
      `sliderlink_content` text NULL,
      PRIMARY KEY  (`sliderlink_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();