<?php

/**
 * @author Dilanka Gamage
 */
abstract class BaseReportRequest {

    protected static $DEFAULT_PAGE_SIZE = 10;
    protected static $MAXIMUM_PAGE_SIZE = 100;
    
    protected $fromStaff = FALSE;
    protected $fromPortal = FALSE;
    protected $pagingEnabled = TRUE;
    protected $pageSize;
    protected $pageIndex = 0;
    protected $exportEnabled = FALSE;
    protected $sorters;
    protected $resultsetSize;

    public function __construct() {
        $this->pageSize = self::$DEFAULT_PAGE_SIZE;
        $this->resultsetSize = self::$DEFAULT_PAGE_SIZE;
    }

    function getFromStaff() {
        return $this->fromStaff;
    }

    function getFromPortal() {
        return $this->fromPortal;
    }

    function getPagingEnabled() {
        return $this->pagingEnabled;
    }

    function getPageSize() {
        return $this->pageSize;
    }

    function getPageIndex() {
        return $this->pageIndex;
    }

    function getExportEnabled() {
        return $this->exportEnabled;
    }

    function getSorters() {
        return $this->sorters;
    }

    function getResultsetSize() {
        return $this->resultsetSize;
    }

    function setFromStaff($fromStaff) {
        $this->fromStaff = $fromStaff;
    }

    function setFromPortal($fromPortal) {
        $this->fromPortal = $fromPortal;
    }

    function setPagingEnabled($pagingEnabled) {
        $this->pagingEnabled = $pagingEnabled;
    }

    function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
    }

    function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
    }

    function setExportEnabled($exportEnabled) {
        $this->exportEnabled = $exportEnabled;
    }

    function setSorters($sorters) {
        $this->sorters = $sorters;
    }

    function setResultsetSize($resultsetSize) {
        $this->resultsetSize = $resultsetSize;
    }

}
