<?php 


		$fname=$_GET['f'];   
		$fx = explode("_", $fname,2);
		$name = $fx[1];
       $file = ("assets/uploads/".$fname);
       
       header ("Content-Type: ".filetype($file));
       header ("Content-Length: ".filesize($file));
       header ("Content-Disposition: attachment; filename={$name}");

       readfile($file);