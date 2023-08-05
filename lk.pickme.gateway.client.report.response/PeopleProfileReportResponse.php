<?php

/**
 * @author Dilanka Gamage
 */
class PeopleProfileReportResponse extends BaseReportResponse {

    private $profiles = array();

    function getProfiles() {
        return $this->profiles;
    }

    function setProfiles($profiles) {
        $this->profiles = $profiles;
    }

}
