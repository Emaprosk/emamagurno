<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."index.php");
        }

        public function Home($message = "")
        {
            require_once(VIEWS_PATH."home.php");
            
            require_once(VIEWS_PATH."beer-list.php");
        }
        
        public function Add($message = "")
        {
            require_once(VIEWS_PATH."beer-add.php");
        } 

        public function Logout()
        {
            require_once(VIEWS_PATH."logout.php");
        } 
        
        public function List($message = "")
        {
            require_once(VIEWS_PATH."beer-list.php");
        }  
    }
?>