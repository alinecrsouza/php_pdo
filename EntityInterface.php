<?php

/**
 * Created by PhpStorm.
 * User: aline.souza
 * Date: 29/03/2016
 * Time: 10:13
 */
interface EntityInterface
{
    public function getId();
    public function setId($id);

    public function getTable();
    public function setTable($table);
}