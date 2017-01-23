<?php
    class JobOpening
    {
        private $title;
        private $description;

        function __construct($job_title, $job_description)
        {
          $this->title = $job_title;
          $this->description = $job_description;
        }

        function getTitle()
        {
            return $this->title;
        }

        function getDescription()
        {
            return $this->description;
        }


    }
?>
