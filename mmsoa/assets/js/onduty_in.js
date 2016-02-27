/**
 * 值班登记
 */

/**
 * 值班签到按钮点亮后，才允许提交
 */
$("#onduty").change(function() {
	var is_signin = document.getElementById("onduty");
	if (is_signin.checked) {
		$("#range_slider").attr("disabled", false);
		$("#submit_onduty").attr("disabled", false);
	} else {
		$("#range_slider").attr("disabled", true);
		$("#submit_onduty").attr("disabled", true);
	}
})

$("#submit_onduty").click(function() {
	var irs_from = document.getElementsByClassName("irs-from").innerText;
	var from = $(".irs-from").val();
	var to = $(".irs-to").val();
	alert(irs_from);
	alert(to);
	
	
	
	$.ajax({
		type: "POST", 
		url: "../Onduty_in/onduty_record",
		data: {
			"time_from": from,
			"time_to": to,
		},
		success: function(msg) {
			ret = JSON.parse(msg);
			if (ret["status"] === false) {
				$("#submit_result").attr("style", "color:#ED5565;text-align:center;");
				$("#submit_result").html(ret["msg"]);
			} else {
				$("#submit_result").attr("style", "color:#1AB394;text-align:center;");
				$("#submit_result").html(ret["msg"]);
				// 锁定所有按钮和输入框
				$("#range_slider").attr("disabled", true);
				$("#submit_onduty").attr("disabled", true);
			}
		},
		error: function(){
		    alert(arguments[1]);
		}
	});
});
