<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- SweetAlert 的 JS 套件-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- 引入 jQuery -->
<title>文档标题</title>
</head>
 
<body>
<p>点击按钮获取数组中大于 18 的所有元素。</p>
<button id=111>点我</button>
<p id="demo"></p>
<tr>
<td><input type="checkbox" class="newe" id="sxin" value="信義區">信義區</td>
<td><input type="checkbox" class="newe" id="bigan"value="大安區">大安區</td>	
<script>
	$(function(){
		    $('#111').click(function(){
				 
				 $.ajax({
        			type: "GET",   // 使用GET方法
					url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json",   // 取得JSON資料的網址
        			dataType: "json",   // 資料類型 json
        			async: true,   // true(非同步請求 defaule), false(同步請求)
        			success: function(arr) {						
						var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="中山區"){
									var SAREA =arr["retVal"][idnum]["sarea"];
									var SNA =arr["retVal"][idnum]["sna"];
									var HAVE =arr["retVal"][idnum]["sbi"];
									var STOP = arr["retVal"][idnum]["tot"]-	arr["retVal"][idnum]["sbi"];
									arrall.push(SAREA,SNA,HAVE,STOP);									
								}
								//document.write(arr["retVal"][idnum]["sarea"]);
							}else{								
								console.log(idnum);
							}
						
							
						}
							document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
						
        			}
				 });
			 
			 
			});

		
	});

	
</script>
	
</body>
 
</html>
