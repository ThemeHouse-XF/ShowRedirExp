<?php
if (false) {

    class XFCP_ThemeHouse_ShowRedirExp_Extend_XenForo_ControllerPublic_Forum extends XenForo_ControllerPublic_Forum
    {
    }
}

class ThemeHouse_ShowRedirExp_Extend_XenForo_ControllerPublic_Forum extends XFCP_ThemeHouse_ShowRedirExp_Extend_XenForo_ControllerPublic_Forum
{
    
    protected function _getThreadFetchElements(array $forum, array $displayConditions)
    {
        $threadFetchElements = parent::_getThreadFetchElements($forum, $displayConditions);
        
        $threadFetchElements['options']['th_join_showredirexpiry'] = ThemeHouse_ShowRedirExp_Extend_XenForo_Model_Thread::FETCH_ThemeHouse_ShowRedirExp_REDIRECT;
        
        return $threadFetchElements;
    }
}