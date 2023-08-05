<?php

/**
 *
 * @author Dilanka Gamage
 */
class TaxiDriverMapping {

    private $mappingId;
    private $mappingDriverId;
    private $driverProfile;
    private $mappingPaymentPlanId;
    private $mappingTaxiId;
    private $taxiProfile;
    private $mappingTaxiModelId;
    private $vehicleModelProfile;
    private $mappingCompanyId;
    private $mappingCountryId;
    private $mappingStateId;
    private $mappingCityId;
    private $mappingStartDate;
    private $mappingEndDate;
    private $mappingCreatedBy;
    private $mappingCreateDate;
    private $mappingStatus;
    private $mappingUpdatedBy;
    private $mappingUpdateDate;

    function getMappingId() {
        return $this->mappingId;
    }

    function getMappingDriverId() {
        return $this->mappingDriverId;
    }

    function getDriverProfile() {
        return $this->driverProfile;
    }

    function getMappingPaymentPlanId() {
        return $this->mappingPaymentPlanId;
    }

    function getMappingTaxiId() {
        return $this->mappingTaxiId;
    }

    function getTaxiProfile() {
        return $this->taxiProfile;
    }

    function getMappingTaxiModelId() {
        return $this->mappingTaxiModelId;
    }

    function getVehicleModelProfile() {
        return $this->vehicleModelProfile;
    }

    function getMappingCompanyId() {
        return $this->mappingCompanyId;
    }

    function getMappingCountryId() {
        return $this->mappingCountryId;
    }

    function getMappingStateId() {
        return $this->mappingStateId;
    }

    function getMappingCityId() {
        return $this->mappingCityId;
    }

    function getMappingStartDate() {
        return $this->mappingStartDate;
    }

    function getMappingEndDate() {
        return $this->mappingEndDate;
    }

    function getMappingCreatedBy() {
        return $this->mappingCreatedBy;
    }

    function getMappingCreateDate() {
        return $this->mappingCreateDate;
    }

    function getMappingStatus() {
        return $this->mappingStatus;
    }

    function getMappingUpdatedBy() {
        return $this->mappingUpdatedBy;
    }

    function getMappingUpdateDate() {
        return $this->mappingUpdateDate;
    }

    function setMappingId($mappingId) {
        $this->mappingId = $mappingId;
    }

    function setMappingDriverId($mappingDriverId) {
        $this->mappingDriverId = $mappingDriverId;
    }

    function setDriverProfile($driverProfile) {
        $this->driverProfile = $driverProfile;
    }

    function setMappingPaymentPlanId($mappingPaymentPlanId) {
        $this->mappingPaymentPlanId = $mappingPaymentPlanId;
    }

    function setMappingTaxiId($mappingTaxiId) {
        $this->mappingTaxiId = $mappingTaxiId;
    }

    function setTaxiProfile($taxiProfile) {
        $this->taxiProfile = $taxiProfile;
    }

    function setMappingTaxiModelId($mappingTaxiModelId) {
        $this->mappingTaxiModelId = $mappingTaxiModelId;
    }

    function setVehicleModelProfile($vehicleModelProfile) {
        $this->vehicleModelProfile = $vehicleModelProfile;
    }

    function setMappingCompanyId($mappingCompanyId) {
        $this->mappingCompanyId = $mappingCompanyId;
    }

    function setMappingCountryId($mappingCountryId) {
        $this->mappingCountryId = $mappingCountryId;
    }

    function setMappingStateId($mappingStateId) {
        $this->mappingStateId = $mappingStateId;
    }

    function setMappingCityId($mappingCityId) {
        $this->mappingCityId = $mappingCityId;
    }

    function setMappingStartDate($mappingStartDate) {
        $this->mappingStartDate = $mappingStartDate;
    }

    function setMappingEndDate($mappingEndDate) {
        $this->mappingEndDate = $mappingEndDate;
    }

    function setMappingCreatedBy($mappingCreatedBy) {
        $this->mappingCreatedBy = $mappingCreatedBy;
    }

    function setMappingCreateDate($mappingCreateDate) {
        $this->mappingCreateDate = $mappingCreateDate;
    }

    function setMappingStatus($mappingStatus) {
        $this->mappingStatus = $mappingStatus;
    }

    function setMappingUpdatedBy($mappingUpdatedBy) {
        $this->mappingUpdatedBy = $mappingUpdatedBy;
    }

    function setMappingUpdateDate($mappingUpdateDate) {
        $this->mappingUpdateDate = $mappingUpdateDate;
    }

    public function __toString() {
        return 'TaxiDriverMapping[mappingId=' . $this->mappingId .
                ', mappingDriverId=' . $this->mappingDriverId .
                ', driverProfile=(' . $this->driverProfile .
                ', mappingTaxiId=' . $this->mappingTaxiId .
                ', taxiProfile=(' . $this->taxiProfile .
                ', mappingTaxiModelId=' . $this->mappingTaxiModelId .
                ', vehicleModelProfile=(' . $this->vehicleModelProfile . ')]';
    }

}
