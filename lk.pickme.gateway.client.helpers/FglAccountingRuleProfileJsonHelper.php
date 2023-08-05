<?php

/**
 * @author Dilanka Gamage
 */
class FglAccountingRuleProfileJsonHelper extends BaseJsonHelper {

    public function fromJson($gatewayResponse) {
        // Map report response fields
        $responseData = $gatewayResponse["responseData"];
        $fglAccountingRuleProfileReportResponse = new FglAccountingRuleProfileReportResponse();
        $profiles = array();
        foreach ($responseData["profiles"] as $profile) {
            $fglAccountingRuleProfile = parent::makeFglAccountingRuleProfile($profile);
            array_push($profiles, $fglAccountingRuleProfile);
        }
        $fglAccountingRuleProfileReportResponse->setProfiles($profiles);
        return $fglAccountingRuleProfileReportResponse;
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
        $ruleId = $requestData->getRuleId();
        $ruleIdLike = $requestData->getRuleIdLike();
        $active = $requestData->getActive();
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
                "ruleId" => $ruleId,
                "ruleIdLike" => $ruleIdLike,
                "active" => $active,
                "accountingRuleIdsIn" => $accountingRuleIdsIn,
                "accountingRuleIdsNotIn" => $accountingRuleIdsNotIn
            )
        );
    }

}
