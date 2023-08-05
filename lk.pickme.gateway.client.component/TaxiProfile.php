<?php

/**
 *
 * @author Dilanka Gamage
 */
class TaxiProfile {

    private $taxiId;
    private $taxiNo;
    private $taxiType;
    private $taxiModel;
    private $taxiBrandModelId;
    private $taxiCompany;
    private $taxiCountry;
    private $taxiState;
    private $taxiCity;
    private $taxiCapacity;
    private $taxiSpeed;
    private $maxLuggage;
    private $taxiFareKm;
    private $taxiImage;
    private $taxiSliderimage;
    private $taxiSerializeimage;
    private $taxiCreatedate;
    private $taxiCreatedby;
    private $taxiStatus;
    private $taxiAvailability;

    function getTaxiId() {
        return $this->taxiId;
    }

    function getTaxiNo() {
        return $this->taxiNo;
    }

    function getTaxiType() {
        return $this->taxiType;
    }

    function getTaxiModel() {
        return $this->taxiModel;
    }

    function getTaxiBrandModelId() {
        return $this->taxiBrandModelId;
    }

    function getTaxiCompany() {
        return $this->taxiCompany;
    }

    function getTaxiCountry() {
        return $this->taxiCountry;
    }

    function getTaxiState() {
        return $this->taxiState;
    }

    function getTaxiCity() {
        return $this->taxiCity;
    }

    function getTaxiCapacity() {
        return $this->taxiCapacity;
    }

    function getTaxiSpeed() {
        return $this->taxiSpeed;
    }

    function getMaxLuggage() {
        return $this->maxLuggage;
    }

    function getTaxiFareKm() {
        return $this->taxiFareKm;
    }

    function getTaxiImage() {
        return $this->taxiImage;
    }

    function getTaxiSliderimage() {
        return $this->taxiSliderimage;
    }

    function getTaxiSerializeimage() {
        return $this->taxiSerializeimage;
    }

    function getTaxiCreatedate() {
        return $this->taxiCreatedate;
    }

    function getTaxiCreatedby() {
        return $this->taxiCreatedby;
    }

    function getTaxiStatus() {
        return $this->taxiStatus;
    }

    function getTaxiAvailability() {
        return $this->taxiAvailability;
    }

    function setTaxiId($taxiId) {
        $this->taxiId = $taxiId;
    }

    function setTaxiNo($taxiNo) {
        $this->taxiNo = $taxiNo;
    }

    function setTaxiType($taxiType) {
        $this->taxiType = $taxiType;
    }

    function setTaxiModel($taxiModel) {
        $this->taxiModel = $taxiModel;
    }

    function setTaxiBrandModelId($taxiBrandModelId) {
        $this->taxiBrandModelId = $taxiBrandModelId;
    }

    function setTaxiCompany($taxiCompany) {
        $this->taxiCompany = $taxiCompany;
    }

    function setTaxiCountry($taxiCountry) {
        $this->taxiCountry = $taxiCountry;
    }

    function setTaxiState($taxiState) {
        $this->taxiState = $taxiState;
    }

    function setTaxiCity($taxiCity) {
        $this->taxiCity = $taxiCity;
    }

    function setTaxiCapacity($taxiCapacity) {
        $this->taxiCapacity = $taxiCapacity;
    }

    function setTaxiSpeed($taxiSpeed) {
        $this->taxiSpeed = $taxiSpeed;
    }

    function setMaxLuggage($maxLuggage) {
        $this->maxLuggage = $maxLuggage;
    }

    function setTaxiFareKm($taxiFareKm) {
        $this->taxiFareKm = $taxiFareKm;
    }

    function setTaxiImage($taxiImage) {
        $this->taxiImage = $taxiImage;
    }

    function setTaxiSliderimage($taxiSliderimage) {
        $this->taxiSliderimage = $taxiSliderimage;
    }

    function setTaxiSerializeimage($taxiSerializeimage) {
        $this->taxiSerializeimage = $taxiSerializeimage;
    }

    function setTaxiCreatedate($taxiCreatedate) {
        $this->taxiCreatedate = $taxiCreatedate;
    }

    function setTaxiCreatedby($taxiCreatedby) {
        $this->taxiCreatedby = $taxiCreatedby;
    }

    function setTaxiStatus($taxiStatus) {
        $this->taxiStatus = $taxiStatus;
    }

    function setTaxiAvailability($taxiAvailability) {
        $this->taxiAvailability = $taxiAvailability;
    }

    public function __toString() {
        return 'TaxiProfile[taxiId=' . $this->taxiId . ']';
    }

}
