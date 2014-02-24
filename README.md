PdfTools
========

Compilation of PDF Libraries (FPDI, FPDF, HTML2PDF) to read and write pdf.

Installation : 
--------------

copy files in module/PdfTools of your project

or

```
git clone https://github.com/SmasherHell/PdfTools.git
```

then enable PdfTools module in your config/application.config.php

Usage :
-------
In a Controller or wherever ServiceManager is available :

```
$pdfTools = $serviceManager->get('PdfTools');
```

will return a decorated instance of HTML2PDF.

To access FPDI within HTML2PDF just use :

```
$pdfHandler = $pdfTools->getPdfHandler();
```
