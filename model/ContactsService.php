<?php

require_once 'model/ContactsGateway.php';
require_once 'model/ValidationException.php';


class ContactsService {
    
    private $contactsGateway = NULL;
    
    private function openDb() {
        if (!mysql_connect("localhost", "root", "")) {
            throw new Exception("Connection to the database server failed!");
        }
        if (!mysql_select_db("contacts")) {
            throw new Exception("No contacts database found on database server.");
        }
    }
    
    private function closeDb() {
        mysql_close();
    }
  
    public function __construct() {
        $this->contactsGateway = new ContactsGateway();
    }
    
    public function getAllContacts($order) {
        try {
            $this->openDb();
            $res = $this->contactsGateway->selectAll($order);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    
    
    private function validateContactParams($services, $type, $titler, $first_name, $last_name, $organisationer) {
        $errors = array();
        if ( !isset($services) || empty($services) ) {
            $errors[] = 'Service is required';
        }
        if ( empty($errors) ) {
            return;
        }
        throw new ValidationException($errors);
    }
    
    public function createNewContact($services, $type, $titler, $first_name, $last_name, $organisationer) {
        try {
            $this->openDb();
            $this->validateContactParams($services, $type, $titler, $first_name, $last_name, $organisationer);
            $res = $this->contactsGateway->insert($services, $type, $titler, $first_name, $last_name, $organisationer);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
  
    
    
}

?>
