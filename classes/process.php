<?php
require_once('db.php');
class process{
    public function redirect($url){
        echo $url!=''?"<script>window.location.href='$url';</script>":'';
    }
    public function sanitize($str) {
        $str = strip_tags($str);
        $str = htmlentities($str);
        $str = stripslashes($str);
        return $str;
    }
    public function hashStr($str){
        $s1 = '2f2#A-';
        $s2 = '-[az?M/';
        return hash('ripemd128', $s1.$str.$s2);
    }
    public function verifyLoggedIn(){
        if(isset($_SESSION['user'])&&($_SESSION['device_id']==$_SERVER['HTTP_USER_AGENT'])){
            $user = $_SESSION['user'];
            return array(TRUE, $user);
        }
        else return array(FALSE,NULL);
    }
    public function login($u,$id){
        $_SESSION['device_id'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['user']=$u;
        $_SESSION['user_id']=$id;
    }
    public function validateSame($test,$real){
        return $test == $real? true:false;
    }
    public function destroySession(){
        $_SESSION = array();
        if(session_id()!=""||isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-2592000,'/');
            unset($_SESSION['user']);
        }
        session_destroy();
    }
}
?>