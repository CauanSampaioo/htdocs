<?php

class ApiConsumer
{
    private function Api($endpoint, $method = 'GET',  $post_fields = []){

        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://restcountries.com/v3.1/$endpoint?fields=name%2Ccapital%2Ccurrencies&fields=name%2Ccapital%2Ccurrencies",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => [
            "Accept: */*",            
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        die("Error !!!");
        } else {
        return json_decode($response, true);
        }
    }

    public function getCountriesAll(){
        $resultados = $this->Api('all');
        $countries = [];
        foreach($resultados as $result){
            $countries[] = $result['name']['common'];
        }
        sort($countries);
        return $countries;
    }
}
