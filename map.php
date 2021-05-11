<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel=stylesheet type="text/css" href="map.css">
<title>無標題文件</title>

<style>
	body{
		background-image:url(map.png);
						
		background-repeat: no-repeat;
		background-position: 350px 0%; 
	}	
</style>	
	
	
	
</head>

<body>
<div class="taipei"><button type="button" class="btn btn-default" data-toggle="tooltip" title="台北" >
    <a href="taipei.php">taipei</a>
	</button></div>	
<div class="newtaipei"><button type="button" class="btn btn-default" data-toggle="tooltip" title="新北" >
    newtaipei
	</button></div>
<div class="taoyuan"><button type="button" class="btn btn-default" data-toggle="tooltip" title="桃園" >
    taoyuan
	</button></div>
<div class="hsinchu"><button type="button" class="btn btn-default" data-toggle="tooltip" title="新竹" >
    hsinchu
	</button></div>
<div class="hsinchusciencepark"><button type="button" class="btn btn-default" data-toggle="tooltip" title="新竹科園" >
    hsinchu science park
	</button></div>	
<div class="miaoli"><button type="button" class="btn btn-default" data-toggle="tooltip" title="苗栗" >
    miaoli
	</button></div>
<div class="taichung"><button type="button" class="btn btn-default" data-toggle="tooltip" title="台中" >
    taichung
	</button></div>	
<div class="changhua"><button type="button" class="btn btn-default" data-toggle="tooltip" title="彰化" >
    changhua
	</button></div>
<div class="kaohsiung"><button type="button" class="btn btn-default" data-toggle="tooltip" title="高雄" >
    kaohsiung
	</button></div>	
	
	
	
	
	
	
	
<script>
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>
</body>
</html>