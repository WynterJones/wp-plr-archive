<?php

	define('WP_USE_THEMES', true);
	require ('../../../wp-load.php');

	$coverImage = $_POST['coverImage'];
	$footerImage = $_POST['footerImage'];
	$tocHeadline = $_POST['tocHeadline'];
	$tocSubHeadline = $_POST['tocSubHeadline'];
	$footerImage = $_POST['footerImage'];
	$footerHeadline = $_POST['footerHeadline'];
	$footerSubHeadline = $_POST['footerSubHeadline'];

	$content = '';
	$title = '';
	query_posts( $args );
	$counter = 0;
	while ( have_posts() ) : the_post();	
		$counter = $counter + 1;
		$title = $title . '<div style=" border-radius: 5px; border-bottom: 1px solid #eee;padding: 20px 20px; padding-left: 20px;  margin: 10px 0;"><img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/mimetypes/unknown.png" style="float: right;margin-top: 20px; " /><h2 style="font-weight: normal;margin: 0; margin-bottom: 10px; color: #da2618;">#'.$counter.' - '.get_the_title().'</h2><p style="float: left; margin-top: -50px; width: 540px;">'.substr(get_the_excerpt(), 0, 135).'...</p></div>';
	    $content = $content . '<div style="padding: 0 30px"><h1>'.get_the_title().'</h1><p style="font-size: 12px; ">'.blogbook_content().'</p></div> <pagebreak /><br/>';
	endwhile;

	$intro = '<br/><img src="'.$coverImage.'" style="width:660px; margin-left: 10px;margin-top: 30px; max-height: 900px;" /><pagebreak />';
	$footer = '<br/><br/><br/><br/><br/><br/><h1 style="text-align: center; font-size: 36px;">'.$footerHeadline.'</h1><h3 style="text-align: center; font-size: 16px;font-weight: normal; padding: 0 40px; ">'.$footerSubHeadline.'</h3><img src="'.$footerImage.'" style="width: 400px; margin-left: 140px; margin-top: 20px;" />';

	$ebook = $intro . '<br/><h1 style="text-align: center; font-size: 36px;">'.$tocHeadline.'</h1>
	<h3 style="text-align: center; font-size: 16px;font-weight: normal; padding: 0 30px; ">'.$tocSubHeadline.'</h3>'.$title .'<pagebreak /><br/>'. $content . $footer;

	wp_reset_query(); 

	include("mpdf/mpdf.php");

	$mpdf=new mPDF('en-GB','A4',11,'helvetica');
	$mpdf->SetHTMLHeader ('<h3 style="font-weight: normal; display: block; border-bottom: 1px solid #eee;text-align:center; padding-bottom: 10px;">'.get_bloginfo('name').'</h3><br/><br/>');
	$mpdf->SetHTMLFooter ('<h5 style="font-weight: normal; display: block; border-top: 1px solid #eee;text-align:center; padding-top: 10px;">Copyright &copy; - All Rights Reserved</h5><br/><br/>');
	$mpdf->WriteHTML($ebook);
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