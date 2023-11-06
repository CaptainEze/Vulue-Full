<?php
require_once('process.php');
$sup = new process;
class User
{
    public function checkIfEmailIsRegistered($em)
    {
        global $liveDb;
        $res = $liveDb->execQuery("SELECT * FROM users WHERE email = '$em'");
        if ($res->num_rows) return true;
        else return false;
    }

    public function register($em, $pass, $typ)
    {
        global $liveDb;
        $liveDb->execQuery("INSERT INTO users(email,pass,acc_typ) VALUES('$em','$pass','$typ')");
        // $liveDb->execQuery("INSERT INTO wallet(email,f_name,l_name,password,active) VALUES('$em','$fname','$lname','$pass','no')");
    }
    public function getUserByEmail($em)
    {
        global $liveDb;
        $res = $liveDb->execQuery("SELECT * FROM users WHERE email = '$em'");
        $res->data_seek(1);
        return $res->fetch_array(MYSQLI_ASSOC);
    }
    public function loginUser($em, $pass)
    {
        global $liveDb;
        global $sup;
        $res = $liveDb->execQuery("SELECT email, pass, c_id FROM users WHERE email = '$em'");
        if ($res->num_rows == 0) {
            return array(0, 'Email not found', 'email');
        } else {
            $arr = $res->fetch_array(MYSQLI_ASSOC);
            if ($sup->validateSame($pass, $arr['pass'])) {

                $sup->login($arr['email'], $arr['c_id']);
                return array(1, 'login success', 'details');
            } else {
                return array(0, 'invalid password', 'password');
            }
        }
    }

    public function registerAdmin($em, $pass)
    {
        global $liveDb;
        $liveDb->execQuery("INSERT INTO admin(email,password) VALUES('$em','$pass')");
    }

    public function loginAdmin($em, $pass)
    {
        global $liveDb;
        global $sup;
        $res = $liveDb->execQuery("SELECT email,password,id FROM admin WHERE email = '$em'");
        if ($res->num_rows == 0) {
            return array(0, 'Email not found', 'email');
        } else {
            $arr = $res->fetch_array(MYSQLI_ASSOC);
            if ($sup->validateSame($pass, $arr['password'])) {
                $sup->login($arr['email'], $arr['id']);
                return array(1, 'login success');
            } else {
                return array(0, 'invalid Details');
            }
        }
    }
}

class UserFull extends User
{
    public function __construct($uId)
    {
        $res = $this->que("SELECT * FROM users WHERE c_id = '$uId'");
        $res->data_seek(1);
        $data = $res->fetch_array(MYSQLI_ASSOC);
        $this->id = $uId;
        $this->email = $data['email'];
        $this->eVerified = $data['e_verif'];


        error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);

