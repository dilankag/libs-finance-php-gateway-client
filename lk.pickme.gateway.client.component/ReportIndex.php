<?php

/**
 * @author Dilanka Gamage
 */
class ReportIndex {

    private $name;
    private $type;

    function getName() {
        return $this->name;
    }

    function getType() {
        return $this->type;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setType($type) {
        $this->type = $type;
    }

    public function __toString() {
        return 'ReportIndex[name=' . $this->name .
        ', type=' . $this->type . ']';
    }

}
