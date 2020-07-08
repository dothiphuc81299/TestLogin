
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
</head>

<body>
  <div id="login-page">
    <div class="container">
<!-- //" -->
      <form class="form-login" action = "xulilogin.php" method = "post" class="formLogin">
    
        <div class="login-wrap">
          <input type="text"  placeholder="User ID"  name = "email" id = "email" autofocus>
          <br>
		  <input type="password"  placeholder="Password"  name ="password" id = "password">
		  <br>
          <input type="password"  placeholder="Password confirm"  name ="password_confirm" id = "password_confirm">
		  <br>
          <input type ="submit"   name = "submit" value = "OK"/>
        
        </div>
      </form>
      <script type="text/javascript">
		$(document).ready(function(){
			$(".formLogin").validate({
				rules:{
					email:{
						required:true,
						
					
					},
					password:{
						required: true,
						minlength:6
					},
					password_confirm:{
						required: true,
						equalTo: ".password"
					},
				messages:{
          email:{
						required:"Vui lòng nhập email",
						email:"Bạn nhập email chưa đúng"
					},
					password:{
						required:"Vui lòng nhập mật khẩu",
						minlength:"Mật khẩu phải có ít nhất 6 kí tự"
					},
					password_confirm:{
						required:"Vui lòng nhập lại mật khẩu",
						equalTo:"Mật khẩu nhập lại không chính xác"
					},
				
				}
			});
		});
	</script>
    </div>
  </div>

      

</body>
</html>



				
		

