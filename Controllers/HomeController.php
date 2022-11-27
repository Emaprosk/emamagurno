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
        }  

        public function Logout()
        {
            require_once(VIEWS_PATH."logout.php");
        }
    }
?>