<?php

/**
 * @author Dilanka Gamage
 */
class DriverProfileReportResponse extends BaseReportResponse {

    private $profiles;

    function getProfiles() {
        return $this->profiles;
    }

    function setProfiles($profiles) {
        $this->profiles = $profiles;
    }

}
