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
class Carousel_Slider_Block_Adminhtml_Slideritems_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    /**
     * Initialize form
     * Add standard buttons
     * Add "Save and Continue" button
     */
    public function __construct()
    {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'slider';
        $this->_controller = 'adminhtml_slideritems';
		$this->_mode = 'edit';

        $this->_addButton('save_and_continue', array(
                  'label' => Mage::helper('adminhtml')->__('Save And Continue'),
                  'onclick' => 'saveAndContinueEdit()',
                  'class' => 'save',
        ), -100);
        $this->_updateButton('save', 'label', Mage::helper('slider')->__('Save Slider Item'));

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('form_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'edit_form');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'edit_form');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
           }
        ";
    }

    /**
     * Getter for form header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('slideritems_data') && Mage::registry('slideritems_data')->getSlideritem_id())
        {
            return Mage::helper('slider')->__('Edit Slide "%s"', $this->htmlEscape(Mage::registry('slideritems_data')->getSlideritem_title()));
        } else {
            return Mage::helper('slider')->__('New Slide');
        }
    }


}
