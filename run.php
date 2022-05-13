<?php
error_reporting(0);
$headers = array(
"Host: app.oneaset.co.id",
"Connection: keep-alive",
"Accept: application/json, text/plain, */*",
"countryId: 1",
"User-Agent: Mozilla/5.0 Version/4.0 Chrome/94.0.4606.71 Mobile Safari/537.36",
"languageId: 123",
);
$url = "https://app.oneaset.co.id/api/app/biz/activity/finc/activityInfo";
$res = curl($url,$headers,"get");
$jas = json_decode($res,true);
$mamaeka = $jas["data"]["taskList"][5]["relationStatus"];

if ($mamaeka == 1){
echo "belum mulai tlol\n";
}
if ($mamaeka == 3){
echo "yuk digas\n";
?>
