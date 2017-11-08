<?php
class UserController{
    public function IndexAction(){
        require './application/home/view/user_index.php';
    }

    public function AjaxLoginAction(){
        $ajax = new UserModel('user');
        if($post = $ajax -> find_i($_POST)){

        }
    }

    public function RegisterAction(){
        $ajax = new UserModel('user');

    }
}
?>