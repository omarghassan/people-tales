<?php
        session_start();
        require_once 'Database.php';
 
        if(ISSET($_POST['register'])){
                if($_POST['firstname'] != ""  || $_POST['lastname'] != "" || $_POST['email'] != "" || $_POST['password'] != ""){
                        try{
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $username = $_POST['username'];
                                $email = $_POST['email'];
                                // md5 encrypted
                                // $password = md5($_POST['password']);
                                $password = $_POST['password'];
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO `login` VALUES ('', '$firstname',  
                                '$lastname',
                                '$username','$email', '$password')";
                                $conn->exec($sql);
                        }catch(PDOException $e){
                                echo $e->getMessage();
                        }
                        $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
                        $conn = null;
                        header('location:index.php');
                }else{
                        echo "
                                <script>alert('Please fill up the required field!')</script>
                                <script>window.location = 'registration.php'</script>
                        ";
                }
        }
?>