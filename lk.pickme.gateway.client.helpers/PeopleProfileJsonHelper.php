<?php

/**
 * @author Dilanka Gamage
 */
class PeopleProfileJsonHelper extends BaseJsonHelper {

    public function fromJson($gatewayResponse) {
        // Map report response fields
        $responseData = $gatewayResponse["responseData"];
        $peopleProfileReportResponse = new PeopleProfileReportResponse();
        $profiles = array();
        foreach ($responseData["profiles"] as $profile) {
            $peopleProfile = parent::makePeopleProfile($profile);
            if (isset($profile["driverTripSummaries"])) {
                $driverTripSummaries = parent::makeDriverTripSummaries($profile["driverTripSummaries"]);
                $peopleProfile->setDriverTripSummaries($driverTripSummaries);
            }
            array_push($profiles, $peopleProfile);
        }
        $peopleProfileReportResponse->setProfiles($profiles);
        return $peopleProfileReportResponse;
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
        $peopleId = $requestData->getPeopleId();
        $withDriverTripSummary = $requestData->getWithDriverTripSummary();
        $withoutEmptyDriverTripSummary = $requestData->getWithoutEmptyDriverTripSummary();
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
                "peopleId" => $peopleId,
                "withDriverTripSummary" => $withDriverTripSummary,
                "withoutEmptyDriverTripSummary" => $withoutEmptyDriverTripSummary
            )
        );
    }

}
