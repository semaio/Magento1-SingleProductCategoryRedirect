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
 * Class Semaio_SingleProductCategoryRedirect_Model_Observer_AbstractObserver
 */
abstract class Semaio_SingleProductCategoryRedirect_Model_Observer_AbstractObserver
{
    /**
     * @var Semaio_SingleProductCategoryRedirect_Model_Factory
     */
    private $factory = null;

    /**
     * Retrieve the factory
     *
     * @return Semaio_SingleProductCategoryRedirect_Model_Factory
     */
    public function getFactory()
    {
        if (null === $this->factory) {
            $this->setFactory(Mage::getModel('semaio_singleproductcategoryredirect/factory'));
        }

        return $this->factory;
    }

    /**
     * Set the factory
     *
     * @param Semaio_SingleProductCategoryRedirect_Model_Factory $factory Factory
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
    }
}
