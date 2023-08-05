<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderTransactionDetailReportRequest extends BaseReportRequest {

    private $stakeholderId;
    private $currencyTypeId;
    private $accountTypeId;
    private $accountReferenceId;
    private $transactionReferenceId;
    private $accountingEntry;
    private $fromDate;
    private $toDate;
    private $minAmount;
    private $maxAmount;
    private $accountingRuleIdsIn;
    private $accountingRuleIdsNotIn;
    private $transactionCategoryIdsIn;
    private $transactionCategoryIdsNotIn;

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

    function getTransactionReferenceId() {
        return $this->transactionReferenceId;
    }

    function getAccountingEntry() {
        return $this->accountingEntry;
    }

    function getFromDate() {
        return $this->fromDate;
    }

    function getToDate() {
        return $this->toDate;
    }

    function getMinAmount() {
        return $this->minAmount;
    }

    function getMaxAmount() {
        return $this->maxAmount;
    }

    function getAccountingRuleIdsIn() {
        return $this->accountingRuleIdsIn;
    }

    function getAccountingRuleIdsNotIn() {
        return $this->accountingRuleIdsNotIn;
    }

    function getTransactionCategoryIdsIn() {
        return $this->transactionCategoryIdsIn;
    }

    function getTransactionCategoryIdsNotIn() {
        return $this->transactionCategoryIdsNotIn;
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

    function setTransactionReferenceId($transactionReferenceId) {
        $this->transactionReferenceId = $transactionReferenceId;
    }

    function setAccountingEntry($accountingEntry) {
        $this->accountingEntry = $accountingEntry;
    }

    function setFromDate($fromDate) {
        $this->fromDate = $fromDate;
    }

    function setToDate($toDate) {
        $this->toDate = $toDate;
    }

    function setMinAmount($minAmount) {
        $this->minAmount = $minAmount;
    }

    function setMaxAmount($maxAmount) {
        $this->maxAmount = $maxAmount;
    }

    function setAccountingRuleIdsIn($accountingRuleIdsIn) {
        $this->accountingRuleIdsIn = $accountingRuleIdsIn;
    }

    function setAccountingRuleIdsNotIn($accountingRuleIdsNotIn) {
        $this->accountingRuleIdsNotIn = $accountingRuleIdsNotIn;
    }

    function setTransactionCategoryIdsIn($transactionCategoryIdsIn) {
        $this->transactionCategoryIdsIn = $transactionCategoryIdsIn;
    }

    function setTransactionCategoryIdsNotIn($transactionCategoryIdsNotIn) {
        $this->transactionCategoryIdsNotIn = $transactionCategoryIdsNotIn;
    }

}
