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
class Carousel_Slider_Block_Adminhtml_Slider extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct(){
		$this->_controller = 'adminhtml_slider';
		$this->_blockGroup = 'slider';
		$this->_headerText = Mage::helper('slider')->__('Carousel Manager');
		$this->_addButtonLabel = Mage::helper('slider')->__('Add Carousel');
		parent::__construct();
	}
}
