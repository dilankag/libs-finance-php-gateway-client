<?php

/**
 * @author Dilanka Gamage
 */
interface IJsonHelper {

    public function fromJson($json);

    public function toJson($instance);
    
}
