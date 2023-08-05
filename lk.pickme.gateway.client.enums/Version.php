<?php

/**
 * @author Dilanka Gamage
 */
class Version {

    public static $V_LATEST = "v3_8_0";
    private $version;

    private function __construct($version) {
        $this->version = $version;
    }

    public function getVersion() {
        return $this->version;
    }

}
