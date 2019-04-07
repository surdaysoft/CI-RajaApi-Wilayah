<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More


  }

  function index()
  {
    $data = array('page' => "home" ,
    );
    $this->load->view('aaa',$data);
  }

  function getKab($province){

    $key = $this->config->item('key');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne$key/m/wilayah/kabupaten?idpropinsi=$province",
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

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
			$data = json_decode($response, true);

      // print_r($data);
      echo "<option value='' disabled selected>Pilih Kabupaten</option>";
		  for ($j=0; $j < count($data['data']); $j++){


		    echo "<option value='".$data['data'][$j]['id']."'>".$data['data'][$j]['name']."</option>";


		  }
		}
	}

  function getKec($kabupaten){

    $key = $this->config->item('key');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne$key/m/wilayah/kecamatan?idkabupaten=$kabupaten",
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

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
			$data = json_decode($response, true);

      // print_r($data);
      echo "<option value='' disabled selected>Pilih Kecamatan</option>";
		  for ($j=0; $j < count($data['data']); $j++){


		    echo "<option value='".$data['data'][$j]['id']."'>".$data['data'][$j]['name']."</option>";


		  }
		}
	}

  function getKel($kecamatan){

    $key = $this->config->item('key');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://x.rajaapi.com/MeP7c5ne$key/m/wilayah/kelurahan?idkecamatan=$kecamatan",
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

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
			$data = json_decode($response, true);

      // print_r($data);
      echo "<option value='' disabled selected>Pilih Kelurahan</option>";
		  for ($j=0; $j < count($data['data']); $j++){


		    echo "<option value='".$data['data'][$j]['id']."'>".$data['data'][$j]['name']."</option>";


		  }
		}
	}

}
