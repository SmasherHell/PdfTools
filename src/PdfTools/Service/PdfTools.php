<?php

/**
 * Description of PdfTools
 *
 * @author Bouchez Guillaume <guillaume.bouchez@infolegale.fr>
 */

namespace PdfTools\Service;

class PdfTools extends \PdfTools\html2pdf\HTML2PDF implements \Zend\ServiceManager\ServiceLocatorAwareInterface
{
    /**
     * @var \Zend\ServiceManager\ServiceLocatorInterface
     */
    private $_serviceManager;
    
    public function __construct(\Zend\ServiceManager\ServiceLocatorInterface $serviceManager)
    {
        $config = $serviceManager->get('PdfTools\Config');
        call_user_func_array('parent::__construct', $config['html2pdf']);
    }
    
    /**
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return \PdfTools\Service\PdfTools
     */
    public function setServiceLocator(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $this->_serviceManager = $serviceLocator;
        return $this;
    }
    
    /**
     * @return \Zend\ServiceManager\ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->_serviceManager;
    }
    
    /**
     * @return \PdfTools\html2pdf\HTML2PDF_MyFpdf
     */
    public function getPdfHandler()
    {
        return $this->pdf;
    }
    
    /**
     * @return string
     */
    public function getPdfStream()
    {
        return $this->Output("file.pdf", "S");
    }
    
}
