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
	header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 

header("Content-Type: application/force-download");
header( "Content-Disposition: attachment; filename=".basename("C:\\xampp\\htdocs\\savePage\\document1.pdf"));

header( "Content-Description: File Transfer");
@readfile($out_file);
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>