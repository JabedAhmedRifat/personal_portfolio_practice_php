<?php



if(isset($_POST["send"]))
{
    
    $name =$_POST["Name"];
    

    $email =$_POST["email"];
    
    $messege =$_POST["messege"];

if($name != "" && $email != "" && $messege != ""){

             echo $name;
             echo $email;
             echo $messege;
   
            $conn = mysqli_connect('localhost','root','','contact');
            $sql="INSERT INTO contact_me (name, email, messege) VALUES ('$name','$email','$messege')";
            $result = mysqli_query($conn, $sql);

            if(isset($result))
            {
                header("location: contact.html");
            }

            
        }
}

?>

