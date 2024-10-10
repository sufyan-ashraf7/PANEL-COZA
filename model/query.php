<?php
include("panel/php/connection.php");
if(isset($_POST['register'])){
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $hshPassword = sha1($password);
    $number = $_POST['unumber'];
    // checkEmail 
    $checkEmail= $pdo->prepare("select * from users where userEmail = :pe");
    $checkEmail ->bindParam("pe",$email);
    $checkEmail->execute();
    $mailTest = $checkEmail->fetch(PDO::FETCH_ASSOC);
    if(!empty($mailTest['userEmail'])){
echo "<script>alert('email already exist')</script>";
    }else{

    
    $query = $pdo->prepare("INSERT INTO `users`(`userName`, `userEmail`, `userPassword`, `userNumber`) VALUES(:un,:ue,:up,:unum)");
    $query->bindParam("un",$name);
    $query->bindParam("ue",$email);
    $query->bindParam("up",$hshPassword);
    $query->bindParam("unum",$number);
$query->execute();
echo "<script>alert('submitted');
location.assign('login.php');
</script>";
    };
};

// login 

if (isset ($_POST['login'])){
    $email =$_POST['uemail'];
    $password =$_POST['upassword'];
    $shahpassword = sha1 ($password);
    $query = $pdo-> prepare ("select * from users where userEmail  = :pe && userPassword =:pp");
    $query-> bindParam ("pe",$email);
    $query-> bindParam ("pp",$shahpassword);
    $query->execute();
    $result =$query->fetch(PDO::FETCH_ASSOC);
    if ($result){
        $_SESSION['userId']=$result['userId'];
        $_SESSION['userName']=$result['userName'];
        $_SESSION['userEmail']=$result['userEmail'];
        $_SESSION['userPassword']=$result['userPassword'];
        $_SESSION['userRole']=$result['userRole'];

        echo "<script>alert  ('login in successfully');</script>";
        if ($_SESSION['userRole']== "admin"){
            echo "<script> location.assign ('panel/index.php')</script> ";

        }
        else {
            echo "<script> location.assign('profile.php') </script>";

        }
    }
        else {
            echo "<script> alert ('data does not exist')</script>;";
       

    }

}
?>