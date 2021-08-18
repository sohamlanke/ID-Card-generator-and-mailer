<?php
$email = $_GET['email'];
$url = 'https://docs.google.com/forms/d/e/1FAIpQLSdsDdSUnQbO6fNZ0riQxXmSi3xb8tkVXQsCmJJx1-KIHPS_cg/formResponse';
$data = array('entry.630789195' => $email);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { 
	header("Location: index.php?status=error");
 }
 header("Location: index.php?status=success");

// var_dump($result);
 ?>