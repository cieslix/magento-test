<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author cieslix
 */
class Cieslix_Test_Model_Test extends Varien_Event_Observer
{

    /**
     * 
     * @param Varien_Event $event
     * @return void
     */
    public function cmsHome(Varien_Event $event)
    {
        foreach ($event->getControllerAction()->getRequest()->getAliases() as $alias)
        {
            if ($this->_getHomePagePath() === $alias) {
                $event->getControllerAction()->getResponse()->setRedirect(Mage::getBaseUrl());
                return;
            }
        }
    }

    /**
     * 
     * @return string
     */
    protected function _getHomePagePath()
    {
        return Mage::getStoreConfig(Mage_Cms_Helper_Page::XML_PATH_HOME_PAGE);
    }

}
