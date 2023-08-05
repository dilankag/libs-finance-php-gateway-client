<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderMonthlySummary {

    private $accountingPeriod;
    private $accountId;
    private $stakeholderType;
    private $currencyType;
    private $accountType;
    private $accountReference;
    private $totalDebit;
    private $debitCount;
    private $totalCredit;
    private $creditCount;
    private $accountBalance;

    function getAccountingPeriod() {
        return $this->accountingPeriod;
    }

    function getAccountId() {
        return $this->accountId;
    }

    function getStakeholderType() {
        return $this->stakeholderType;
    }

    function getCurrencyType() {
        return $this->currencyType;
    }

    function getAccountType() {
        return $this->accountType;
    }

    function getAccountReference() {
        return $this->accountReference;
    }

    function getTotalDebit() {
        return $this->totalDebit;
    }

    function getDebitCount() {
        return $this->debitCount;
    }

    function getTotalCredit() {
        return $this->totalCredit;
    }

    function getCreditCount() {
        return $this->creditCount;
    }

    function getAccountBalance() {
        return $this->accountBalance;
    }

    function setAccountingPeriod($accountingPeriod) {
        $this->accountingPeriod = $accountingPeriod;
    }

    function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    function setStakeholderType($stakeholderType) {
        $this->stakeholderType = $stakeholderType;
    }

    function setCurrencyType($currencyType) {
        $this->currencyType = $currencyType;
    }

    function setAccountType($accountType) {
        $this->accountType = $accountType;
    }

    function setAccountReference($accountReference) {
        $this->accountReference = $accountReference;
    }

    function setTotalDebit($totalDebit) {
        $this->totalDebit = $totalDebit;
    }

    function setDebitCount($debitCount) {
        $this->debitCount = $debitCount;
    }

    function setTotalCredit($totalCredit) {
        $this->totalCredit = $totalCredit;
    }

    function setCreditCount($creditCount) {
        $this->creditCount = $creditCount;
    }

    function setAccountBalance($accountBalance) {
        $this->accountBalance = $accountBalance;
    }

    public function __toString() {
        return 'FglStakeholderBalanceSummary[accountingPeriod=' . $this->accountingPeriod .
                ', accountBalance=' . $this->accountBalance . ']';
    }

}
