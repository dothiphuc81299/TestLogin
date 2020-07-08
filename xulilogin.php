<?php 
	ob_start();
?>
<?php
			   if(isset($_POST['submit'])){
				$email = $_POST['email'];
                $password = $_POST['password'];	
                $password_confirm=$_POST['password_confirm'];  
				$link1 = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
				mysqli_select_db($link1,"test");
				mysqli_set_charset($link1, 'UTF8');	
				$sql1 = "SELECT *FROM taikhoan";
				$result1 = mysqli_query($link1,$sql1); 
				$kq = 0;
				while($row1 = mysqli_fetch_assoc($result1)){
					if(($email==$row1['email'])&&($password==$row1['password'])&&($password_confirm==$row1['password']) ){
						$kq = -1; 
						break;
					}
				}
				if($kq==-1){
				
					echo 'success';
					}
				else {	
					echo '<span>Ban nhap sai email hoac password</span><br>';}
				mysqli_close($link1);
			}
				?>

<?php ob_end_flush();?>
				