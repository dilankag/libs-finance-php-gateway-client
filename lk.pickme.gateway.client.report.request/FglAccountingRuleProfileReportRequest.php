<?php

/**
 * @author Dilanka Gamage
 */
class FglAccountingRuleProfileReportRequest extends BaseReportRequest {

    private $ruleId;
    private $ruleIdLike;
    private $active;
    private $accountingRuleIdsIn;
    private $accountingRuleIdsNotIn;

    function getRuleId() {
        return $this->ruleId;
    }

    function getRuleIdLike() {
        return $this->ruleIdLike;
    }

    function getActive() {
        return $this->active;
    }

    function getAccountingRuleIdsIn() {
        return $this->accountingRuleIdsIn;
    }

    function getAccountingRuleIdsNotIn() {
        return $this->accountingRuleIdsNotIn;
    }

    function setRuleId($ruleId) {
        $this->ruleId = $ruleId;
    }

    function setRuleIdLike($ruleIdLike) {
        $this->ruleIdLike = $ruleIdLike;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setAccountingRuleIdsIn($accountingRuleIdsIn) {
        $this->accountingRuleIdsIn = $accountingRuleIdsIn;
    }

    function setAccountingRuleIdsNotIn($accountingRuleIdsNotIn) {
        $this->accountingRuleIdsNotIn = $accountingRuleIdsNotIn;
    }

}
