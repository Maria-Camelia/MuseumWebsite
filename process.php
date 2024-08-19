<?php
    if(isset($_POST["btn-save"]))
    {
        if(empty($_POST["Name"]) || empty($_POST["Phone_number"]) || empty($_POST["Email"]) || empty($_POST["Password"])){
            echo "Te rog să completezi toate câmpurile."; 
        }else{
            require_once("UserClass.php");
            $newUser = new UserClass($_POST["Email"], $_POST["Password"], $_POST["Name"], $_POST["Phone_number"]);
            
            $result = $newUser->save();
            if($result){
                echo '<script>alert( "Înregistrarea ta a fost salvată în baza de date."); window.location="register.php";</script>'; 
                exit(); 
            }
            else{
                echo 'Te rog să verifici interogarea.'; 
            }

        }
    }

?>

