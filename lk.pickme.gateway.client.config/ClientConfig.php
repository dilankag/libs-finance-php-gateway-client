<?php

/**
 * @author Dilanka Gamage
 */
class ClientConfig {

    private $serviceEndpoint;
    private $hmacSecret;
    private $authToken;
    private $csrfToken;
    private $validateOnly = FALSE;

    public function getServiceEndpoint() {
        return $this->serviceEndpoint;
    }

    public function setServiceEndpoint($serviceEndpoint) {
        $this->serviceEndpoint = $serviceEndpoint;
    }

    public function getHmacSecret() {
        return $this->hmacSecret;
    }

    public function setHmacSecret($hmacSecret) {
        $this->hmacSecret = $hmacSecret;
    }

    public function getAuthToken() {
        return $this->authToken;
    }

    public function setAuthToken($authToken) {
        $this->authToken = $authToken;
    }

    public function getCsrfToken() {
        return $this->csrfToken;
    }

    public function setCsrfToken($csrfToken) {
        $this->$csrfToken = $csrfToken;
    }

    public function isValidateOnly() {
        return $this->validateOnly;
    }

    public function setValidateOnly($validateOnly) {
        $this->validateOnly = $validateOnly;
    }

}
