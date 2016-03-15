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
			}
			$("#new-post").val("");
		},
		error: function(){
		    alert(arguments[1]);
		}
	});
});