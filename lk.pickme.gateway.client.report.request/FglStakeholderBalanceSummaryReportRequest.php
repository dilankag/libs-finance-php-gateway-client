<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderBalanceSummaryReportRequest extends BaseReportRequest {

    private $stakeholderId;
    private $currencyTypeId;
    private $accountTypeId;
    private $accountReferenceId;
    private $fromDate;
    private $toDate;
    private $accountingRuleIdsIn;
    private $accountingRuleIdsNotIn;

    function getStakeholderId() {
        return $this->stakeholderId;
    }

    function getCurrencyTypeId() {
        return $this->currencyTypeId;
    }

    function getAccountTypeId() {
        return $this->accountTypeId;
    }

    function getAccountReferenceId() {
        return $this->accountReferenceId;
    }

    function getFromDate() {
        return $this->fromDate;
    }

    function getToDate() {
        return $this->toDate;
    }

    function getAccountingRuleIdsIn() {
        return $this->accountingRuleIdsIn;
    }

    function getAccountingRuleIdsNotIn() {
        return $this->accountingRuleIdsNotIn;
    }

    function setStakeholderId($stakeholderId) {
        $this->stakeholderId = $stakeholderId;
    }

    function setCurrencyTypeId($currencyTypeId) {
        $this->currencyTypeId = $currencyTypeId;
    }

    function setAccountTypeId($accountTypeId) {
        $this->accountTypeId = $accountTypeId;
    }

    function setAccountReferenceId($accountReferenceId) {
        $this->accountReferenceId = $accountReferenceId;
    }

    function setFromDate($fromDate) {
        $this->fromDate = $fromDate;
    }

    function setToDate($toDate) {
        $this->toDate = $toDate;
    }

    function setAccountingRuleIdsIn($accountingRuleIdsIn) {
        $this->accountingRuleIdsIn = $accountingRuleIdsIn;
    }

    function setAccountingRuleIdsNotIn($accountingRuleIdsNotIn) {
        $this->accountingRuleIdsNotIn = $accountingRuleIdsNotIn;
    }

}
