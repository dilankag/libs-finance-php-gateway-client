<?php

/**
 * @author Dilanka Gamage
 */
class GatewayRequest {

    private $apiVersion;
    private $messageId;
    private $requestDate;
    private $validateOnly = FALSE;
    private $actionType;
    private $requestData;

    public function __construct() {
        $this->apiVersion = Version::$V_LATEST;
        $this->messageId = CommonUtils::generateGUID();
    }
    
    function getApiVersion() {
        return $this->apiVersion;
    }

    function getMessageId() {
        return $this->messageId;
    }

    function getRequestDate() {
        return $this->requestDate;
    }

    function getValidateOnly() {
        return $this->validateOnly;
    }

    function getActionType() {
        return $this->actionType;
    }

    function getRequestData() {
        return $this->requestData;
    }

    function setApiVersion($apiVersion) {
        $this->apiVersion = $apiVersion;
    }

    function setMessageId($messageId) {
        $this->messageId = $messageId;
    }

    function setRequestDate($requestDate) {
        $this->requestDate = $requestDate;
    }

    function setValidateOnly($validateOnly) {
        $this->validateOnly = $validateOnly;
    }

    function setActionType($actionType) {
        $this->actionType = $actionType;
    }

    function setRequestData($requestData) {
        $this->requestData = $requestData;
    }



}
