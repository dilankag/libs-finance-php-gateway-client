<?php

/**
 * @author Dilanka Gamage
 */
abstract class BaseFacade {

    protected $clientConfig;

    protected function __construct(ClientConfig $clientConfig) {
        $this->clientConfig = $clientConfig;
    }

    protected function process($request, $actionType, $jsonHelper) {
        $jsonRequest = $this->buildRequest($request, $actionType, $jsonHelper);
        $headers = $this->buildHeaders($jsonRequest);
        $jsonResponse = RestClient::sendRequest($this->clientConfig, $jsonRequest, $headers);
        $hasResponseData = strpos($jsonResponse, 'responseData');

        if ($hasResponseData === FALSE) {
            echo '<br><br>Oh snap! Something wrong in the response. Unable to extract response data.<br><br>';
            return;
        }
        return $this->buildResponse($jsonResponse, $jsonHelper);
    }

    private function buildHeaders($rawRequest) {
        $header = new RequestHeader();
        $header->setHMAC(HmacUtils::genarateHmac($this->clientConfig->getHmacSecret(), $rawRequest));
        $header->setAUTH($this->clientConfig->getAuthToken());
        $header->setCSRF($this->clientConfig->getCsrfToken());

        $headers = array();
        $headers[] = 'HMAC: ' . $header->getHmac() . '';
        $headers[] = 'Content-Type: application/json';
        return $headers;
    }

    private function buildRequest($requestData, $actionType, $jsonHelper) {
        $gatewayRequest = new GatewayRequest();
        $gatewayRequest->setActionType($actionType);
        $gatewayRequest->setRequestDate(date('Y-m-d H:i:s'));
        $gatewayRequest->setValidateOnly($this->clientConfig->isValidateOnly());
        $gatewayRequest->setRequestData($requestData);

        $jsonRequest = $jsonHelper->toJson($gatewayRequest);
        return json_encode($jsonRequest);
    }

    private function buildResponse($rawResponse, $jsonHelper) {
        $gatewayResponse = $jsonHelper->fromJson(json_decode($rawResponse, TRUE));
        return $gatewayResponse;
    }

}
