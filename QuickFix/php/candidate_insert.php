<html>
<head></head>
<body>


<?php 
//use PHPMailer\PHPMailer\PHPMailer;




	require 'PHPMailerAutoload.php';
	require 'credential.php';


$name = $_POST['firstNameInput']." ".$_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$location = $_POST['location'];
$mob = $_POST['mob_num'];
$resume = $_POST['upload'];
$con=mysqli_connect("localhost:3306","root","","reclutare_db");




				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789';
				$token = str_shuffle($token);
				$token = substr($token, 0, 6);


				$query="INSERT INTO candidate_reg (cand_name, cand_email, cand_pswd, cand_gender, cand_dob, cand_location, cand_mob_number, cand_resume,Is_verified,token,Is_complete)
				VALUES ('$name', '$email', '$password', '$gender', '$dob', '$location', $mob, '$resume', 0, '$token',0)";

				mysqli_query($con,$query);

				

				

				

                include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer;
                $mail->SMTPDebug = 2; 
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = EMAIL;
                $mail->Password = PASS;
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
                $mail->setFrom(EMAIL, 'Reclutare');
                $mail->addAddress($_POST['email']);
                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = "
                    Your email verification : $token
                ";

                if ($mail->send())
                {

                
                    header("Location:http://localhost/Reclutare/pls_verify_disp_page.php");
                    $query = "INSERT INTO sign_in(email_id, password) VALUES ('$email', '$password')";
                	
                    mysqli_query($con,$query);

                }	
                else
                
                    echo 'Error';
                
		
			
 ?>
</body>
</html>