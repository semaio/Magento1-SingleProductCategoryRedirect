<?php
/**
 * This file is part of the Semaio_SingleProductCategoryRedirect module.
 *
 * See LICENSE.md bundled with this module for license details.
 *
 * @category  Semaio
 * @package   Semaio_SingleProductCategoryRedirect
 * @author    semaio GmbH <hello@semaio.com>
 * @copyright 2016 semaio GmbH (http://www.semaio.com)
 */

/**
 * Class Semaio_SingleProductCategoryRedirect_Model_Observer_Redirect
 */
class Semaio_SingleProductCategoryRedirect_Model_Observer_Redirect
    extends Semaio_SingleProductCategoryRedirect_Model_Observer_AbstractObserver
{
    /**
     * Check if category contains only one product, if yes: redirect directly to the product
     *
     * @param Varien_Event_Observer $observer Observer
     */
    public function execute(Varien_Event_Observer $observer)
    {
        if (!$this->getFactory()->getConfig()->isEnabled()) {
            return;
        }

        /** @var Mage_Catalog_Model_Category $category */
        $category = $observer->getEvent()->getCategory();

        $productCount = $category->getProductCollection()->count();
        if ($productCount == 1) {
            $controllerAction = $observer->getEvent()->getControllerAction();

            /** @var Mage_Catalog_Model_Product $product */
            $product = $category->getProductCollection()->getFirstItem();

            $this->performRedirect($controllerAction, $product);
        }
    }

    /**
     * Perform the redirect for the given product
     *
     * @param Mage_Core_Controller_Varien_Action $controllerAction Controller Action
     * @param Mage_Catalog_Model_Product         $product          Product
     * @codeCoverageIgnore
     */
    public function performRedirect($controllerAction, Mage_Catalog_Model_Product $product)
    {
        $controllerAction->getResponse()->setRedirect($product->getProductUrl());
    }
}
