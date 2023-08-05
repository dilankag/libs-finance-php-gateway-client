<?php

/**
 * @author Dilanka Gamage
 */
class Error {

    private $code;
    private $text;

    function getCode() {
        return $this->code;
    }

    function getText() {
        return $this->text;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setText($text) {
        $this->text = $text;
    }

    public function __toString() {
        return 'Error[code=' . $this->code .
        ', text=' . $this->text . ']';
    }

}
