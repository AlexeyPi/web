<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of People
 *
 * @author User
 */
class People {
    /**
     *
     * @var mysql
     */
    
    private $db;
  
    public function __construct() {
	$this->db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if($this->db->connect_errno!=0){
	    die($this->db->connect_error);
	}
    }
    public function all() {
	$query="SELECT * FROM people;";
	$result= $this->db->query($query);
	if(!$result){
	    die($this->db->error);
	}
	$people=$result->fetch_all(MYSQLI_ASSOC);

	return $people;
    }
	public function add($first, $second,$email) {
	    $query="INSERT INTO people(first, second, email) values ('".$first."','".$second."','".$email."')";
	    if(!$this->db->query($query)){
		die($this->db->error);
	    }
	    Router::redirect();
	
    }
        public function delete($id) {
            
	    $query="DELETE FROM people WHERE id='".$id."'" ;
	      
	    if(!$this->db->query($query)){
		die($this->db->error);
	    }
	    Router::redirect();
	
    }
        public function edit($id,$first,$second,$email) {
            $query="UPDATE people SET first='".$first."', second='".$second."', email='".$email."' WHERE people.id='".$id."'";

            if(!$this->db->query($query)){
                die($this->db->error);
            }
            Router::redirect();
    }
}
