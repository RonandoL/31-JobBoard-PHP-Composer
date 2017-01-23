<?php
  class Contact
  {
    private $name;
    private $phone;
    private $email;

    function __construct($contact_name, $contact_phone, $contact_email)
    {
        $this->name = $contact_name;
        $this->phone = $contact_phone;
        $this->email = $contact_email;
    }

    function getName()
    {
        return $this->name;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function getEmail()
    {
        return $this->email;
    }


  }
?>
