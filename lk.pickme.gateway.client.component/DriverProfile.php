<?php

/**
 * @author Dilanka Gamage
 */
class DriverProfile {

    private $driverId;
    private $latitude;
    private $longitude;
    private $status;
    private $currentStatus;
    private $shiftStatus;
    private $travelStatus;
    private $driverApi;
    private $shiftStartedAt;
    private $updateDate;
    private $currentTrip;
    private $tripAssignedAt;
    private $profileStatus;
    private $vehicleModel;
    private $loginStatus;
    private $directionalHireEnable;
    private $bearing;
    private $driverTripSummaries;

    function getDriverId() {
        return $this->driverId;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function getStatus() {
        return $this->status;
    }

    function getCurrentStatus() {
        return $this->currentStatus;
    }

    function getShiftStatus() {
        return $this->shiftStatus;
    }

    function getTravelStatus() {
        return $this->travelStatus;
    }

    function getDriverApi() {
        return $this->driverApi;
    }

    function getShiftStartedAt() {
        return $this->shiftStartedAt;
    }

    function getUpdateDate() {
        return $this->updateDate;
    }

    function getCurrentTrip() {
        return $this->currentTrip;
    }

    function getTripAssignedAt() {
        return $this->tripAssignedAt;
    }

    function getProfileStatus() {
        return $this->profileStatus;
    }

    function getVehicleModel() {
        return $this->vehicleModel;
    }

    function getLoginStatus() {
        return $this->loginStatus;
    }

    function getDirectionalHireEnable() {
        return $this->directionalHireEnable;
    }

    function getBearing() {
        return $this->bearing;
    }

    function getDriverTripSummaries() {
        return $this->driverTripSummaries;
    }

    function setDriverId($driverId) {
        $this->driverId = $driverId;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCurrentStatus($currentStatus) {
        $this->currentStatus = $currentStatus;
    }

    function setShiftStatus($shiftStatus) {
        $this->shiftStatus = $shiftStatus;
    }

    function setTravelStatus($travelStatus) {
        $this->travelStatus = $travelStatus;
    }

    function setDriverApi($driverApi) {
        $this->driverApi = $driverApi;
    }

    function setShiftStartedAt($shiftStartedAt) {
        $this->shiftStartedAt = $shiftStartedAt;
    }

    function setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;
    }

    function setCurrentTrip($currentTrip) {
        $this->currentTrip = $currentTrip;
    }

    function setTripAssignedAt($tripAssignedAt) {
        $this->tripAssignedAt = $tripAssignedAt;
    }

    function setProfileStatus($profileStatus) {
        $this->profileStatus = $profileStatus;
    }

    function setVehicleModel($vehicleModel) {
        $this->vehicleModel = $vehicleModel;
    }

    function setLoginStatus($loginStatus) {
        $this->loginStatus = $loginStatus;
    }

    function setDirectionalHireEnable($directionalHireEnable) {
        $this->directionalHireEnable = $directionalHireEnable;
    }

    function setBearing($bearing) {
        $this->bearing = $bearing;
    }

    function setDriverTripSummaries($driverTripSummaries) {
        $this->driverTripSummaries = $driverTripSummaries;
    }

    public function __toString() {
        return 'DriverProfile[driverId=' . $this->driverId .
                ', driverTripSummaries=(' . $this->driverTripSummaries . ')]';
    }

}
