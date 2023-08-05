<?php

/**
 * @author Dilanka Gamage
 */
class HmacUtils {
    
    public static function genarateHmac($secret, $data) {
        $Hmac = hash_hmac('sha256', utf8_decode($data), utf8_decode($secret), FALSE);
        return $Hmac;
    }

}
