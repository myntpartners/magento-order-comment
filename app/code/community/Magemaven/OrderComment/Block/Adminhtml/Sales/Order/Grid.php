<?php
/**
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @category    Magemaven
 * @package     Magemaven_OrderComment
 * @copyright   Copyright (c) 2011-2012 Sergey Storchay <r8@r8.com.ua>
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
class Magemaven_OrderComment_Block_Adminhtml_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    /**
     * Retrieve collection class
     *
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'ordercomment/order_grid_collection';
    }

    /**
     * Prepare grid columns
     *
     * @return Magemaven_OrderComment_Block_Adminhtml_Sales_Order_Grid
     */
    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        // Add order comment to grid
        $this->addColumn('ordercomment', array(
            'header' => Mage::helper('ordercomment')->__('Order Comment'),
            'index' => 'ordercomment',
        ));

        return $this;
    }
}