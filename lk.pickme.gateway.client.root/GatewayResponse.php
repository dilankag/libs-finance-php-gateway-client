<?php

/**
 * @author Dilanka Gamage
 */
class GatewayResponse {

    private $apiApiVersion;
    private $messageId;
    private $responseDate;
    private $timeElapsed;
    private $error;
    private $actionType;
    private $responseData;

    function getApiApiVersion() {
        return $this->apiApiVersion;
    }

    function getMessageId() {
        return $this->messageId;
    }

    function getResponseDate() {
        return $this->responseDate;
    }

    function getTimeElapsed() {
        return $this->timeElapsed;
    }

    function getError() {
        return $this->error;
    }

    function getActionType() {
        return $this->actionType;
    }

    function getResponseData() {
        return $this->responseData;
    }

    function setApiApiVersion($apiApiVersion) {
        $this->apiApiVersion = $apiApiVersion;
    }

    function setMessageId($messageId) {
        $this->messageId = $messageId;
    }

    function setResponseDate($responseDate) {
        $this->responseDate = $responseDate;
    }

    function setTimeElapsed($timeElapsed) {
        $this->timeElapsed = $timeElapsed;
    }

    function setError($error) {
        $this->error = $error;
    }

    function setActionType($actionType) {
        $this->actionType = $actionType;
    }

    function setResponseData($responseData) {
        $this->responseData = $responseData;
    }

}
