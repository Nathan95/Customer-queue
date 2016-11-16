<?php

require_once 'model/ContactsService.php';

class ContactsController {
    
    private $contactsService = NULL;
    
    public function __construct() {
        $this->contactsService = new ContactsService();
    }
    
    public function redirect($location) {
        header('Location: '.$location);
    }
    
    public function handleRequest() {
        $op = isset($_GET['op'])?$_GET['op']:NULL;
        try {
            if ( !$op || $op == 'list' ) {
                $this->listContacts();
            } elseif ( $op == 'new' ) {
                $this->saveContact();
            } else{
                $this->showError("Page not found", "Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
    }
    
    public function listContacts() {
        $orderby = isset($_GET['orderby'])?$_GET['orderby']:NULL;
        $contacts = $this->contactsService->getAllContacts($orderby);
        include 'view/contacts.php';
    }
    
    public function saveContact() {
       
        $title = 'Add new contact';
        
        $services = '';
        $type = '';
        $titler = '';
        $first_name = '';
        $last_name = '';
        $organisationer = '';
       
        $errors = array();
        
        if ( isset($_POST['form-submitted']) ) {
            
            $services  = isset($_POST['services']) ?   $_POST['services']  :NULL;
            $type      = isset($_POST['type'])?   $_POST['type'] :NULL;
            $titler      = isset($_POST['titler'])?   $_POST['titler'] :NULL;
            $first_name    = isset($_POST['first_name'])? $_POST['first_name']:NULL;
            $last_name    = isset($_POST['last_name'])? $_POST['last_name']:NULL;
            $organisationer    = isset($_POST['organisationer'])? $_POST['organisationer']:NULL;
            
            try {
                $this->contactsService->createNewContact($services, $type, $titler, $first_name, $last_name, $organisationer);
                $this->redirect('index.php');
                return;
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
        }
        
        include 'view/contact-form.php';
    }
    
       public function showError($title, $message) {
        include 'view/error.php';
    }
    
    
}
?>
