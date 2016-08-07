<?php
/*require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("NandyDevi123", "f96e5018f585377f61ff1b7e3d233e8e");
	$out_file = fopen("C:\\xampp\\htdocs\\savePage\\document1.pdf", "w");
	$client->convertURI($_GET['url'],$out_file);
    fclose($out_file);
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}

?>*/
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("NandyDevi123", "f96e5018f585377f61ff1b7e3d233e8e");

    // convert a web page and store the generated PDF into a $pdf variable
    $out_file = fopen("C:\\xampp\\htdocs\\savePage\\document1.pdf", "w");
	$client->convertURI($_GET['url'],$out_file);
	fclose($out_file);
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>