        error_reporting(E_ALL);
    }

    private function que($str)
    {
        global $liveDb;
        return $liveDb->execQuery($str);
    }
    public function updateDetails($arr)
    {
        foreach ($arr as $key => $value) {
            switch ($key) {
                case 'email':
                    $this->setEmail($value);
                    break;
                case 'phone':
                    $this->setPhone($value);
                    break;
                case 'password':
                    $this->setPassword($value);
                    break;
                case 'fname':
                    $this->setFName($value);
                    break;
                case 'lname':
                    $this->setLName($value);
                    break;
                case 'wallet':
                    $this->setWallet($value);
                    break;
            }
        }
    }




    // -------------------- no use section for now --------------------
    // private function setEmail($d){
    //     $this->que("UPDATE users SET email = '$d' WHERE id = '$this->id'");
    //     $this->email = $d;
    // }
    // private function setPhone($d){
    //     $this->que("UPDATE users SET phone = '$d' WHERE id = '$this->id'");
    //     $this->phone = $d;
    // }
    // private function setPassword($d){
    //     $this->que("UPDATE users SET password = '$d' WHERE id = '$this->id'");
    // }
    // private function setFName($d){
    //     $this->que("UPDATE users SET f_name = '$d' WHERE id = '$this->id'");
    //     $this->fname = $d;
    // }
    // private function setLName($d){
    //     $this->que("UPDATE users SET l_name = '$d' WHERE id = '$this->id'");
    //     $this->lname = $d;
    // }
    // public function setActiveStatus(){
    //     $this->que("UPDATE users SET active = 'yes' WHERE id = '$this->id'");
    //     if ($this->que("SELECT * FROM wallet WHERE id = '$this->id'")->num_rows < 1) {
    //         $this->que("INSERT INTO wallet(id) VALUES($this->id)");
    //     }
    //     $this->active = 'yes';
    // }
    // public function setDeactiveStatus(){
    //     $this->que("UPDATE users SET active = 'no' WHERE id = '$this->id'");
    //     $this->active = 'no';
    // }
    // -------------------- till here --------------------



    public function verifyEmail($_clId)
    {
        $this->que("UPDATE users SET e_verif = 1, cl_id = $_clId WHERE c_id = '$this->id'");
    }
    // -------------------- no use section for now --------------------

    // private function setWallet($d){
    //     $this->que("UPDATE users SET wallet = '$d' WHERE id = '$this->id'");
    //     $this->wallet = $d;
    // }

    // public function transferFunds($from,$to,$amt){
    //     $est = 'w_'.$from;
    //     $sst = 'w_'.$to;
    //     $newFrm= $this->$est - $amt;
    //     $newTo= $this->$sst + $amt;
    //     if($newFrm < 0){
    //         return array($this->w_regular, 'Insuficient balance to perform operation');
    //     }
    //     $this->que("BEGIN");
    //     $this->que("UPDATE wallet SET $from = $newFrm WHERE id = '$this->id'");
    //     $this->que("UPDATE wallet SET $to = $newTo WHERE id = '$this->id'");
    //     $this->que("COMMIT");
    //     return array(true, "Transfer of $amt from $from wallet to $to wallet is successful");
    // }

    // public function fetchHistory (){
    //     return $this->que("SELECT description,stat,amt,typ FROM history WHERE c_id=$this->id");
    // }
    // public function pushHistory($dec,$st,$amt,$typ){
    //     global $sup;
    //     $dec = $sup->sanitize($dec);
    //     $st = $sup->sanitize($st);
    //     $amt = $sup->sanitize($amt);
    //     $typ = $sup->sanitize($typ);
    //     $this->que("INSERT INTO history(description,stat,amt,c_id,typ) VALUES('$dec','$st','$amt','$this->id','$typ')");
    // }
    // public function fetchMessages(){
    //     return $this->que("SELECT * FROM notifics WHERE c_id=$this->id");
    // }
    // public function pushMessage($mes){
    //     $this->que("INSERT INTO notifics(mes, c_id) VALUES('$mes', '$this->id')");
    // }
    // // public function pushTransaction()

    // public function credit($amt,$des,$pending =false){
    //     $newAmt = $this->w_regular + intVal($amt);
    //     $this->que("BEGIN");
    //     $this->que("UPDATE wallet SET regular = $newAmt where id = '$this->id'");
    //     if(!$pending){
    //         $this->pushHistory($des,'success',$amt,'credit');
    //     }
    //     $this->que("COMMIT");
    // }
    // public function debit($amt,$des,$pending = false){
    //     if($this->w_regular < $amt){
    //         return array(false, 'Insufficient user Balance');
    //     }
    //     $newAmt = $this->w_regular - intVal($amt);
    //     $this->que("BEGIN");
    //     $this->que("UPDATE wallet SET regular = $newAmt where id = '$this->id'");
    //     if(!$pending){
    //         $this->pushHistory($des,'success',$amt,'debit');
    //     }
    //     $this->que("COMMIT");
    //     return array(true, 'Success');
    // }
    // public function pingWithdrawal($des,$amt){
    //     $this->que("INSERT INTO history(description, stat, amt, c_id, typ) VALUES('$des','pending','$amt','$this->id','debit')"); 
    // }
    // public function createTax(){
    //     $this->que("UPDATE users SET tax_inf = 'yes' WHERE id = '$this->id' ");
    // }
    // public function remTax(){
    //     $this->que("UPDATE users SET tax_inf = 'no' WHERE id = '$this->id' ");
    // }

    // -------------------- till here --------------------
}


