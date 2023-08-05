<?php

/**
 * @author Dilanka Gamage
 */
class DriverTripTransaction {

    private $transactionId;
    private $driverId;
    private $driverProfile;
    private $peopleProfile;
    private $tripId;
    private $transactionType;
    private $transactionCategory;
    private $amountInRupee;
    private $amountInCents;
    private $description;
    private $createdTime;
    private $createdDate;
    private $createdBy;

    function getTransactionId() {
        return $this->transactionId;
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

    function getTripId() {
        return $this->tripId;
    }

    function getTransactionType() {
        return $this->transactionType;
    }

    function getTransactionCategory() {
        return $this->transactionCategory;
    }

    function getAmountInRupee() {
        return $this->amountInRupee;
    }

    function getAmountInCents() {
        return $this->amountInCents;
    }

    function getDescription() {
        return $this->description;
    }

    function getCreatedTime() {
        return $this->createdTime;
    }

    function getCreatedDate() {
        return $this->createdDate;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }

    function setTransactionId($transactionId) {
        $this->transactionId = $transactionId;
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

    function setTripId($tripId) {
        $this->tripId = $tripId;
    }

    function setTransactionType($transactionType) {
        $this->transactionType = $transactionType;
    }

    function setTransactionCategory($transactionCategory) {
        $this->transactionCategory = $transactionCategory;
    }

    function setAmountInRupee($amountInRupee) {
        $this->amountInRupee = $amountInRupee;
    }

    function setAmountInCents($amountInCents) {
        $this->amountInCents = $amountInCents;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setCreatedTime($createdTime) {
        $this->createdTime = $createdTime;
    }

    function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;
    }

    function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }

    public function __toString() {
        return 'DriverTripTransaction[transactionId=' . $this->transactionId .
        ', driverProfile=(' . $this->driverProfile . ')' .
        ', peopleProfile=(' . $this->peopleProfile . ')' .
        ', transactionType=' . $this->transactionType .
        ', totalAmountInCents=' . $this->amountInCents . ']';
    }

}
