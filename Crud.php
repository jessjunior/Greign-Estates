<?php

interface Crud{
//All these methods have to be implemented by any class that implements this interface
public function save($con);
public function readAll();
public function readUnique();
public function search();
public function update();
public function removeOne();
public function removeAll();

//These two methods are added for lab 2
public function validateForm();
public function createFormErrorSessions();
}
?>