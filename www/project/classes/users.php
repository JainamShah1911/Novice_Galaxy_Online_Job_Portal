<?php
class Users {
    function __construct(){
        $db = new DB();
    }

    public function read($st){
        $query = mysql_query($st);
        while ($row = mysql_fetch_array($query)){
            $data[] = $row;
        }
        return $data;
    }
	 public function insert($st)
	 {
        $query = mysql_query($st);
         
       
      
	    return $query;
    }
	 public function readdata($st){
        $query = mysql_query($st);
		return $query;
}
}
?>