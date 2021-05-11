<!doctype html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- 引入 jQuery -->

<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<button type="button" id="test">我是按鈕</button>


		
<script>
$(function() {
	$("#test").on('click',function() {
swal({
  title: 'Title...',
  text: "<iframe class='youtube-video'width=560 height=315 src=https://www.youtube.com/embed/tpQgEJNU4T0?enablejsapi=1 frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>",
  html: true
});
	})
})	
	
	
</script>
</body>
</html>