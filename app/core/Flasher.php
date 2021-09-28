<?php 

class Flasher {

    public static function setFlash($message, $action, $type){
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash(){
        if (isset($_SESSION['flash'])){
            $msg = $_SESSION['flash']['message'];
            $action = $_SESSION['flash']['action'];
            $type = $_SESSION['flash']['type'];

            // TODO: Change flasher
            echo '<script> alert("' . $msg .'"); </script>';

            unset($_SESSION['flash']);
        }
    }

}