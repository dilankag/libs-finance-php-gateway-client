<?php

/**
 * @author Dilanka Gamage
 */
class FglAccountingRuleProfile {

    private $ruleId;
    private $eventId;
    private $relationalLogicId;
    private $arithmeticLogicId;
    private $description;
    private $transactionCategoryId;
    private $active;
    private $startingDate;
    private $closingDate;
    private $createdDate;
    private $modifiedDate;
    private $createdBy;
    private $modifiedBy;
    private $version;
    private $routingKey;

    function getRuleId() {
        return $this->ruleId;
    }

    function getEventId() {
        return $this->eventId;
    }

    function getRelationalLogicId() {
        return $this->relationalLogicId;
    }

    function getArithmeticLogicId() {
        return $this->arithmeticLogicId;
    }

    function getDescription() {
        return $this->description;
    }

    function getTransactionCategoryId() {
        return $this->transactionCategoryId;
    }

    function getActive() {
        return $this->active;
    }

    function getStartingDate() {
        return $this->startingDate;
    }

    function getClosingDate() {
        return $this->closingDate;
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

    function setRuleId($ruleId) {
        $this->ruleId = $ruleId;
    }

    function setEventId($eventId) {
        $this->eventId = $eventId;
    }

    function setRelationalLogicId($relationalLogicId) {
        $this->relationalLogicId = $relationalLogicId;
    }

    function setArithmeticLogicId($arithmeticLogicId) {
        $this->arithmeticLogicId = $arithmeticLogicId;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setTransactionCategoryId($transactionCategoryId) {
        $this->transactionCategoryId = $transactionCategoryId;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setStartingDate($startingDate) {
        $this->startingDate = $startingDate;
    }

    function setClosingDate($closingDate) {
        $this->closingDate = $closingDate;
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
        return 'FglAccountingRuleProfile[ruleId=' . $this->ruleId .
                ', description=' . $this->description . ']';
    }

}
