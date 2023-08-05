<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderBalanceSummaryJsonHelper extends BaseJsonHelper {

    public function fromJson($gatewayResponse) {
        // Map report response fields
        $responseData = $gatewayResponse["responseData"];
        $fglStakeholderBalanceSummaryReportResponse = new FglStakeholderBalanceSummaryReportResponse();
        $summaries = array();
        foreach ($responseData["summaries"] as $summary) {
            $fglStakeholderBalanceSummary = parent::makeFglStakeholderBalanceSummary($summary);
            array_push($summaries, $fglStakeholderBalanceSummary);
        }
        $fglStakeholderBalanceSummaryReportResponse->setSummaries($summaries);
        return $fglStakeholderBalanceSummaryReportResponse;
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
        $fromDate = $requestData->getFromDate();
        $toDate = $requestData->getToDate();
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
                "fromDate" => $fromDate,
                "toDate" => $toDate,
                "accountingRuleIdsIn" => $accountingRuleIdsIn,
                "accountingRuleIdsNotIn" => $accountingRuleIdsNotIn
            )
        );
    }

}
