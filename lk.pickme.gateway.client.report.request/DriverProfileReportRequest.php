<?php

/**
 * @author Dilanka Gamage
 */
class DriverProfileReportRequest extends BaseReportRequest {

    private $driverId;
    private $withDriverTripSummary = FALSE;
    private $withoutEmptyDriverTripSummary = FALSE;

    function getDriverId() {
        return $this->driverId;
    }

    function getWithDriverTripSummary() {
        return $this->withDriverTripSummary;
    }

    function getWithoutEmptyDriverTripSummary() {
        return $this->withoutEmptyDriverTripSummary;
    }

    function setDriverId($driverId) {
        $this->driverId = $driverId;
    }

    function setWithDriverTripSummary($withDriverTripSummary) {
        $this->withDriverTripSummary = $withDriverTripSummary;
    }

    function setWithoutEmptyDriverTripSummary($withoutEmptyDriverTripSummary) {
        $this->withoutEmptyDriverTripSummary = $withoutEmptyDriverTripSummary;
    }

}
