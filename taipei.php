<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel=stylesheet type="text/css" href="Inquire.css">
<script type="text/javascript" src="click.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- SweetAlert 的 JS 套件-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- 引入 jQuery -->
<title>無標題文件</title>
</head>

<body>

	
<div class="title">	
	<h1>TAIPEI</h1>			
</div>

	
	
<div class="select">
<table style="border:8px black;" cellpadding="10" border='0'>
<caption align="left"><font size="10">站點列表</font></caption>
<tr>
<td><input type="checkbox" class="newe" id="sxin" value="信義區">信義區</td>
<td><input type="checkbox" class="newe" id="bigan"value="大安區">大安區</td>
<td><input type="checkbox" class="newe" id="mid">中山區</td>
<td><input type="checkbox" class="newe" id="son">松山區</td>	
</tr>
<tr>
<td><input type="checkbox" class="newe" id="ss">南港區</td>
<td><input type="checkbox" class="newe" id="midmid">中正區</td>
<td><input type="checkbox" class="newe" id="allwi">萬華區</td>
<td><input type="checkbox" class="newe" id="book">文山區</td>	
</tr>	
<tr>
<td><input type="checkbox" class="newe" id="bigto">大同區</td>
<td><input type="checkbox" class="newe" id="sulin">士林區</td>
<td><input type="checkbox" class="newe" id="infu">內湖區</td>
<td><input type="checkbox" class="newe" id="bato">北投區</td>	
</tr>
<tr>	
<td><input type="button" value="全選" onclick="checkAll()" /></td>
<td><input type="button" value="取消全選" onclick="unCheckAll()" /></td>		
</tr>	
</table>	
</div>	

	
<div class="look">
<font size="5">		
<table id="ans" style="border-collapse: collapse;width:900px;text-align:center;" cellpadding="10" border='1' >
<tr style="background-color:yellow">
<td >區域</td>	
<td >租借站點查詢</td>	
<td >可藉車輛</td>	
<td>可停空位</td>	
</tr>


	
	
	
	
</table>
</font>
</div>	
	
<script>
	///信義區
   $(function() {   
		   
            $("#sxin").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#sxin").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式
					async: true,                    
					success: function(arr) {                                              
                      
						var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="信義區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
						
						
						
                 
					},
                    error: function(jqXHR) {
                        window.alert(Error()); 
                    }
					
                })//ajax
				
				}else{
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==='信義區'){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}
				}
					
            })
		
//}
        });
		
	///大安區
	
	$(function() {
	   
		   
            $("#bigan").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#bigan").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="大安區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="大安區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	//中山
	$(function() {
	   
		   
            $("#mid").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#mid").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="中山區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	//松山
	$(function() {
	   
		   
            $("#son").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#son").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="松山區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="松山區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	//南港 id=ss
	$(function() {
	   
		   
            $("#ss").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#ss").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="南港區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="南港區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	// 中正
	$(function() {
	   
		   
            $("#midmid").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#midmid").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="中正區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="中正區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	// 萬華 id=allwi
	$(function() {
	   
		   
            $("#allwi").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#allwi").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="萬華區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="萬華區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	//文山區 id=book
	$(function() {
	   
		   
            $("#book").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#book").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="文山區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="文山區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	//大同 id bigto
	$(function() {
	   
		   
            $("#bigto").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#bigto").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="大同區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="大同區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	// 士林 sulin
	$(function() {
	   
		   
            $("#sulin").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#sulin").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="士林區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="士林區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	// 內湖 infu
	$(function() {
	   
		   
            $("#infu").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#infu").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="內湖區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="內湖區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	// 北投bato
	$(function() {
	   
		   
            $("#bato").on('click',function() { //class 為 newe 的checkbox被點擊時
				if($("#bato").is(':checked')){
                $.ajax({
                    type: "GET", //傳送方式
                    url: "https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json", //傳送目的地
                    dataType: "json", //資料格式                    
					success: function(arr) {
                        //if (data.json_test) { //如果後端回傳 json 資料有 nickname                           
                        var arrall = [];

						for(i=1;i<410;i=i+1){
							
						    var str = "" + i	
							var pad = "0000"
							var idnum = pad.substring(0, pad.length - str.length) + str
							
							if(arr["retVal"].hasOwnProperty(idnum)){
								if(arr["retVal"][idnum]["sarea"]=="北投區"){
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
							//document.write(arrall);
							var arralllength= arrall.length;
							console.log(arralllength);
							var table = document.getElementById("ans");
						
							for(i=0;i<arralllength;i=i+4){
							 var num = document.getElementById("ans").rows.length;
						     var row = table.insertRow(num);														 
							 var cell1 = row.insertCell(0);
							 var cell2 = row.insertCell(1);
							 var cell3 = row.insertCell(2);
							 var cell4 = row.insertCell(3);
							 cell1.innerHTML = arrall[i];
							 cell2.innerHTML = arrall[i+1];
							 cell3.innerHTML = arrall[i+2];
							 cell4.innerHTML = arrall[i+3];
							
						}
                 
					},
                    error: function(jqXHR) {
                        window.alert(222); 
                    }
					
                })//ajax
				
				}else{
					//window.alert(document.getElementById("ans").rows[1].cells[0].innerHTML);
					
					var num = document.getElementById("ans").rows.length;
					for(num;num>1;num--){											                       
						if(document.getElementById("ans").rows[num-1].cells[0].innerHTML==="北投區"){
							document.getElementById("ans").deleteRow(num-1);
						}	
					}

				}
					
            })
		
//}
        });
	
	
	
	
	
</script>
	
</body>
</html>
	
	
	
	