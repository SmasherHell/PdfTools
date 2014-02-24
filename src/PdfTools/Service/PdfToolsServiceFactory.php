<?php

/**
 * Description of PdfServiceFactory
 *
 * @author Bouchez Guillaume <guillaume.bouchez@infolegale.fr>
 */

namespace PdfTools\Service;

class PdfToolsServiceFactory implements \Zend\ServiceManager\FactoryInterface
{
    
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        return new PdfTools($serviceLocator);
    }

}
