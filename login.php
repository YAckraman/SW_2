<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/login.css">
        <title>Login</title>
        
    </head>
    <body>
        <section id="login" class="my-5">
            <h1 class="text-center py-4" >Log In</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" class="form">
                <input class=" form-control mb-4" style="background-color:#e8edf3 "  id="uname" type="text" name="uname"          placeholder="Username ">
                
                
                    <input  class=" form-control mb-4" style="background-color:#e8edf3 " id="password"  type="password" name="upassword" placeholder="Password ">
                           
                    <button type="submit" name="islogin" class="btn btn-block">Login</button>
                 <a href="#"style="text-decoration: none; color:#555;"><p class="text-center py-4" >نسيت كلمة المرور؟</p></a>
            </form>
            <div class="text-center pt-4 ">
                                <span class="circles"> OR </span>
                                <div class="icon-sign pt-5">
                                   <a class="btn btn-block mt-4 p-2 show " style="color:#555; border: 2px solid #555;">Google</a>
                            
                               </div>
                 </div>
                                        <p class="text-center py-4 ">ليس لديك حساب؟ <a href="#" title="إنشاء حساب جديد" style="text-decoration: 
                                        none;color:#2c69b0">Create New Account</a></p>
                        
                        
                        <?php
                        
                                if( isset($_POST['islogin']))
                        
                                {
                                    
                                    $username = $_POST['uname'];
                                    $userpassword = $_POST['upassword'];
                                    
                                    $q ="select * from user where uname='$username' and password='$userpassword'";
                                    $con=mysqli_connect('localhost','root','','sw_2');
                                   $result= mysqli_querry($con, $q );
                                    if(mysqli_num_rows($result)>0)
                                    {
                                        
                                    
                                        header('Location:Home.php');
                                    }
                                    else
                                    {
                                         header('Location:login.php');
                                    }
                                }
                        ?>
        
        
        
        </section>
        
                       <script src="js/login.js"></script>

        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    </body>



</html>