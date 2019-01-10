<?php
    
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
    $uri .= $_SERVER['HTTP_HOST'];
    $request = $_SERVER['REQUEST_URI'];
    if ($request == '/pdxplore') {
        header('Location: '.$uri.'/pdxplore');
        exit; 
    }
    elseif ($request == '') {
      echo "hello";
      header('Location: '.$uri.'/home');
      echo "home";
      exit;
    }
    elseif ($request == '/prl'){
      header('Location: '.$uri.'/prl');
      exit; 
    }
    elseif ($request == '/about') {
      header('Location: '.$uri.'/about'); 
      exit;
    }
    else {
      header('Location: '.$uri.'/home');
      echo "home";
      exit;
    }
?>
