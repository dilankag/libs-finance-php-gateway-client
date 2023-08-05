<?php

/**
 * @author Dilanka Gamage
 */
class DriverTripTransactionReportRequest extends BaseReportRequest {

    private $transactionId;
    private $driverId;
    private $tripId;
    private $transactionTypes;
    private $transactionCategories;
    private $minAmountInRupee;
    private $maxAmountInRupee;
    private $minAmountInCents;
    private $maxAmountInCents;
    private $description;
    private $dateType;
    private $fromDate;
    private $toDate;
    private $createdBy;
    private $withDriverProfile = FALSE;
    private $withPeopleProfile = FALSE;

    public function __construct() {
        parent::__construct();
        $this->dateType = DateType::$CREATE_TIME;
    }

    function getTransactionId() {
        return $this->transactionId;
    }

    function getDriverId() {
        return $this->driverId;
    }

    function getTripId() {
        return $this->tripId;
    }

    function getTransactionTypes() {
        return $this->transactionTypes;
    }

    function getTransactionCategories() {
        return $this->transactionCategories;
    }

    function getMinAmountInRupee() {
        return $this->minAmountInRupee;
    }

    function getMaxAmountInRupee() {
        return $this->maxAmountInRupee;
    }

    function getMinAmountInCents() {
        return $this->minAmountInCents;
    }

    function getMaxAmountInCents() {
        return $this->maxAmountInCents;
    }

    function getDescription() {
        return $this->description;
    }

    function getDateType() {
        return $this->dateType;
    }

    function getFromDate() {
        return $this->fromDate;
    }

    function getToDate() {
        return $this->toDate;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }

    function getWithDriverProfile() {
        return $this->withDriverProfile;
    }

    function getWithPeopleProfile() {
        return $this->withPeopleProfile;
    }

    function setTransactionId($transactionId) {
        $this->transactionId = $transactionId;
    }

    function setDriverId($driverId) {
        $this->driverId = $driverId;
    }

    function setTripId($tripId) {
        $this->tripId = $tripId;
    }

    function setTransactionTypes($transactionTypes) {
        $this->transactionTypes = $transactionTypes;
    }

    function setTransactionCategories($transactionCategories) {
        $this->transactionCategories = $transactionCategories;
    }

    function setMinAmountInRupee($minAmountInRupee) {
        $this->minAmountInRupee = $minAmountInRupee;
    }

    function setMaxAmountInRupee($maxAmountInRupee) {
        $this->maxAmountInRupee = $maxAmountInRupee;
    }

    function setMinAmountInCents($minAmountInCents) {
        $this->minAmountInCents = $minAmountInCents;
    }

    function setMaxAmountInCents($maxAmountInCents) {
        $this->maxAmountInCents = $maxAmountInCents;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDateType($dateType) {
        $this->dateType = $dateType;
    }

    function setFromDate($fromDate) {
        $this->fromDate = $fromDate;
    }

    function setToDate($toDate) {
        $this->toDate = $toDate;
    }

    function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }

    function setWithDriverProfile($withDriverProfile) {
        $this->withDriverProfile = $withDriverProfile;
    }

    function setWithPeopleProfile($withPeopleProfile) {
        $this->withPeopleProfile = $withPeopleProfile;
    }

}
