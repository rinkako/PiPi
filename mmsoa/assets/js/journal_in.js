/**
 * 发布坐班日志
 */

$("#submit_journal").click(function() {
	var journal_group = null;
	var obj = document.getElementsByName("group_radio");
	for (var i = 0; i < obj.length; i++) {
		if (obj[i].checked) {
			journal_group = obj[i].value;
		}
	}
	
	var report_list = [];
	var i = 0;
	
	report_list[i++] = $("#text_morning").val();
	report_list[i++] = $("#text_noon").val();
	report_list[i++] = $("#text_evening").val();
	report_list[i++] = $("#text_best").val();
	report_list[i++] = $("#text_bad").val();
	report_list[i++] = $("#text_summary").val();
	
	$.ajax({
		type: "POST", 
		url: "../Journal_in/writeJournal",
		data: {
			"journal_body": report_list,
			"group": journal_group,
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
				$("#text_morning").attr("disabled", true);
				$("#text_noon").attr("disabled", true);
				$("#text_evening").attr("disabled", true);
				$("#text_best").attr("disabled", true);
				$("#text_bad").attr("disabled", true);
				$("#text_summary").attr("disabled", true);
				$("#submit_journal").attr("disabled", true);
			}
		},
		error: function(){
		    alert(arguments[1]);
		}
	});
});