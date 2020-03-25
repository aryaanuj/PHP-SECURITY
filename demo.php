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

<!DOCTYPE html>
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


<!-- <script type="text/javascript">
<!-- HTML Encryption provided by www.webtoolhub.com -->
<!--
document.write(unescape('%3c%21%44%4f%43%54%59%50%45%20%68%74%6d%6c%3e%0d%0a%3c%68%74%6d%6c%3e%0d%0a%3c%68%65%61%64%3e%0d%0a%09%3c%74%69%74%6c%65%3e%3c%2f%74%69%74%6c%65%3e%0d%0a%0d%0a%09%3c%73%63%72%69%70%74%20%74%79%70%65%3d%22%74%65%78%74%2f%6a%61%76%61%73%63%72%69%70%74%22%3e%0d%0a%09%09%76%61%72%20%74%69%6d%65%72%49%44%3b%0d%0a%09%09%77%69%6e%64%6f%77%2e%6f%6e%6c%6f%61%64%3d%20%66%75%6e%63%74%69%6f%6e%28%29%7b%0d%0a%0d%0a%09%09%09%63%61%6e%76%61%73%3d%20%64%6f%63%75%6d%65%6e%74%2e%67%65%74%45%6c%65%6d%65%6e%74%42%79%49%64%28%22%6d%79%63%61%6e%76%61%73%22%29%3b%0d%0a%09%09%09%63%74%78%20%3d%20%63%61%6e%76%61%73%2e%67%65%74%43%6f%6e%74%65%78%74%28%27%32%64%27%29%3b%0d%0a%09%09%09%76%61%72%20%76%69%64%65%6f%20%3d%20%64%6f%63%75%6d%65%6e%74%2e%67%65%74%45%6c%65%6d%65%6e%74%42%79%49%64%28%22%76%69%64%65%6f%22%29%3b%0d%0a%09%09%09%76%69%64%65%6f%2e%61%64%64%45%76%65%6e%74%4c%69%73%74%65%6e%65%72%28%27%70%6c%61%79%27%2c%20%66%75%6e%63%74%69%6f%6e%28%29%7b%0d%0a%09%09%09%09%76%69%64%65%6f%2e%63%75%72%72%65%6e%74%54%69%6d%65%3d%31%30%2e%30%3b%0d%0a%09%09%09%09%74%69%6d%65%72%49%44%20%3d%20%77%69%6e%64%6f%77%2e%73%65%74%49%6e%74%65%72%76%61%6c%28%66%75%6e%63%74%69%6f%6e%28%29%7b%0d%0a%09%09%09%09%09%63%74%78%2e%64%72%61%77%49%6d%61%67%65%28%76%69%64%65%6f%2c%20%35%2c%20%35%2c%20%32%37%30%2c%20%31%32%35%29%3b%0d%0a%09%09%09%09%7d%2c%20%33%30%29%3b%0d%0a%0d%0a%09%09%09%7d%29%3b%0d%0a%09%09%09%76%69%64%65%6f%2e%61%64%64%45%76%65%6e%74%4c%69%73%74%65%6e%65%72%28%27%70%61%75%73%65%27%2c%20%66%75%6e%63%74%69%6f%6e%28%29%7b%0d%0a%0d%0a%09%09%09%09%73%74%6f%70%54%69%6d%65%72%28%29%3b%0d%0a%09%09%09%7d%29%3b%0d%0a%09%09%09%76%69%64%65%6f%2e%61%64%64%45%76%65%6e%74%4c%69%73%74%65%6e%65%72%28%27%65%6e%64%65%64%27%2c%20%66%75%6e%63%74%69%6f%6e%28%29%7b%0d%0a%0d%0a%09%09%09%09%73%74%6f%70%54%69%6d%65%72%28%29%3b%0d%0a%09%09%09%7d%29%3b%0d%0a%0d%0a%09%09%7d%3b%0d%0a%09%09%66%75%6e%63%74%69%6f%6e%20%73%74%6f%70%54%69%6d%65%72%28%29%7b%0d%0a%09%09%09%77%69%6e%64%6f%77%2e%63%6c%65%61%72%49%6e%74%65%72%76%61%6c%28%74%69%6d%65%72%49%44%29%3b%0d%0a%09%09%7d%0d%0a%09%09%66%75%6e%63%74%69%6f%6e%20%70%6c%61%79%76%69%64%65%6f%28%29%0d%0a%09%09%7b%0d%0a%09%09%09%76%61%72%20%76%69%64%20%3d%20%64%6f%63%75%6d%65%6e%74%2e%67%65%74%45%6c%65%6d%65%6e%74%42%79%49%64%28%22%76%69%64%65%6f%22%29%3b%0d%0a%09%09%09%76%69%64%2e%70%6c%61%79%28%29%3b%0d%0a%09%09%7d%0d%0a%0d%0a%09%3c%2f%73%63%72%69%70%74%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%3c%2f%68%65%61%64%3e%0d%0a%3c%62%6f%64%79%3e%0d%0a%0d%0a%09%3c%76%69%64%65%6f%20%69%64%3d%22%76%69%64%65%6f%22%20%20%77%69%64%74%68%3d%22%32%37%30%70%78%22%20%68%65%69%67%68%74%3d%22%32%30%30%22%20%61%75%74%6f%70%6c%61%79%3d%22%74%72%75%65%22%20%20%63%6f%6e%74%72%6f%6c%73%20%63%6f%6e%74%72%6f%6c%73%4c%69%73%74%3d%22%6e%6f%64%6f%77%6e%6c%6f%61%64%22%3e%0d%0a%09%09%3c%73%6f%75%72%63%65%20%73%72%63%3d%22%68%74%74%70%73%3a%2f%2f%74%72%69%79%61%6d%62%61%6b%2d%6c%69%66%65%2d%73%63%69%65%6e%63%65%2e%73%33%2e%61%70%2d%73%6f%75%74%68%2d%31%2e%61%6d%61%7a%6f%6e%61%77%73%2e%63%6f%6d%2f%72%65%63%6f%72%64%65%64%2d%76%69%64%65%6f%73%2f%32%33%2d%30%33%32%30%32%30%2d%31%30%2d%30%33%2e%6d%70%34%22%20%74%79%70%65%3d%22%76%69%64%65%6f%2f%6d%70%34%22%3e%0d%0a%09%3c%2f%76%69%64%65%6f%3e%0d%0a%09%3c%68%72%3e%0d%0a%09%3c%62%75%74%74%6f%6e%20%69%64%3d%22%70%6c%61%79%62%74%6e%22%20%6f%6e%63%6c%69%63%6b%3d%22%70%6c%61%79%76%69%64%65%6f%28%29%22%3e%50%6c%61%79%3c%2f%62%75%74%74%6f%6e%3e%0d%0a%09%3c%62%72%3e%0d%0a%09%3c%63%61%6e%76%61%73%20%69%64%3d%22%6d%79%63%61%6e%76%61%73%22%20%77%69%64%74%68%3d%22%32%37%30%22%20%68%65%69%67%68%74%3d%22%32%30%30%22%20%2f%3e%0d%0a%0d%0a%0d%0a%0d%0a%3c%2f%62%6f%64%79%3e%0d%0a%3c%2f%68%74%6d%6c%3e'));
//-->
</script> -->
