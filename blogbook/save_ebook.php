<?php 

	include("mpdf/mpdf.php");

	if ($_POST['ebook'] != '') {
		$html = $_POST['ebook'];
	}
	else {
		$html = $_POST['ebook2'];
	}
	$pageHeader = $_POST['pageHeader'];
	$pageFooter = $_POST['pageFooter'];

	function get_spin($matches)
	{
	    $rand = array_rand($split = explode("|", $matches[1]));
	    return $split[$rand];
	}
	 
	function spin($str)
	{
	    $new_str = preg_replace_callback('/\{([^{}]*)\}/im', "get_spin", $str);
	    if ($new_str !== $str) $str = spin($new_str);
	    return $str;
	}
	$newHTML = html_entity_decode(spin($html));

	$mpdf=new mPDF('en-GB','A4',11,'helvetica');
	$mpdf->SetHeader($pageHeader);
	$mpdf->SetFooter($pageFooter);
	$mpdf->WriteHTML($newHTML);
	$mpdf->Output();

 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Generated eBook</title>
 </head>
 <body>
 	
 </body>
 </html>