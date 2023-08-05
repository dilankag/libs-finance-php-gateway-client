<?php

/**
 * @author Dilanka Gamage
 */
class PeopleProfileReportRequest extends BaseReportRequest {

    private $peopleId;
    private $withDriverTripSummary = FALSE;
    private $withoutEmptyDriverTripSummary = FALSE;

    function getPeopleId() {
        return $this->peopleId;
    }

    function getWithDriverTripSummary() {
        return $this->withDriverTripSummary;
    }

    function getWithoutEmptyDriverTripSummary() {
        return $this->withoutEmptyDriverTripSummary;
    }

    function setPeopleId($peopleId) {
        $this->peopleId = $peopleId;
    }

    function setWithDriverTripSummary($withDriverTripSummary) {
        $this->withDriverTripSummary = $withDriverTripSummary;
    }

    function setWithoutEmptyDriverTripSummary($withoutEmptyDriverTripSummary) {
        $this->withoutEmptyDriverTripSummary = $withoutEmptyDriverTripSummary;
    }

}
