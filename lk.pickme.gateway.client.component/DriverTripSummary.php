<?php

/*
 * @author Dilanka Gamage
 */

class DriverTripSummary {

    private $rowId;
    private $driverId;
    private $driverProfile;
    private $peopleProfile;
    private $transactionType;
    private $totalAmountInCents;
    private $rowCount;

    function getRowId() {
        return $this->rowId;
    }

    function getDriverId() {
        return $this->driverId;
    }

    function getDriverProfile() {
        return $this->driverProfile;
    }

    function getPeopleProfile() {
        return $this->peopleProfile;
    }

    function getTransactionType() {
        return $this->transactionType;
    }

    function getTotalAmountInCents() {
        return $this->totalAmountInCents;
    }

    function getRowCount() {
        return $this->rowCount;
    }

    function setRowId($rowId) {
        $this->rowId = $rowId;
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

    function setTransactionType($transactionType) {
        $this->transactionType = $transactionType;
    }

    function setTotalAmountInCents($totalAmountInCents) {
        $this->totalAmountInCents = $totalAmountInCents;
    }

    function setRowCount($rowCount) {
        $this->rowCount = $rowCount;
    }

    public function __toString() {
        return 'DriverTripSummary[driverId=' . $this->driverId .
        ', driverProfile=(' . $this->driverProfile . ')' .
        ', peopleProfile=(' . $this->peopleProfile . ')' .
        ', transactionType=' . $this->transactionType .
        ', totalAmountInCents=' . $this->totalAmountInCents .
        ', rowCount=' . $this->rowCount . ']';
    }

}
