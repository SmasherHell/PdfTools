<?php

return array(
    'PdfTools\Module'                           => __DIR__ . '/Module.php',
    // FPDF
    'PdfTools\FPDF\FPDF'                        => __DIR__ . '/src/PdfTools/Lib/fpdf/FPDF.php',
    // FPDI
    'PdfTools\fpdi\FPDI'                        => __DIR__ . '/src/PdfTools/Lib/fpdi/FPDI.php',
    'PdfTools\fpdi\FPDFBridge'                  => __DIR__ . '/src/PdfTools/Lib/fpdi/fpdi2tcpdf_bridge.php',
    'PdfTools\fpdi\FPDF_TPL'                    => __DIR__ . '/src/PdfTools/Lib/fpdi/FPDF_TPL.php',
    'PdfTools\fpdi\fpdi_pdf_parser'             => __DIR__ . '/src/PdfTools/Lib/fpdi/fpdi_pdf_parser.php',
    'PdfTools\fpdi\pdf_parser'                  => __DIR__ . '/src/PdfTools/Lib/fpdi/pdf_parser.php',
    'PdfTools\fpdi\pdf_context'                 => __DIR__ . '/src/PdfTools/Lib/fpdi/pdf_context.php',
    'PdfTools\fpdi\filters\FilterASCII85'       => __DIR__ . '/src/PdfTools/Lib/fpdi/filters/FilterASCII85.php',
    'PdfTools\fpdi\filters\FilterASCII85_FPDI'  => __DIR__ . '/src/PdfTools/Lib/fpdi/filters/FilterASCII85_FPDI.php',
    'PdfTools\fpdi\filters\FilterLZW'           => __DIR__ . '/src/PdfTools/Lib/fpdi/filters/FilterLZW.php',
    'PdfTools\fpdi\filters\FilterLZW_FPDI'      => __DIR__ . '/src/PdfTools/Lib/fpdi/filters/FilterLZW_FPDI.php',
    
    // TCPDF
    'PdfTools\tcpdf\TCPDF'                      => __DIR__ . '/src/PdfTools/Lib/tcpdf/tcpdf.php',
    'PdfTools\tcpdf\TCPDFBarcode'               => __DIR__ . '/src/PdfTools/Lib/tcpdf/barcodes.php',
    'PdfTools\tcpdf\TCPDF2DBarcode'             => __DIR__ . '/src/PdfTools/Lib/tcpdf/2dbarcodes.php',
    
    // HTML2PDF
    'PdfTools\html2pdf\HTML2PDF'                => __DIR__ . '/src/PdfTools/Lib/html2pdf/html2pdf.class.php',
    'PdfTools\html2pdf\HTML2PDF_exception'      => __DIR__ . '/src/PdfTools/Lib/html2pdf/class/exception.class.php',
    'PdfTools\html2pdf\HTML2PDF_locale'         => __DIR__ . '/src/PdfTools/Lib/html2pdf/class/locale.class.php',
    'PdfTools\html2pdf\HTML2PDF_myFpdf'         => __DIR__ . '/src/PdfTools/Lib/html2pdf/class/myFpdf.class.php',
    'PdfTools\html2pdf\HTML2PDF_myPdf'          => __DIR__ . '/src/PdfTools/Lib/html2pdf/class/myPdf.class.php',
    'PdfTools\html2pdf\HTML2PDF_parsingCss'     => __DIR__ . '/src/PdfTools/Lib/html2pdf/class/parsingCss.class.php',
    'PdfTools\html2pdf\HTML2PDF_parsingHtml'    => __DIR__ . '/src/PdfTools/Lib/html2pdf/class/parsingHtml.class.php',
    
);


