<?php

namespace PdfTools;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements AutoloaderProviderInterface
{
    
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'pdf' => function ($pm) {
                    $response = $pm->getServiceLocator()->get('Response');
                    $plugin = new View\Helper\Pdf();
                    $plugin->setResponse($response);
                    return $plugin;
                },
            ),
        );
    }
}
