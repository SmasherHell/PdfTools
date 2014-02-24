<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace PdfTools\View\Helper;

use Zend\Http\Response;
use Zend\View\Helper\AbstractHelper;


/**
 * Helper for simplifying PDF responses
 */
class Pdf extends AbstractHelper
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * Set Response Header for PDF
     *
     * @param  mixed $data
     * @return string|void
     */
    public function __invoke($data, $filename = "")
    {
        
        $length = strlen($data);
        if (!$this->response instanceof Response) {
            return $data;
        }
        $headers = $this->response->getHeaders();
        if (empty($filename)) {
            $headers->addHeaderLine('Content-Type', 'application/pdf');
            $headers->addHeaderLine('Content-Length', $length);
        } else {
            $headers->addHeaderLine("Content-Type: application/force-download");
            $headers->addHeaderLine('Content-Disposition: attachment; filename="' . urlencode($filename) . '"');
        }
        return $data;
    }

    /**
     * Set the response object
     *
     * @param  Response $response
     * @return Pdf
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
        return $this;
    }
}
