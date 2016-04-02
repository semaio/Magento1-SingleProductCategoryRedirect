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
 * Class Semaio_SingleProductCategoryRedirect_Test_Model_Config
 *
 * @group Semaio_SingleProductCategoryRedirect
 */
class Semaio_SingleProductCategoryRedirect_Test_Model_Config extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var Semaio_SingleProductCategoryRedirect_Model_Config
     */
    private $subject;

    /**
     * Set up test class
     */
    protected function setUp()
    {
        parent::setUp();
        $this->subject = Mage::getModel('semaio_singleproductcategoryredirect/config');
    }

    /**
     * @test
     * @loadFixture ~Semaio_SingleProductCategoryRedirect/config
     */
    public function isEnabled()
    {
        $this->assertTrue($this->subject->isEnabled());
    }
}
