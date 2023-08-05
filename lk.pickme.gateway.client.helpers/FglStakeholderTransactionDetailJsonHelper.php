<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderTransactionDetailJsonHelper extends BaseJsonHelper {

    public function fromJson($gatewayResponse) {
        // Map report response fields
        $responseData = $gatewayResponse["responseData"];
        $fglStakeholderTransactionDetailReportResponse = new FglStakeholderTransactionDetailReportResponse();
        $transactions = array();
        foreach ($responseData["transactions"] as $transaction) {
            $fglStakeholderTransactionDetail = parent::makeFglStakeholderTransactionDetail($transaction);
            array_push($transactions, $fglStakeholderTransactionDetail);
        }
        $fglStakeholderTransactionDetailReportResponse->setTransactions($transactions);
        return $fglStakeholderTransactionDetailReportResponse;
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
        $transactionReferenceId = $requestData->getTransactionReferenceId();
        $accountingEntry = $requestData->getAccountingEntry();
        $fromDate = $requestData->getFromDate();
        $toDate = $requestData->getToDate();
        $minAmount = $requestData->getMinAmount();
        $maxAmount = $requestData->getMaxAmount();
        $accountingRuleIdsIn = $requestData->getAccountingRuleIdsIn();
        $accountingRuleIdsNotIn = $requestData->getAccountingRuleIdsNotIn();
        $transactionCategoryIdsIn = $requestData->getTransactionCategoryIdsIn();
        $transactionCategoryIdsNotIn = $requestData->getTransactionCategoryIdsNotIn();
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
                "transactionReferenceId" => $transactionReferenceId,
                "accountingEntry" => $accountingEntry,
                "transactionReferenceId" => $transactionReferenceId,
                "fromDate" => $fromDate,
                "toDate" => $toDate,
                "minAmount" => $minAmount,
                "maxAmount" => $maxAmount,
                "accountingRuleIdsIn" => $accountingRuleIdsIn,
                "accountingRuleIdsNotIn" => $accountingRuleIdsNotIn,
                "transactionCategoryIdsIn" => $transactionCategoryIdsIn,
                "transactionCategoryIdsNotIn" => $transactionCategoryIdsNotIn
            )
        );
    }

}
