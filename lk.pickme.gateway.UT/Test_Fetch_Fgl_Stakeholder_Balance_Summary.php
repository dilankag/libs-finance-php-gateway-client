<?php include '../lk.pickme.gateway.client/GatewayClient.php'; ?>
<?php include '../lk.pickme.gateway.client.config/ClientConfig.php'; ?>

<?php include '../lk.pickme.gateway.client.root/GatewayRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.root/GatewayResponse.php'; ?>

<?php include '../lk.pickme.gateway.client.utils/IJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.utils/HmacUtils.php'; ?>
<?php include '../lk.pickme.gateway.client.utils/CommonUtils.php'; ?>
<?php include '../lk.pickme.gateway.client.utils/RestClient.php'; ?>

<?php include '../lk.pickme.gateway.client.enums/Version.php'; ?>
<?php include '../lk.pickme.gateway.client.enums/DateType.php'; ?>
<?php include '../lk.pickme.gateway.client.enums/TransactionType.php'; ?>
<?php include '../lk.pickme.gateway.client.enums/ActionType.php'; ?>

<?php include '../lk.pickme.gateway.client.facade/BaseFacade.php'; ?>
<?php include '../lk.pickme.gateway.client.facade/Report.php'; ?>

<?php include '../lk.pickme.gateway.client.component/RequestHeader.php'; ?>
<?php include '../lk.pickme.gateway.client.component/PeopleProfile.php'; ?>
<?php include '../lk.pickme.gateway.client.component/DriverProfile.php'; ?>
<?php include '../lk.pickme.gateway.client.component/TaxiProfile.php'; ?>
<?php include '../lk.pickme.gateway.client.component/VehicleModelProfile.php'; ?>
<?php include '../lk.pickme.gateway.client.component/TaxiDriverMapping.php'; ?>
<?php include '../lk.pickme.gateway.client.component/DriverTripTransaction.php'; ?>
<?php include '../lk.pickme.gateway.client.component/DriverTripSummary.php'; ?>
<?php include '../lk.pickme.gateway.client.component/DriverCreditDebit.php'; ?>
<?php include '../lk.pickme.gateway.client.component/FglStakeholderBalanceSummary.php'; ?>
<?php include '../lk.pickme.gateway.client.component/FglStakeholderMonthlySummary.php'; ?>
<?php include '../lk.pickme.gateway.client.component/FglStakeholderTransactionDetail.php'; ?>
<?php include '../lk.pickme.gateway.client.component/FglAccountingRuleProfile.php'; ?>

<?php include '../lk.pickme.gateway.client.report.request/BaseReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/PeopleProfileReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverProfileReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverTripTransactionReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverTripSummaryReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverCreditDebitReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/FglStakeholderMonthlySummaryReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/FglStakeholderBalanceSummaryReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/FglStakeholderTransactionDetailReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/FglAccountingRuleProfileReportRequest.php'; ?>

<?php include '../lk.pickme.gateway.client.report.response/BaseReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/PeopleProfileReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverProfileReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverTripTransactionReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverTripSummaryReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverCreditDebitReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/FglStakeholderMonthlySummaryReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/FglStakeholderBalanceSummaryReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/FglStakeholderTransactionDetailReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/FglAccountingRuleProfileReportResponse.php'; ?>

<?php include '../lk.pickme.gateway.client.helpers/BaseJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/PeopleProfileJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverProfileJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverTripTransactionJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverTripSummaryJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverCreditDebitJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/FglStakeholderMonthlySummaryJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/FglStakeholderBalanceSummaryJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/FglStakeholderTransactionDetailJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/FglAccountingRuleProfileJsonHelper.php'; ?>

<?php

/**
 * @author Dilanka Gamage
 */

// Set root config
date_default_timezone_set('Asia/Colombo');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Build UAT client config object
$uatClientConfig = new ClientConfig();
$uatClientConfig->setServiceEndpoint("http://146.148.110.253:8080/proxy/finance/reporting");
$uatClientConfig->setHmacSecret("keep-this-secret");

// Build STAGE client config object
$stageClientConfig = new ClientConfig();
$stageClientConfig->setServiceEndpoint("https://finance-report.picme.lk/proxy/finance/reporting");
$stageClientConfig->setHmacSecret("WkgvOON3FB");

// Build PROD client config object
$prodClientConfig = new ClientConfig();
$prodClientConfig->setServiceEndpoint("https://finance-report.pickme.lk/proxy/finance/reporting");
$prodClientConfig->setHmacSecret("1D28buTZoq");

// Build gateway client object
$client = new GatewayClient($uatClientConfig);

echo '<br><br>FGL Test Case : Fetch stakeholder transaction details<br>';
// Build report request object
$reportRequest = new FglStakeholderBalanceSummaryReportRequest();
// Alter base report request
$reportRequest->setFromStaff(TRUE); // indicate the request is originated from staff user
$reportRequest->setFromPortal(TRUE); // indicate the request is originated from finance web portal
$reportRequest->setPagingEnabled(TRUE); // enable or disable paging
$reportRequest->setPageSize(100); // alter default page size 10
$reportRequest->setPageIndex(0); // alter default page index 0
$reportRequest->setExportEnabled(FALSE); // enable or disable export
// Apply term filters
$reportRequest->setStakeholderId("MERCHANT"); // fetch by stakeholder id such MERCHANT, DRIVER, CUSTOMER (mandatory to set)
$reportRequest->setAccountReferenceId("3468");  // fetch by MERCHANT, DRIVER, CUSTOMER Id
$reportRequest->setFromDate("2019-05-24T00:00:00"); // The starting date of reporting period in yyyy-MM-ddTHH:mm:ss format
$reportRequest->setToDate("2019-06-24T23:59:59"); // The ending date of reporting period in yyyy-MM-ddTHH:mm:ss format
// Apply sorters
//$sortByCreatedTime = array("field"=>"createdDate", "DESC"=>TRUE);
//$reportRequest->setSorters("[" . json_encode($sortByCreatedTime) . "]");
// Process report request object
$reportResponse = $client->report()->fetchFglStakeholderBalanceSummary($reportRequest);
echo '<br><br>Stakeholder balance summaries: ' . sizeof($reportResponse->getSummaries()) . '<br>';
foreach($reportResponse->getSummaries() as $summary) {
	echo '<br>' . $summary;
}