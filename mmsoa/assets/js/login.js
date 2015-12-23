/**
 * 登录验证
 */

/**
 * 异步登录验证
 */
$("#fetch-btn").click(function() {
	var un = $("#input-username").val();
	var pw = $("#input-password").val();
	
	$.ajax({
		type: 'post', 
		url: 'login/loginValidation',
		data: {
			username: un,
			password: pw,
		},
		success: function(msg) {	
			ret = JSON.parse(msg);
			if (ret['status'] === false) {
				// 登录失败，显示错误信息
				$(".window-tips").html(ret['msg']);
				$(".window-tips").show();
			}
			else {
				// 登录成功，跳转至个人主页
				window.location.href = 'login/showHomepage';
			}
		}

	})
})

/**
 * 再次点击用户名输入框时，隐藏错误信息
 */
$("#input-username").click(function() {
	$(".window-tips").hide();
})

/**
 * 再次点击密码输入框时，隐藏错误信息
 */
$("#input-password").click(function() {
	$(".window-tips").hide();
})

