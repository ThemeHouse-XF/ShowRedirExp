<?php

class ThemeHouse_ShowRedirExp_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_ShowRedirExp' => array(
                'model' => array(
                    'XenForo_Model_Thread'
                ),
                'controller' => array(
                    'XenForo_ControllerPublic_Forum'
                ),
            ),
        );
    }

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_ShowRedirExp_Listener_LoadClass', $class, $extend, 'model');
    }

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_ShowRedirExp_Listener_LoadClass', $class, $extend, 'controller');
    }
}