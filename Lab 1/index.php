<?php 
session_start();
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$hasError=false;

$users = array ("Shaker"=>2222,"Shakes"=>2468,"abu"=>3333,"Tuhin"=>454545,"Shak"=>246);

if($_SERVER["REQUEST_METHOD"]== "POST"){
    
    if (empty($_POST["uname"])) {
        $err_uname= "Username Required";
        $hasError = true;
    }
    else{
        $uname=$_POST["uname"];
    }
    if (empty($_POST["pass"])){
        $err_pass = " Password required ";
        $hasError = true ;
    }
    else {
        $pass = $_POST["pass"];
    }
    if (!$hasError) {
        foreach ($users as $u => $p ) {
            if ($uname == $u && $pass==$p){
            $_SESSION ["loggeduser"] =$uname;
            setcookie ("loggeduser",$uname,time ()+120);
    
            header ("Location:dashboard.php");
            
            }
        }
        echo "Invalid user";
    }
}
?>  

<html>

<body>
    <form action="" method="post">
        <h4>UserName:</h4>
        <input type="text" name="uname" value="<?php echo $uname;?>" >
        <span><?php echo $err_uname ?></span>
        <h4>Password:</h4>
<input type="password" name="pass"value="<?php echo $pass;?>"> 
<span> <?php echo $err_pass;?></span><br>
<input type ="submit" value ="Login">
    </form>

</body>
</html>
