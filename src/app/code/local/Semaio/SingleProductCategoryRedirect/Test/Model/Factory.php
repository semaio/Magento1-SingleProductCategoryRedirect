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
 * Class Semaio_SearchSkuRedirect_Test_Model_Factory
 *
 * @group Semaio_SingleProductCategoryRedirect
 */
class Semaio_SingleProductCategoryRedirect_Test_Model_Factory extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var Semaio_SingleProductCategoryRedirect_Model_Factory
     */
    private $subject;

    /**
     * Set up test class
     */
    protected function setUp()
    {
        parent::setUp();
        $this->subject = Mage::getModel('semaio_singleproductcategoryredirect/factory');
    }

    /**
     * @test
     */
    public function getConfig()
    {
        $this->assertInstanceOf('Semaio_SingleProductCategoryRedirect_Model_Config', $this->subject->getConfig());
    }
}