class UserAdmin extends User
{
    public function __construct($uId)
    {
        $res = $this->que("SELECT email FROM admin WHERE id = '$uId'");
        $res->data_seek(1);
        $data = $res->fetch_array(MYSQLI_ASSOC);
        $this->id = $uId;
        $this->name = $data['email'];
    }

    private function que($str)
    {
        global $liveDb;
        return $liveDb->execQuery($str);
    }
    public function getUsers()
    {
        return $this->que("SELECT * FROM users");
    }
    public function getActivatedUsers()
    {
        return array($this->que("SELECT * FROM users WHERE active = 'yes'"), $this->que("SELECT * FROM wallet"));
    }
    public function verifyUser($id)
    {
        $user = new UserFull($id);
        $user->setActiveStatus();
    }
    public function deVerifyUser($id)
    {
        $user = new UserFull($id);
        $user->setDeactiveStatus();
    }
    public function creditUser($id, $des, $amt)
    {
        $user = new UserFull($id);
        $user->credit($amt, $des);
    }
    public function debitUser($id, $des, $amt)
    {
        $user = new UserFull($id);
        $_exe = $user->debit($amt, $des);
        if ($_exe[0]) {
            return array('status' => 1, 'message' => "User debited successfully");
        } else {
            return array('status' => 0, 'message' => $_exe[1]);
        }
    }
    public function sendMessage($c_id, $mes)
    {
        $user = new UserFull($c_id);
        $user->pushMessage($mes);
    }
    public function getTransactions()
    {
        return $this->que("SELECT * FROM history");
    }
    private function fetchTransaction($tranId)
    {
        return $this->que("SELECT * FROM history WHERE tran_id = '$tranId'");
    }
    public function approveTransaction($tranId)
    {
        $_transct = $this->fetchTransaction($tranId);
        $_transct->data_seek(1);
        $transct = $_transct->fetch_array(MYSQLI_ASSOC);
        if ($transct['stat'] == 'pending') {
            $user = new UserFull($transct['c_id']);
            switch ($transct['typ']) {
                case 'credit':
                    $user->credit($transct['amt'], $transct['description'], true);
                    $user->createTax();
                    break;
                case 'debit':
                    $_exe = $user->debit($transct['amt'], $transct['description'], true);
                    if (!$_exe[0]) {
                        $this->que("UPDATE history SET stat = 'failed' WHERE tran_id = '$tranId'");
                        return array('status' => 0, 'message' => $_exe[1]);
                    }
                    $user->createTax();
                    break;
                default:
                    return array('status' => 0, 'message' => 'Invalid Transaction method');
                    break;
            }
            $this->que("UPDATE history SET stat = 'success' WHERE tran_id = '$tranId'");
            return array('status' => 1, 'message' => 'Transaction approval success');
        } else {
            return array('status' => 0, 'message' => 'Transaction is already executed');
        }
    }

    public function declineTransaction($tranId)
    {
        $_transct = $this->fetchTransaction($tranId);
        $_transct->data_seek(1);
        $transct = $_transct->fetch_array(MYSQLI_ASSOC);
        if ($transct['stat'] == 'pending') {
            $this->que("UPDATE history SET stat = 'failed' WHERE tran_id = '$tranId'");
            return array('status' => 1, 'message' => 'Transaction decline success');
        } else {
            return array('status' => 0, 'message' => 'Transaction is already executed');
        }
    }
}
