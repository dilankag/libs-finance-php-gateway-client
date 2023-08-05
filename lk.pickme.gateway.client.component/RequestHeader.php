<?php

/*
 * @author Dilanka Gamage
 */
class RequestHeader {

    private $HMAC;
    private $AUTH;
    private $CSRF;

    public function getHMAC() {
        return $this->HMAC;
    }

    public function getAUTH() {
        return $this->AUTH;
    }

    function getCSRF() {
        return $this->CSRF;
    }

    public function setHMAC($HMAC) {
        $this->HMAC = $HMAC;
    }

    public function setAUTH($AUTH) {
        $this->AUTH = $AUTH;
    }

    function setCSRF($CSRF) {
        $this->CSRF = $CSRF;
    }

    public function __toString() {
        return 'RequestHeader[HMAC=' . $this->HMAC .
        ', AUTH=' . $this->AUTH .
        ', CSRF=' . $this->CSRF . ']';
    }

}
