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
 * Class Semaio_SingleProductCategoryRedirect_Test_Model_Observer_Redirect
 *
 * @group Semaio_SingleProductCategoryRedirect
 */
class Semaio_SingleProductCategoryRedirect_Test_Model_Observer_Redirect extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var Semaio_SingleProductCategoryRedirect_Model_Observer_Redirect
     */
    private $subject;

    /**
     * Set up test class
     */
    protected function setUp()
    {
        parent::setUp();
        $this->subject = Mage::getModel('semaio_singleproductcategoryredirect/observer_redirect');
    }

    /**
     * @test
     */
    public function testInstance()
    {
        $this->assertInstanceOf('Semaio_SingleProductCategoryRedirect_Model_Observer_AbstractObserver', $this->subject);
        $this->assertInstanceOf('Semaio_SingleProductCategoryRedirect_Model_Factory', $this->subject->getFactory());
    }

    /**
     * @test
     * @loadFixture
     */
    public function executeFeatureDisabled()
    {
        $observerMock = $this->getModelMock('semaio_singleproductcategoryredirect/observer_redirect', ['performRedirect']);
        $observerMock->expects($this->never())->method('performRedirect');

        $event = new Varien_Event();
        $observer = new Varien_Event_Observer();
        $observer->setEvent($event);

        $observerMock->execute($observer);
    }

    /**
     * @test
     * @loadFixture ~Semaio_SingleProductCategoryRedirect/config
     * @loadFixture ~Semaio_SingleProductCategoryRedirect/catalog
     * @doNotIndexAll
     */
    public function executeWithMoreThanOneProductInCategory()
    {
        $observerMock = $this->getModelMock('semaio_singleproductcategoryredirect/observer_redirect', ['performRedirect']);
        $observerMock->expects($this->never())->method('performRedirect');

        $category = Mage::getModel('catalog/category')->load(3);

        $event = new Varien_Event();
        $event->setData('category', $category);
        $observer = new Varien_Event_Observer();
        $observer->setEvent($event);

        $observerMock->execute($observer);
    }

    /**
     * @test
     * @loadFixture ~Semaio_SingleProductCategoryRedirect/config
     * @loadFixture ~Semaio_SingleProductCategoryRedirect/catalog
     * @doNotIndexAll
     */
    public function execute()
    {
        $observerMock = $this->getModelMock('semaio_singleproductcategoryredirect/observer_redirect', ['performRedirect']);
        $observerMock->expects($this->once())->method('performRedirect');

        $category = Mage::getModel('catalog/category')->load(4);

        $event = new Varien_Event();
        $event->setData('category', $category);
        $observer = new Varien_Event_Observer();
        $observer->setEvent($event);

        $observerMock->execute($observer);
    }
}
