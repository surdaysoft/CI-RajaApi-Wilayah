<?php

$curl = curl_init();
$key = $this->config->item('key');
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne$key/m/wilayah/provinsi",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",

));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// var_dump($response);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;

  $data = json_decode($response, true);

  for ($i=0; $i < count($data['data']); $i++){
  
    echo "<option value='".$data['data'][$i]['id']."'>".$data['data'][$i]['name']."</option>";

  }
}

?>
