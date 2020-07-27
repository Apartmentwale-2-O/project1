<?php 

 if ($_GET['action'] == "signup") {
        
        $error = "";
        if (!$_POST['username']) {
            
            $error = "A username  is required.";
            
        } else if (!$_POST['email']) {
            
            $error = "An email address is required.";
            
        } else if (!$_POST['password']) {
            
            $error = "A password is required";
            
        } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
  
            $error = "Please enter a valid email address.";
            
    }
}

if($_GET['action'] == "login")
{
    
    $error = "";
        if (!$_POST['emailusername']) {
            
            $error = "A Emai/Username  is required.";
            
        } else if (!$_POST['loginpassword']) {
            
            $error = "A password is required";
            
        }
    
}

        if ($error != "") {
            
            echo $error;
            exit();
            
        }

 $link = mysqli_connect("localhost","id13533918_mayur",
            "mayur2414@&M","id13533918_apatmentwale");

    if (mysqli_connect_errno()) 
    {
        
        print_r(mysqli_connect_error());
        exit();
        
    }
    else{
        echo "datbase connected";
    }


if ($_POST['signupActive'] == "1")
{

        
        $username = mysqli_real_escape_string($link,$_POST['username']);
        $email = mysqli_real_escape_string($link,$_POST['email']);
        $password = mysqli_real_escape_string($link,$_POST['password']);
        $query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($link, $query);
        $query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result1 = mysqli_query($link, $query);
        echo mysqli_error($link);
        if (mysqli_num_rows($result) > 0)
        {
            echo "That email address is already taken.";
        }
        else if(mysqli_num_rows($result1) > 0)
        {
            echo "That Username is already taken";
        }
        else
        {
          $query = "INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";
          if (mysqli_query($link, $query)) {
                    
                    $_SESSION['id'] = mysqli_insert_id($link);
                    
                    $query = "UPDATE user SET password = '". md5(md5($_SESSION['id']).$_POST['password']) ."' WHERE id = ".$_SESSION['id']." LIMIT 1";
                    mysqli_query($link, $query);
                    
                    echo "sign up successfull";
                    
                } else {
                    
                    $error = "Couldn't create user - please try again later";
                    
                }
        }
        
    
}
else {
           
            
            $emailusername = mysqli_real_escape_string($link,$_POST['emailusername']);
            
            $loginpassword = mysqli_real_escape_string($link,$_POST['loginpassword']);
            
            $query = "SELECT * FROM user WHERE email = '$emailusername' OR username = '$emailusername' " ;
            
            $result = mysqli_query($link, $query);
            
            
            $row = mysqli_fetch_assoc($result);
                
                if ($row['password'] == md5(md5($row['id']).$_POST['loginpassword'])) {
                    
                   echo "login successfull";
                    
                    $_SESSION['id'] = $row['id'];
                    
                } else {
                    
                   echo  "Could not find that username/password combination. Please try again.";
                    
                }

            
        }





?>