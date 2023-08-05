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

<?php include '../lk.pickme.gateway.client.report.request/BaseReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/PeopleProfileReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverProfileReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverTripTransactionReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverTripSummaryReportRequest.php'; ?>
<?php include '../lk.pickme.gateway.client.report.request/DriverCreditDebitReportRequest.php'; ?>

<?php include '../lk.pickme.gateway.client.report.response/BaseReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/PeopleProfileReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverProfileReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverTripTransactionReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverTripSummaryReportResponse.php'; ?>
<?php include '../lk.pickme.gateway.client.report.response/DriverCreditDebitReportResponse.php'; ?>

<?php include '../lk.pickme.gateway.client.helpers/BaseJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/PeopleProfileJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverProfileJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverTripTransactionJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverTripSummaryJsonHelper.php'; ?>
<?php include '../lk.pickme.gateway.client.helpers/DriverCreditDebitJsonHelper.php'; ?>

<?php

/**
 * @author Dilanka Gamage
 */

// Set root config
date_default_timezone_set('Asia/Colombo');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Build client config object
$clientConfig = new ClientConfig();
$clientConfig->setServiceEndpoint("http://146.148.110.253:8080/proxy/finance/reporting");
$clientConfig->setHmacSecret("keep-this-secret");

// Build gateway client object
$client = new GatewayClient($clientConfig);

echo '<br><br>Test Case 4: Fetch driver trip summary<br>';
// Build report request object
$driverTripSummaryReportRequest = new DriverTripSummaryReportRequest();
$driverTripSummaryReportRequest->setDriverId(223);
// Apply filters
// $driverTripSummaryReportRequest->setWithDriverProfile(TRUE); // uncomment to fetch with driver profile
// $driverTripSummaryReportRequest->setWithPeopleProfile(TRUE); // uncomment to fetch with people profile
// $peopleProfileReportRequest->setFromPortal(TRUE); // uncomment if the report request originates from finance web portal
// Process report request object
$driverTripSummaryReportResponse = $client->report()->driverTripSummary($driverTripSummaryReportRequest);
echo '<br><br>Fetch count >> ' . sizeof($driverTripSummaryReportResponse->getSummaries()) . '<br>';
foreach($driverTripSummaryReportResponse->getSummaries() as $summary) {
	echo '<br>' . $summary;
}