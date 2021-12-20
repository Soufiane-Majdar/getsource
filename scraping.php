
<?php
  $ch = curl_init($_GET['subject']);

$fp = fopen("index.html","w");

curl_setopt($ch,CURLOPT_FILE,$fp);

curl_setopt($ch,CURLOPT_HEADER,0);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_exec($ch);

if(curl_error($ch)){
  fwrite($fp,curl_error($ch));
}


curl_close($ch);

fclose($fp);


$filepath = "index.html";

// Process download
if(file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    flush(); // Flush system output buffer
    readfile($filepath);
    die();
} else {
    http_response_code(404);
  die();
}



?>