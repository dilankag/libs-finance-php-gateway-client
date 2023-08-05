<?php

/**
 * @author Dilanka Gamage
 */
class DriverTripTransactionReportResponse extends BaseReportResponse {

    private $transactions;

    function getTransactions() {
        return $this->transactions;
    }

    function setTransactions($transactions) {
        $this->transactions = $transactions;
    }

}
