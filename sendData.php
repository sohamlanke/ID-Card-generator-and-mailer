<?php
$email = $_GET['email'];
$name = $_GET['name'];
$branch = $_GET['branch'];
$phone = $_GET['phone'];

$url = 'https://docs.google.com/forms/d/e/1FAIpQLSe81Tkp-evXnM-w6nHh_8VQqWbr_vLoh3xvqI1K_BIFSbArWQ/formResponse';
$data = array(
	'entry.1122886426' => $name,
	'entry.1534575778' => $email,
	'entry.1613509917' => $branch,
	'entry.1211708330' => $phone,
);

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
	header("Location: result.php?status=error");
 }
 header("Location: result.php?status=success");

// var_dump($result);
 ?>