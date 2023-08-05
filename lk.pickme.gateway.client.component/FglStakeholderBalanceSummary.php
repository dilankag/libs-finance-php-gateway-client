<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderBalanceSummary {

    private $accountId;
    private $stakeholderType;
    private $currencyType;
    private $accountType;
    private $accountReference;
    private $accountBalance;

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

    function getAccountBalance() {
        return $this->accountBalance;
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

    function setAccountBalance($accountBalance) {
        $this->accountBalance = $accountBalance;
    }

    public function __toString() {
        return 'FglStakeholderBalanceSummary[accountId=' . $this->accountId .
                ', accountBalance=' . $this->accountBalance . ']';
    }

}
