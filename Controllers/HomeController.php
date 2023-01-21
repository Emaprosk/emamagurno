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

        public function sendMail($name, $email, $textarea){
            echo $name;
            echo $email;
            echo $textarea;
        }

        /*
            $header = 'From: ' . $email . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0  \r\n";
            $header .= "Content-Type: text/plain";

            $message = "Este mensaje fue enviado por: ".$name." \r\n";
            $message .= "Su e-mail: ". $email . " \r\n";
            $message .= "Mensaje: ". $textarea . " \r\n";
            $message .= "Enviado el: ". date("d/m/Y", time());


            mail("papamagu-@hotmail.com","Web Port Folio",utf8_decode($message),$header);

            header("location:".FRONT_ROOT."Home/Index");
        */
    }
?>