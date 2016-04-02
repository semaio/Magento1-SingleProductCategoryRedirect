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
 * Class Semaio_SingleProductCategoryRedirect_Model_Config
 */
class Semaio_SingleProductCategoryRedirect_Model_Config
{
    const XML_PATH_SINGLEPRODUCTCATEGORYREDIRECT_ENABLED = 'catalog/singleproductcategoryredirect/enabled';

    /**
     * Check if feature is enabled
     *
     * @param  Mage_Core_Model_Store|int|null $store Store
     * @return bool
     */
    public function isEnabled($store = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_SINGLEPRODUCTCATEGORYREDIRECT_ENABLED, $store);
    }
}
