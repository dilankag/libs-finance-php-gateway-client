<?php

/**
 * @author Dilanka Gamage
 */
final class Report extends BaseFacade {
    
    public function __construct(ClientConfig $clientConfig) {
        parent::__construct($clientConfig);
    }
    
    public function peopleProfile($request){
        $peopleProfileJsonHelper = new PeopleProfileJsonHelper();
        return parent::process($request, ActionType::$PEOPLE_PROFILE, $peopleProfileJsonHelper);
    }
    
    public function driverProfile($request){
        $driverProfileJsonHelper = new DriverProfileJsonHelper();
        return parent::process($request, ActionType::$DRIVER_PROFILE, $driverProfileJsonHelper);
    }

    public function driverTripTransaction($request){
        $driverTripTransactionJsonHelper = new DriverTripTransactionJsonHelper();
        return parent::process($request, ActionType::$DRIVER_TRIP_TRANSACTION, $driverTripTransactionJsonHelper);
    }

    public function driverTripSummary($request){
        $driverTripSummaryJsonHelper = new DriverTripSummaryJsonHelper();
        return parent::process($request, ActionType::$DRIVER_TRIP_SUMMARY, $driverTripSummaryJsonHelper);
    }

    public function fetchFglStakeholderMonthlySummary($request) {
        $fglStakeholderMonthlySummaryJsonHelper = new FglStakeholderMonthlySummaryJsonHelper();
        return parent::process($request, ActionType::$FGL_STAKEHOLDER_MONTHLY_SUMMARY, $fglStakeholderMonthlySummaryJsonHelper);
    }

    public function fetchFglStakeholderBalanceSummary($request) {
        $fglStakeholderBalanceSummaryJsonHelper = new FglStakeholderBalanceSummaryJsonHelper();
        return parent::process($request, ActionType::$FGL_STAKEHOLDER_BALANCE_SUMMARY, $fglStakeholderBalanceSummaryJsonHelper);
    }

    public function fetchFglStakeholderTransactionDetail($request) {
        $fglStakeholderTransactionDetailJsonHelper = new FglStakeholderTransactionDetailJsonHelper();
        return parent::process($request, ActionType::$FGL_STAKEHOLDER_TRANSACTION_DETAIL, $fglStakeholderTransactionDetailJsonHelper);
    }

    public function fetchFglAccountingRuleProfile($request) {
        $fglAccountingRuleProfileJsonHelper = new FglAccountingRuleProfileJsonHelper();
        return parent::process($request, ActionType::$FGL_ACCOUNTING_RULE_PROFILE, $fglAccountingRuleProfileJsonHelper);
    }

}
