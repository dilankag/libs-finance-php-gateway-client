<?php

/**
 * @author Dilanka Gamage
 */
abstract class BaseReportResponse {

    protected $responseDate;
    protected $reportIndex;
    protected $pageSize;
    protected $pageIndex;
    protected $totalSize;
    protected $errorText;

    public function __construct() {
    }

    function getResponseDate() {
        return $this->responseDate;
    }

    function getReportIndex() {
        return $this->reportIndex;
    }

    function getPageSize() {
        return $this->pageSize;
    }

    function getPageIndex() {
        return $this->pageIndex;
    }

    function getTotalSize() {
        return $this->totalSize;
    }

    function getErrorText() {
        return $this->errorText;
    }

    function setResponseDate($responseDate) {
        $this->responseDate = $responseDate;
    }

    function setReportIndex($reportIndex) {
        $this->reportIndex = $reportIndex;
    }

    function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
    }

    function setTotalSize($totalSize) {
        $this->totalSize = $totalSize;
    }

    function setErrorText($errorText) {
        $this->errorText = $errorText;
    }

}
