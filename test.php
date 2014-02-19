<?php

require_once './app/Mage.php';
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

foreach (Mage::getModel('catalog/product')->getCollection() as $product)
{
    Zend_Debug::dump($product->debug());
}