<?php

//Author: de77
//Website: www.de77.com
//Licence: MIT

class ScreenShot
{
	public $services = array(	'http://www.thumbshots.de/cgi-bin/show.cgi?url=@@@',
								'http://image.picoshot.com/thumbnail.php?url=@@@',
								'http://www.scurlr.com/thumbnail?url=@@@'
							);
	public $blanks = array(		'b075ebf89127dcbd4999001c23bede10',
								'd88047f37f6b6be1bc11960c861d88de',
								'fb9ddcb156c11c21347e3c30eb013165',
								'd7a5b51429d257f48d3a1ad4cbf1ea36'
							);
	
	public function snap($url, $filename = false)
	{
		$index = mt_rand(0, count($this->services)-1);
		$service = $this->services[$index];
		
		$url = str_replace('@@@', $url, $service);
		
		$image = @file_get_contents($url);
		
		$check = md5($image);
		
		if (in_array($check, $this->blanks))
		{
			return false;
		}
		
		if (!$filename)
		{
			return $image;
		}
		
		@file_put_contents($filename, $image);
	}							
}