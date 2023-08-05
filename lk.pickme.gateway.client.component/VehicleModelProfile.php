<?php

/**
 *
 * @author Dilanka Gamage
 */
class VehicleModelProfile {

    private $modelId;
    private $name;
    private $motorModelVehicleMakeId;
    private $status;

    function getModelId() {
        return $this->modelId;
    }

    function getName() {
        return $this->name;
    }

    function getMotorModelVehicleMakeId() {
        return $this->motorModelVehicleMakeId;
    }

    function getStatus() {
        return $this->status;
    }

    function setModelId($modelId) {
        $this->modelId = $modelId;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setMotorModelVehicleMakeId($motorModelVehicleMakeId) {
        $this->motorModelVehicleMakeId = $motorModelVehicleMakeId;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    public function __toString() {
        return 'VehicleModelProfile[modelId=' . $this->modelId . ']';
    }

}
