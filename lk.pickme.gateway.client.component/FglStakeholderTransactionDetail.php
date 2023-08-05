<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderTransactionDetail {

    private $journalId;
    private $journalEventId;
    private $journalEventLogId;
    private $journalAccountingRuleId;
    private $journalReferenceId;
    private $journalGrossAmount;
    private $postingJournalId;
    private $postingAccountingRuleId;
    private $postingReferenceId;
    private $postingAccountId;
    private $postingAccountingPeriod;
    private $postingAccountingEntry;
    private $postingCurrencyTypeId;
    private $postingAmount;
    private $accountStakeholderId;
    private $accountCurrencyTypeId;
    private $accountTypeId;
    private $accountReferenceId;
    private $accountingRuleId;
    private $accountingRuleDescription;
    private $eventId;
    private $eventReferenceParam;
    private $createdDate;
    private $modifiedDate;
    private $createdBy;
    private $modifiedBy;
    private $version;
    private $routingKey;

    function getJournalId() {
        return $this->journalId;
    }

    function getJournalEventId() {
        return $this->journalEventId;
    }

    function getJournalEventLogId() {
        return $this->journalEventLogId;
    }

    function getJournalAccountingRuleId() {
        return $this->journalAccountingRuleId;
    }

    function getJournalReferenceId() {
        return $this->journalReferenceId;
    }

    function getJournalGrossAmount() {
        return $this->journalGrossAmount;
    }

    function getPostingJournalId() {
        return $this->postingJournalId;
    }

    function getPostingAccountingRuleId() {
        return $this->postingAccountingRuleId;
    }

    function getPostingReferenceId() {
        return $this->postingReferenceId;
    }

    function getPostingAccountId() {
        return $this->postingAccountId;
    }

    function getPostingAccountingPeriod() {
        return $this->postingAccountingPeriod;
    }

    function getPostingAccountingEntry() {
        return $this->postingAccountingEntry;
    }

    function getPostingCurrencyTypeId() {
        return $this->postingCurrencyTypeId;
    }

    function getPostingAmount() {
        return $this->postingAmount;
    }

    function getAccountStakeholderId() {
        return $this->accountStakeholderId;
    }

    function getAccountCurrencyTypeId() {
        return $this->accountCurrencyTypeId;
    }

    function getAccountTypeId() {
        return $this->accountTypeId;
    }

    function getAccountReferenceId() {
        return $this->accountReferenceId;
    }

    function getAccountingRuleId() {
        return $this->accountingRuleId;
    }

    function getAccountingRuleDescription() {
        return $this->accountingRuleDescription;
    }

    function getEventId() {
        return $this->eventId;
    }

    function getEventReferenceParam() {
        return $this->eventReferenceParam;
    }

    function getCreatedDate() {
        return $this->createdDate;
    }

    function getModifiedDate() {
        return $this->modifiedDate;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }

    function getModifiedBy() {
        return $this->modifiedBy;
    }

    function getVersion() {
        return $this->version;
    }

    function getRoutingKey() {
        return $this->routingKey;
    }

    function setJournalId($journalId) {
        $this->journalId = $journalId;
    }

    function setJournalEventId($journalEventId) {
        $this->journalEventId = $journalEventId;
    }

    function setJournalEventLogId($journalEventLogId) {
        $this->journalEventLogId = $journalEventLogId;
    }

    function setJournalAccountingRuleId($journalAccountingRuleId) {
        $this->journalAccountingRuleId = $journalAccountingRuleId;
    }

    function setJournalReferenceId($journalReferenceId) {
        $this->journalReferenceId = $journalReferenceId;
    }

    function setJournalGrossAmount($journalGrossAmount) {
        $this->journalGrossAmount = $journalGrossAmount;
    }

    function setPostingJournalId($postingJournalId) {
        $this->postingJournalId = $postingJournalId;
    }

    function setPostingAccountingRuleId($postingAccountingRuleId) {
        $this->postingAccountingRuleId = $postingAccountingRuleId;
    }

    function setPostingReferenceId($postingReferenceId) {
        $this->postingReferenceId = $postingReferenceId;
    }

    function setPostingAccountId($postingAccountId) {
        $this->postingAccountId = $postingAccountId;
    }

    function setPostingAccountingPeriod($postingAccountingPeriod) {
        $this->postingAccountingPeriod = $postingAccountingPeriod;
    }

    function setPostingAccountingEntry($postingAccountingEntry) {
        $this->postingAccountingEntry = $postingAccountingEntry;
    }

    function setPostingCurrencyTypeId($postingCurrencyTypeId) {
        $this->postingCurrencyTypeId = $postingCurrencyTypeId;
    }

    function setPostingAmount($postingAmount) {
        $this->postingAmount = $postingAmount;
    }

    function setAccountStakeholderId($accountStakeholderId) {
        $this->accountStakeholderId = $accountStakeholderId;
    }

    function setAccountCurrencyTypeId($accountCurrencyTypeId) {
        $this->accountCurrencyTypeId = $accountCurrencyTypeId;
    }

    function setAccountTypeId($accountTypeId) {
        $this->accountTypeId = $accountTypeId;
    }

    function setAccountReferenceId($accountReferenceId) {
        $this->accountReferenceId = $accountReferenceId;
    }

    function setAccountingRuleId($accountingRuleId) {
        $this->accountingRuleId = $accountingRuleId;
    }

    function setAccountingRuleDescription($accountingRuleDescription) {
        $this->accountingRuleDescription = $accountingRuleDescription;
    }

    function setEventId($eventId) {
        $this->eventId = $eventId;
    }

    function setEventReferenceParam($eventReferenceParam) {
        $this->eventReferenceParam = $eventReferenceParam;
    }

    function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;
    }

    function setModifiedDate($modifiedDate) {
        $this->modifiedDate = $modifiedDate;
    }

    function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }

    function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;
    }

    function setVersion($version) {
        $this->version = $version;
    }

    function setRoutingKey($routingKey) {
        $this->routingKey = $routingKey;
    }

    public function __toString() {
        return 'FglStakeholderTransactionDetail[journalId=' . $this->journalId .
                ', postingAmount=' . $this->postingAmount . ']';
    }

}
