<?php

/**
 * @author Dilanka Gamage
 */
class GatewayClient {

    private $report;

    public function __construct(ClientConfig $clientConfig) {
        $this->report = new Report($clientConfig);
    }

    public function report() {
        return $this->report;
    }

}
