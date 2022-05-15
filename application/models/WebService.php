<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class WebService extends CI_Model{

    public function getDevise(){
        $responsePv = file_get_contents('https://api.fastforex.io/fetch-all?api_key=62d0d4c775-3f76139f7c-rbw100');
		$responsePv = json_decode($responsePv);
		return $responsePv;
    }

    public function getCrypto(){

        $options = array(
            'http'=>array(
              'method'=>"GET",
              'header'=>"X-CoinAPI-Key:A6F0183F-2E4E-45F1-BBE0-F853A0DE0ACA"
            )
          );
          $context=stream_context_create($options);
          $data=file_get_contents('https://rest.coinapi.io/v1/assets?filter_asset_id=BTC;ETH;USDT;BNB;USDC;XRP;ADA;SOL;BUSD;DOGE',false,$context);

		return json_decode($data);
    }

}

?>