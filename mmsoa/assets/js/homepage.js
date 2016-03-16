/**
 * 主页留言、评论、通知
 */

$("#post-btn").click(function() {
	var post_content = $("#new-post").val();
	
	// 在文本首末分别添加字符串“<p>”和“</p>”,并将回车替换为“</p><p>”
	post_content = post_content.replace(/\n/g, "</p><p>");
	post_content = post_content.replace(/ /g, "&nbsp;");
	post_content = "<p>" + post_content;
	post_content += "</p>";
		
	$.ajax({
		type: 'post',
		url: '../Homepage/addAndGetPost',
		data: {
			"post_content": post_content,
		},
		success: function(msg) {
			ret = JSON.parse(msg);
			if (ret['status'] === true) {
				$("#post-circle").prepend("<div class='social-feed-separated'>" +
											"<div class='social-avatar'><a href=''><img alt='image' src='" + ret['base_url'] + "assets/images/a5.jpg'></a></div>" +
											"<div class='social-feed-box'>" +
												"<div class='social-avatar'>" +
													"<a href='#'>" + ret['name'] + "</a>" +
													"<small class='text-muted'> " + ret['splited_date']['month'] + "月" + ret['splited_date']['day'] + "日 " +
													ret['splited_date']['hour'] + ":" + ret['splited_date']['minute'] + " </small>" +
												"</div>" +
												"<div class='social-body'>" +
													post_content +
												"</div>" +
												"<div class='social-footer'>" +
													"<div class='social-comment' id='my-comment'>" +
														"<a href='' class='pull-left'><img alt='image' src='" + ret['base_url'] + "assets/images/a3.jpg'></a>" +
														"<div class='media-body'>" +
															"<textarea class='form-control' placeholder='填写评论...'></textarea>" +
															"<div class='btn-group' style='margin-top: 4px;'>" +
																"<button class='btn btn-primary btn-xs'><i class='fa fa-send-o'></i> 发送</button>" +
															"</div>" +
														"</div>" +
													"</div>" +
												"</div>" +
											"</div>" +
										"</div>");
			}
			//$("#new-post").val("");
			$(".modal-body").empty();
			$(".modal-body").append("<h2 id='submit_result' style='text-align:center;'><i class='fa fa-spin fa-spinner'></i></h2>");
			$("#submit_result").attr("style", "color:#1AB394; text-align:center; margin-top: 8px;");
			$("#submit_result").html(ret["msg"]);
			$("#post-circle").animate({scrollTop: $("#post-circle")[0].scrollHeight}, '500', 'swing', function() {});
		},
		error: function(){
		    alert(arguments[1]);
		}
	});
});