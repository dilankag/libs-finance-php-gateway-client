<?php

/**
 * @author Dilanka Gamage
 */
class DriverCreditDebit {

    private $driverId;
    private $driverProfile;
    private $peopleProfile;
    private $driverTripSummaries;
    private $taxiDriverMappings;

    function getDriverId() {
        return $this->driverId;
    }

    function getDriverProfile() {
        return $this->driverProfile;
    }

    function getPeopleProfile() {
        return $this->peopleProfile;
    }

    function getDriverTripSummaries() {
        return $this->driverTripSummaries;
    }

    function getTaxiDriverMappings() {
        return $this->taxiDriverMappings;
    }

    function setDriverId($driverId) {
        $this->driverId = $driverId;
    }

    function setDriverProfile($driverProfile) {
        $this->driverProfile = $driverProfile;
    }

    function setPeopleProfile($peopleProfile) {
        $this->peopleProfile = $peopleProfile;
    }

    function setDriverTripSummaries($driverTripSummaries) {
        $this->driverTripSummaries = $driverTripSummaries;
    }

    function setTaxiDriverMappings($taxiDriverMappings) {
        $this->taxiDriverMappings = $taxiDriverMappings;
    }

    public function __toString() {
        return 'DriverCreditDebit[driverId=' . $this->driverId .
                ', driverProfile=(' . $this->driverProfile . ')' .
                ', peopleProfile=(' . $this->peopleProfile . ')' .
                ', driverTripSummaries=' . sizeof($this->driverTripSummaries) .
                ', taxiDriverMappings=' . sizeof($this->taxiDriverMappings) . ']';
    }

}
