<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录</title>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_470938_k9amf1s1c06647vi.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="login" onload="createCode()">
	<div class="login-form">
		<div class="content">			
			<div class="title">商城后台登录</div>
			<div class="form">				
				<form action="#">
					<div class="entry clear">
		                <div class="fl">
		                    <label>用户名:</label>
		                </div>
		                <div class="fl">
		                    <input type="text" name="username" id="username" value="" placeholder="">
		                </div>
		            </div>
		            <div class="entry clear">
		                <div class="fl">
		                    <label>密码:</label>
		                </div>
		                <div class="fl">
		                    <input type="password" name="password" id="password" value="" placeholder="">
		                </div>
		            </div>
		            <div class="entry clear">
						<div class="fl">					
							<label>验证码:</label>
						</div>
						<div class="fl">					
							<input type="text" name="inputCode" id="inputCode" value="" placeholder="" maxlength="6">
						</div>	
					</div>
					<div class="entry clear">
						<div class="fl">					
							<div class="code" id="checkCode" ></div>
						</div>
						<div class="fl">					
							<a href="#" class="reload-code">看不清换一张</a>	
						</div>
					</div>
				</form>
				<a href="#" class="btn btn-login">登录</a>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		// 验证码
        var code;
        function createCode() {
            code = "";
            var codeLength = 6; //验证码的长度
            var checkCode = document.getElementById("checkCode");
            var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
            for (var i = 0; i < codeLength; i++) {
                var charNum = Math.floor(Math.random() * 52);
                code += codeChars[charNum];
            }
            if (checkCode) {
                checkCode.className = "code";
                checkCode.innerHTML = code;
            }
        }
        function validateCode() {
            var inputCode = document.getElementById("inputCode").value;
            if (inputCode.length <= 0) {
                alert("请输入验证码！");
            }
            else if (inputCode.toUpperCase() != code.toUpperCase()) {
                alert("验证码输入有误！");
                createCode();
            }
            else {
                alert("验证码正确！");
            }        
        }  

		(function($){
			$(function(){

		         $('body').on('click', '.btn-login', function(){
		            validateCode();
		            return false;
		        });
		        $('body').on('click', '.code', function(){
		            createCode();
		            return false;
		        });
		        $('body').on('click', '.reload-code', function(){
		            createCode();
		            return false;
		        });

			});
		})(jQuery);
	</script>
</body>
</html>