<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderMonthlySummaryJsonHelper extends BaseJsonHelper {

    public function fromJson($gatewayResponse) {
        // Map report response fields
        $responseData = $gatewayResponse["responseData"];
        $fglStakeholderMonthlySummaryReportResponse = new FglStakeholderMonthlySummaryReportResponse();
        $summaries = array();
        foreach ($responseData["summaries"] as $summary) {
            $fglStakeholderMonthlySummary = parent::makeFglStakeholderMonthlySummary($summary);
            array_push($summaries, $fglStakeholderMonthlySummary);
        }
        $fglStakeholderMonthlySummaryReportResponse->setSummaries($summaries);
        return $fglStakeholderMonthlySummaryReportResponse;
    }

    public function toJson($gatewayRequest) {
        // Map gateway request fields
        $apiVersion = $gatewayRequest->getApiVersion();
        $messageId = $gatewayRequest->getMessageId();
        $actionType = $gatewayRequest->getActionType();
        $requestDate = $gatewayRequest->getRequestDate();
        $validateOnly = $gatewayRequest->getValidateOnly();
        $requestData = $gatewayRequest->getRequestData();
        // Map report request fields
        $fromStaff = $requestData->getFromStaff();
        $fromPortal = $requestData->getFromPortal();
        $pagingEnabled = $requestData->getPagingEnabled();
        $pageSize = $requestData->getPageSize();
        $pageIndex = $requestData->getPageIndex();
        $exportEnabled = $requestData->getExportEnabled();
        $resultsetSize = $requestData->getResultsetSize();
        $sorters = $requestData->getSorters();
        $stakeholderId = $requestData->getStakeholderId();
        $currencyTypeId = $requestData->getCurrencyTypeId();
        $accountTypeId = $requestData->getAccountTypeId();
        $accountReferenceId = $requestData->getAccountReferenceId();
        $recentNMonths = $requestData->getRecentNMonths();
        $accountingRuleIdsIn = $requestData->getAccountingRuleIdsIn();
        $accountingRuleIdsNotIn = $requestData->getAccountingRuleIdsNotIn();
        return array(
            "apiVersion" => "$apiVersion",
            "messageId" => "$messageId",
            "requestDate" => "$requestDate",
            "validateOnly" => $validateOnly,
            "actionType" => "$actionType",
            "requestData" => array(
                "fromStaff" => $fromStaff,
                "fromPortal" => $fromPortal,
                "pagingEnabled" => $pagingEnabled,
                "pageSize" => $pageSize,
                "pageIndex" => $pageIndex,
                "exportEnabled" => $exportEnabled,
                "resultsetSize" => $resultsetSize,
                "sorters" => $sorters,
                "stakeholderId" => $stakeholderId,
                "currencyTypeId" => $currencyTypeId,
                "accountTypeId" => $accountTypeId,
                "accountReferenceId" => $accountReferenceId,
                "recentNMonths" => $recentNMonths,
                "accountingRuleIdsIn" => $accountingRuleIdsIn,
                "accountingRuleIdsNotIn" => $accountingRuleIdsNotIn
            )
        );
    }

}
