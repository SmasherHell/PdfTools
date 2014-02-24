<?php

return array(
    'PdfTools' => array(
        'html2pdf' => array('P','A4','fr'),
    ),
    'service_manager' => array(
        'factories' => array(
            'PdfTools\Config'   => 'PdfTools\Service\PdfToolsConfigServiceFactory',
            'PdfTools'          => 'PdfTools\Service\PdfToolsServiceFactory',
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'pdf/download'                 => __DIR__ . '/../view/pdf-tools/download-pdf.phtml',
            'pdf/inline'                   => __DIR__ . '/../view/pdf-tools/inline-pdf.phtml',
        ),
    ),
);