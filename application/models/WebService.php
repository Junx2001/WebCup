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
              'header'=>"X-CoinAPI-Key:45C4EE47-7DA6-4613-84ED-F7B73667E6BA"
            )
          );
          $context=stream_context_create($options);
          $data=file_get_contents('https://rest.coinapi.io/v1/assets?filter_asset_id=BTC;ETH;USDT;BNB;USDC;XRP;ADA;SOL;BUSD;DOGE',false,$context);

		return json_decode($data);
    }

}

?>