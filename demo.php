<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="onload()">

</body>
<img id="img">
<script type="text/javascript">
	function onload()
	{
		var xhr = new XMLHttpRequest();

		xhr.open("GET", "WebImage/1.png");
		xhr.responseType = "arraybuffer";

		xhr.onload = function(e)
		{
			var blob = new Blob([xhr.response]);
			var url = URL.createObjectURL(blob);

			console.log(url);
			var img = document.getElementById("img");
			img.src = url;
		}
		xhr.send();
	}
</script>
</html> -->
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<video id="video"  width="270px" height="200" autoplay="true"  controls controlsList="nodownload">
		<source id="video" type="video/mp4">
	</video>
<script type="text/javascript">
	var xhr = new XMLHttpRequest();
xhr.responseType = 'blob';

xhr.onload = function() {
  
  var reader = new FileReader();
  
  reader.onloadend = function() {
  
    var byteCharacters = atob(reader.result.slice(reader.result.indexOf(',') + 1));
    
    var byteNumbers = new Array(byteCharacters.length);

    for (var i = 0; i < byteCharacters.length; i++) {
      
      byteNumbers[i] = byteCharacters.charCodeAt(i);
      
    }

    var byteArray = new Uint8Array(byteNumbers);
    var blob = new Blob([byteArray], {type: 'video/mp4'});
    var url = URL.createObjectURL(blob);
    
    document.getElementById('video').src = url;
    
  }
  
  reader.readAsDataURL(xhr.response);
  
};

xhr.open('GET', 'https://triyambak-life-science.s3.ap-south-1.amazonaws.com/recorded-videos/23-032020-10-03.mp4');
xhr.send();
</script>
</body>
</html>
 -->

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">
		var timerID;
		window.onload= function(){

			canvas= document.getElementById("mycanvas");
			ctx = canvas.getContext('2d');
			var video = document.getElementById("video");
			video.addEventListener('play', function(){
				video.currentTime=10.0;
				timerID = window.setInterval(function(){
					ctx.drawImage(video, 5, 5, 270, 125);
				}, 30);

			});
			video.addEventListener('pause', function(){

				stopTimer();
			});
			video.addEventListener('ended', function(){

				stopTimer();
			});

		};
		function stopTimer(){
			window.clearInterval(timerID);
		}
		function playvideo()
		{
			var vid = document.getElementById("video");
			vid.play();
		}

	</script>


<style type="text/css">
	body
	{
		overflow: hidden;
		z-index: 10000;
	}
</style>

</head>
<body>

	<video id="video"  width="270px" height="200" autoplay="true"  controls controlsList="nodownload" >
		<source src="https%3A%2F%2Ftriyambak-life-science.s3.ap-south-1.amazonaws.com%2Frecorded-videos%2F23-032020-10-03.mp4" type="video/mp4">
	</video>
	<hr>
	<button id="playbtn" onclick="playvideo()">Play</button>
	<br>
	<canvas id="mycanvas" width="270" height="200" />



</body>
</html>
-->

<?php
	//ALL SCRIPTS
	require 'script.php';

	//HEAD CONTAINER (CSS LINKS)
	require 'include/head_container.php';

	//PAGE TITLE
	echo "<title>PHP-SECURITY</title>";

	//HEADER 
	require 'include/header.php'; 

	//PAGE BODY HERE
		



	//FOOTER CONTAINER (JS LINKS)
	require 'include/footer_container.php';
?>