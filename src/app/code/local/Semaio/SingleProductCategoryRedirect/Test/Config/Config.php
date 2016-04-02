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
 * Tests for module config
 *
 * @group Semaio_SingleProductCategoryRedirect
 */
class Semaio_SingleProductCategoryRedirect_Test_Config_Config extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * @test
     * @loadExpections
     */
    public function globalConfig()
    {
        $this->assertModuleVersion($this->expected('module')->getVersion());
        $this->assertModuleCodePool($this->expected('module')->getCodePool());
    }

    /**
     * @test
     */
    public function testDefinedObservers()
    {
        $this->assertEventObserverDefined(
            Mage_Core_Model_App_Area::AREA_FRONTEND,
            'catalog_controller_category_init_after',
            'semaio_singleproductcategoryredirect/observer_redirect',
            'execute'
        );
    }
}
