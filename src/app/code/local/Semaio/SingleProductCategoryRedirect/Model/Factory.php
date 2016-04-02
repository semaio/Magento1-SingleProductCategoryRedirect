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
 * Class Semaio_SingleProductCategoryRedirect_Model_Factory
 */
class Semaio_SingleProductCategoryRedirect_Model_Factory
{
    /**
     * Retrieve the config model
     *
     * @return Semaio_SingleProductCategoryRedirect_Model_Config
     */
    public function getConfig()
    {
        return Mage::getModel('semaio_singleproductcategoryredirect/config');
    }
}
