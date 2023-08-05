<?php

/**
 * @author Dilanka Gamage
 */
class DriverCreditDebitReportRequest extends DriverTripTransactionReportRequest {

	private $withTaxiDriverMapping = FALSE;

	public function __construct() {
        parent::__construct();
    }

    function getWithTaxiDriverMapping() {
        return $this->withTaxiDriverMapping;
    }

    function setWithTaxiDriverMapping($withTaxiDriverMapping) {
        $this->withTaxiDriverMapping = $withTaxiDriverMapping;
    }
}