<?php

/**
 * @author Dilanka Gamage
 */
class Sorter {

    private $field;
    private $DESC;

    function getField() {
        return $this->field;
    }

    function getDESC() {
        return $this->DESC;
    }

    function setField($field) {
        $this->field = $field;
    }

    function setDESC($DESC) {
        $this->DESC = $DESC;
    }

    public function __toString() {
        return 'Sorter[field=' . $this->field .
        ', DESC=' . $this->DESC . ']';
    }

}
