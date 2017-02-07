<?php

abstract   class model {
      private $guid;  
      public function __construct($guid=NULL) {
        //starts the session
       if(isset($guid)){}
        //creates a unique ID to identify the record
	    $this->guid = uniqid();
      }
      public function save() {
        //saves the model into the session and sets the unique ID as the key, so it is easy to retrieve later.
        $_SESSION[$this->guid] = (array) $this;
	  }
    //  remove model from session
    public function delete() {
      unset($_SESSION[$this->guid]);
    }

    public function getid() {
      return $this->guid;

    }
        }
    ?>