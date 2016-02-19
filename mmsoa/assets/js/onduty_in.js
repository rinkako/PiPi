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
