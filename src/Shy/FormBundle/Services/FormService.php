<?php

/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 2015-11-28
 * Time: 17:59
 */
class FormService {
    protected $doctrine;

    public function __construct($doctrine) {
        $this->doctrine = $doctrine;
    }

    public function findComponent() {
        $em = $this->doctrine->getManager();




    }


}