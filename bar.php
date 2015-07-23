<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pure CSS Progress Bar</title>
  
 
</head>
<body>
<progress id="progressBar" value="60" max="100"></progress>
<span id="percent"></span>
<script>
	eltBar = document.getElementById("progressBar");
	eltPct = document.getElementById("percent");
	eltPct.innerHTML = eltBar.position * 100 + " %";
</script>

</body>
</html>
