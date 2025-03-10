<?php
        session_start();
       
        require_once 'Database.php';
       
        if(ISSET($_POST['login'])){
                if($_POST['email'] != "" || $_POST['password'] != ""){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $sql = "SELECT * FROM `login` WHERE `email`=? AND `password`=? ";
                        $query = $conn->prepare($sql);
                        $query->execute(array($email,$password));
                        $row = $query->rowCount();
                        $fetch = $query->fetch();
                        if($row > 0) {
                                $_SESSION['user'] = $fetch['id'];
                                header("location: home.php");
                        } else{
                                echo "
                                <script>alert('Invalid username or password')</script>
                                <script>window.location = 'index.php'</script>
                                ";
                        }
                }else{
                        echo "
                                <script>alert('Please complete the required field!')</script>
                                <script>window.location = 'index.php'</script>
                        ";
                }
        }
?>