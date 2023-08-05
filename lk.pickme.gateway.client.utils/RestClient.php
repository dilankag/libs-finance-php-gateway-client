<?php

/**
 * @author Dilanka Gamage
 */
class RestClient {
    
    public static function sendRequest($config, $jsonRequest, $headers) {
        echo '<br><br>Request header: ' . json_encode($headers, TRUE);
        echo '<br><br>Request request: ' . $jsonRequest;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $config->getServiceEndpoint());
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonRequest);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
        echo '<br><br>Raw Response: ' . $result;
        return $result;
    }

}
