<?php
    namespace Controllers;
    use DAO\UserDAO as UserDAO;
    use Models\User as User;

    class UserController{
    private $UserDAO;

    public function __construct(){
        $this->UserDAO = new UserDAO();
    }
    // cambiar esta parte cuando tengamos resuelto
    public function Login($email, $password){
        if($email == "ema" && $password =="123"){   
            header("location:".FRONT_ROOT."Home/Home");
        }else{
            header("location:" . FRONT_ROOT . "Home/Index");
        }
    }

    public function ShowAddView(){
        require_once(VIEWS_PATH."User-add.php");
    }
    public function Add($recordId, $firstName, $lastName)
    {
        $User = new User();
        $User->setRecordId($recordId);
        $User->setFirstNAme($firstName);
        $User->setLastName($firstName);

        $this->UserDAO->Add($User);

        $this->ShowAddView();
    }
}
?>