<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_470938_k9amf1s1c06647vi.css">
	<style type="text/css">
		* { margin: 0; padding: 0; }
		html, body { height: 100%; width: 100%; font-family: Arial, '微软雅黑'; }
		a:link, a:visited, a:active, a:hover { text-decoration: none; }
		input[type="text"],input[type="password"] { height: 28px; font-family: '微软雅黑', Arial, 'sans-serif'; font-size: 14px; line-height: 28px; padding: 0 8px; border-radius: 4px; border: 1px solid #ccc; box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075); -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075); transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;  box-sizing: border-box; }
		input:focus, textarea:focus { border-color: #66afe9; outline: 0; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6); box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6); }
		label { color: #666; font-weight: bolder; }
		.clear { content: ''; display: table; clear: both; }
		.fl { float: left; }
		.fr { float: right; }
		.login-form { height: 100%; width: 100%; background: url(images/pattern.png) repeat #8cb5f4; position: relative; }
		.content { position: absolute; top: 20%; left: 0; right: 0; width: 300px; margin: 0 auto; background: #fff; color: #333; border-radius: 8px; }
		.content .title { background: #000; color: #fff; text-align: center; padding: 20px 0; font-size: 20px; font-weight: bolder; letter-spacing: 5px; border-top-right-radius: 8px; border-top-left-radius: 8px; }
		.btn { display: inline-block; padding: 5px 0; color: #fff; border-radius: 5px; transition: all .5s; -webkit-transition: all .5s; -o-transition: all .5s; }
		.btn-login { background: #23b7e5; display: block; width: 100%; margin: 20px auto 0; text-align: center; }
		.btn-login:hover { background: #3aa8cf; }
		.content .form { padding: 40px 20px; }
		.content .entry { padding-bottom: 10px; width: 100%; }
		.content .entry .fl:nth-child(odd) { display: block; float: left; vertical-align: top; width: 25%; padding-right: 0; }
		.content .entry .fl:nth-child(even) { display: block; float: left; width: 75%; }
		.content .entry input[type="text"], .content .entry input[type="password"] { width: 100%; }
		.content .entry:last-child .fl:nth-child(odd) { width: 65%; }
		.content .entry:last-child .fl:nth-child(even) { width: 35%; }
		.content .entry .code { margin-right: 10px; text-align: center; height: 30px; letter-spacing: 3px; background: url(images/bg_code.jpg) repeat center center; line-height: 30px; color: #000; }
		.content .entry .reload-code { line-height: 30px; font-size: 12px; color: #333; }

	</style>
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