<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderMonthlySummaryReportResponse extends BaseReportResponse {

    private $summaries;

    function getSummaries() {
        return $this->summaries;
    }

    function setSummaries($summaries) {
        $this->summaries = $summaries;
    }

}
