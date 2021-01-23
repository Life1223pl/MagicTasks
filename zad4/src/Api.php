<?php


namespace App;

use App\Connect;
use PDO;

class Api{
    function SetStatus($status,$user_email){
        $db = new Connect();
        $data = $db->prepare('UPDATE user SET status = :status WHERE email = :user_email');
        $data->execute([':user_email' => $user_email,':status' => $status]);
        echo 'Status for user '.$user_email." changed to ".$status;
    }
    function SelectPointsSaldo($email){
        $db = new Connect();
        $data = $db->prepare('Select * from user where email = :email');
        $data->execute(['email' => $email]);
        $outPutData = $data->fetch();
        echo "Actual points for user: ".$email." = ".$outPutData['points'];
    }

    function ChangePoints($points,$user_email){
        $db = new Connect();
        $data = $db->prepare('UPDATE user SET points = :points WHERE email = :user_email');
        $data->execute([':user_email' => $user_email,':points' => $points]);
        echo 'Saldo Changed';

    }
    function CreateUser($email,$description,$points,$status){
        $db = new Connect();
        $data = $db->prepare('Insert INTO user values(null,:email,:description,:points,:status);');
        $data->execute([':email' => $email, ':description' => $description, ':points' => $points, ':status' => $status]);
        echo 'User Added';
    }
    function SelectAll(){
        $db = new Connect();
        $users = array();
        $data = $db->prepare('Select * from user order by id');
        $data->execute();
        while ($outPutData = $data->fetch(PDO::FETCH_ASSOC)){
            $users[$outPutData['Id']] = array(
                'id' => $outPutData['Id'],
                'email' => $outPutData['email'],
                'description' => $outPutData['description'],
                'points' => $outPutData['points'],
                'status' => $outPutData['status']);
        }
        return json_encode($users);
    }

}