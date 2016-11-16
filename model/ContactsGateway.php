<?php


class ContactsGateway {
    
    public function selectAll($order) {
        if ( !isset($order) ) {
            $order = "services";
        }
     
        $dbres = mysql_query("SELECT * FROM contacts ORDER BY id ASC");
        
        $contacts = array();
        while ( ($obj = mysql_fetch_object($dbres)) != NULL ) {
            $contacts[] = $obj;
        }
        
        return $contacts;
    }
    
    public function selectById($id) {
        $dbId = mysql_real_escape_string($id);
        
        $dbres = mysql_query("SELECT * FROM contacts WHERE id=$dbId");
        
        return mysql_fetch_object($dbres);
		
    }
    
    public function insert( $services, $type, $titler, $first_name, $last_name, $organisationer) {
        
        $dbServices = ($services != NULL)?"'".mysql_real_escape_string($services)."'":'NULL';
        $dbType = ($type != NULL)?"'".mysql_real_escape_string($type)."'":'NULL';
        $dbTitle = ($titler != NULL)?"'".mysql_real_escape_string($titler)."'":'NULL';
        $dbfirstname = ($first_name != NULL)?"'".mysql_real_escape_string($first_name)."'":'NULL';
        $dblastname = ($last_name != NULL)?"'".mysql_real_escape_string($last_name)."'":'NULL';
         $dbOrganisation = ($organisationer != NULL)?"'".mysql_real_escape_string($organisationer)."'":'NULL';

        //$dbDate = date_create()->format('Y-m-d H:i:s');
        
        mysql_query("INSERT INTO contacts (services, type, title, first_name, last_name, organisation, queued_at) VALUES ($dbServices, $dbType, $dbTitle, $dbfirstname, $dblastname, $dbOrganisation, NOW())");
        return mysql_insert_id();
    }
    
    public function delete($id) {
        $dbId = mysql_real_escape_string($id);
        mysql_query("DELETE FROM contacts WHERE id=$dbId");
    }
    
}

?>
