<?php include("connection.php");?>
<?php include("mech_connection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Breakdown Assistance</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <img  class="img" src="image/img.jpg" alt="">
    <header class="header">
        <h1>VEHICLE</h1>
        <h1>BREAKDOWN</h1>
        <h1>ASSISTANCE</h1>
        
    </header>
    <P class="p">Feel Free To Register To Find Mechanic</P>
    
    <div class="background" >
       
        <div class="container">
        <form action="mech_display.php" method="POST">
            <div class="registration-form" >
                
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea id="address" name="address" rows="3" required></textarea>


                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the terms and conditions</label>
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" value="Register" class="btn" name="register">
                        
                    </div>
                
            </div>
            <div class="images">
             
            
            </div>
        </form>
        </div>

    </div>


    <header class="Middle">

    <h1>Join Our Mechanic Network:</h1>
    <h1>Registration Made Simple</h1>
        
    </header>
    



    <div class="background1">
        <img class="fat" src="image/fat.png" alt="mechanic image">
    <div class="container1">
        <div class="registration-form1" >
            <h2>Mechanic Registration</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name1" required>
                </div>
                <div class="form-group1">
                    <label for="contact">Contact:</label>
                    <input type="text" id="contact" name="contact1" required>
                </div>
                <div class="form-group1">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address1" required></textarea>
                </div>
                <div class="form-group">
                    <label for="mechanic-type">Type of Mechanic:</label>
                    <select id="mechanic-type" name="mechanic-type1" required>
                        <option value="" disabled selected>Select type</option>
                        <option value="tyre">Tyre/Puncture Mechanic</option>
                        <option value="engine">Engine Mechanic</option>
                        <option value="towing">Towing Car Helper</option>
                    </select>
                </div>
                <div class="form-group">
                <input type="submit" value="Register" class="btn" name="register1">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>




<?php 
 error_reporting(0);
    if($_POST['register'])
    {
        $name      = $_POST['name'];
        $password  = $_POST['password'];
        $gender    = $_POST['gender'];
        $email     = $_POST['email'];
        $phone     = $_POST['phone'];
        $address   = $_POST['address'];

        $ananta="INSERT INTO form values('$name','$password','$gender','$email','$phone','$address')";

        $data = mysqli_query($conn,$ananta);

        if($data)
        {
            // echo "data inserted";
        }
        else
        {
            echo "data  not inserted";
        }
    }


?>

<?php 
    error_reporting(0);
    if($_POST['register1'])
    {
        $name1      = $_POST['name1'];
        $phone1    = $_POST['contact1'];
        $address1   = $_POST['address1'];
        $Mechanic1 =$_POST['mechanic-type1'];

        $cost="INSERT INTO mech values('$name1','$phone1','$address1','$Mechanic1')";

        $less = mysqli_query($mconn,$cost);

        if($less)
        {
            //̥echo "data inserted";
        }
        else
        {
            echo "data  not inserted";
        }
    }


?>