/**
 * 值班报名
 */

//$("#submit_signup").click(function() {
//	var add_group = null;
//	var obj = document.getElementsByName("group_radio");
//	for (var i = 0; i < obj.length; i++) {
//		if (obj[i].checked) {
//			add_group = obj[i].value;
//		}
//	}
//	
//	$.ajax({
//		type: "POST", 
//		url: "../Duty_sign_up/dutySignUp",
//		data: {
//		},
//		success: function(msg) {
//			ret = JSON.parse(msg);
//			if (ret["status"] === false) {
//				$("#submit_result").attr("style", "color:#ED5565;text-align:center;");
//				$("#submit_result").html(ret["msg"]);
//			} else {
//				$("#submit_result").attr("style", "color:#1AB394;text-align:center;");
//				$("#submit_result").html(ret["msg"]);
//			}
//		},
//		error: function(){
//		    alert(arguments[1]);
//		}
//	});
//});