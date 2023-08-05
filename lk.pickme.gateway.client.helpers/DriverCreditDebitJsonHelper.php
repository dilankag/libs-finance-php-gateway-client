<?php

/**
 * @author Dilanka Gamage
 */
class DriverCreditDebitJsonHelper extends BaseJsonHelper {
    
    public function fromJson($gatewayResponse) {
        // Map report response fields
        $responseData = $gatewayResponse["responseData"];
        $driverCreditDebitReportResponse = new DriverCreditDebitReportResponse();
        $summaries = array();
        foreach ($responseData["summaries"] as $summary) {
            $driverCreditDebit = parent::makeDriverCreditDebit($summary);
            if (isset($summary["driverTripSummaries"])) {
                $driverTripSummaries = parent::makeDriverTripSummaries($summary["driverTripSummaries"]);
                $driverCreditDebit->setDriverTripSummaries($driverTripSummaries);
            }
            if (isset($summary["taxiDriverMappings"])) {
                $taxiDriverMappings = parent::makeTaxiDriverMappings($summary["taxiDriverMappings"]);
                $driverCreditDebit->setTaxiDriverMappings($taxiDriverMappings);
            }
            array_push($summaries, $driverCreditDebit);
        }
        $driverCreditDebitReportResponse->setSummaries($summaries);
        return $driverCreditDebitReportResponse;
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
        $transactionId = $requestData->getTransactionId();
        $driverId = $requestData->getDriverId();
        $tripId = $requestData->getTripId();
        $transactionTypes = $requestData->getTransactionTypes();
        $transactionCategories = $requestData->getTransactionCategories();
        $minAmountInRupee = $requestData->getMinAmountInRupee();
        $maxAmountInRupee = $requestData->getMaxAmountInRupee();
        $minAmountInCents = $requestData->getMinAmountInCents();
        $maxAmountInCents = $requestData->getMaxAmountInCents();
        $description = $requestData->getDescription();
        $dateType = $requestData->getDateType();
        $fromDate = $requestData->getFromDate();
        $toDate = $requestData->getToDate();
        $createdBy = $requestData->getCreatedBy();
        $withDriverProfile = $requestData->getWithDriverProfile();
        $withPeopleProfile = $requestData->getWithPeopleProfile();
        $withTaxiDriverMapping = $requestData->getWithTaxiDriverMapping();
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
                "transactionId" => $transactionId,
                "driverId" => $driverId,
                "tripId" => $tripId,
                "transactionTypes" => $transactionTypes,
                "transactionCategories" => $transactionCategories,
                "minAmountInRupee" => $minAmountInRupee,
                "maxAmountInRupee" => $maxAmountInRupee,
                "minAmountInCents" => $minAmountInCents,
                "maxAmountInCents" => $maxAmountInCents,
                "description" => $description,
                "dateType" => $dateType,
                "fromDate" => $fromDate,
                "toDate" => $toDate,
                "createdBy" => $createdBy,
                "withDriverProfile" => $withDriverProfile,
                "withPeopleProfile" => $withPeopleProfile,
                "withTaxiDriverMapping" => $withTaxiDriverMapping
            )
        );
    }
    
}
