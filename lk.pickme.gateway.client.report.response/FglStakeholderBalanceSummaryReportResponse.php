<?php

/**
 * @author Dilanka Gamage
 */
class FglStakeholderBalanceSummaryReportResponse extends BaseReportResponse {

    private $summaries;

    function getSummaries() {
        return $this->summaries;
    }

    function setSummaries($summaries) {
        $this->summaries = $summaries;
    }

}
