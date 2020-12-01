<?php 

require __DIR__ . '/vendor/autoload.php';

$client = new \Google_client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service =new Google_Service_Sheets($client);
$spreadsheetId = "1XFNv8jro_8YXulxaFyBiiTY4KQpyTRneLh17PcdE81w";

$range = "congress!D2:F8";
 
$response  =  $service->spreadsheets_values->get($spreadsheetId,$range);
$value = $response->getValue();
if(empty($values)){
    print"no data found.\n";
}else{

    $mask= "%10s %-10s %s\n";
     foreach($values as $row){
              echo sprintf($mask, $row[2], row[1], row[0]);
     }



}
?>