<?php



$to = "info@dtcpackers.org";

//$subject = $PostData['subject'];



$message = "

<html>

<head>

<title>Tetststs</title>

</head>

<body>

<table>

<tr>

<th>Name</th>

<th>Email</th>

<th>Problem</th>

</tr>

<tr>

<td>Tetststs</td>

<td>Tetststs</td>

<td>Tetststs</td>

</tr>

</table>

</body>

</html>

";



// Always set content-type when sending HTML email
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: mail@dtcpackers.org' . "\r\n" .
    'Reply-To: mail@dtcpackers.org' . "\r\n";



// More headers

//$headers .= 'From: <info@example.com>' . "\r\n";

if(mail($to, $subject, $message, $headers)){
	echo 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy';
} else {
	echo 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn';
}

?>