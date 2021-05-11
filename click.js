// JavaScript Document
function checkAll(){
	var hobby  =document.getElementsByClassName("newe");
	for(var i  =0;i<hobby.length;i++){
	    var h = hobby[i];
	    h.checked = true;				
    }				
}
function  unCheckAll(){
	var hobby  =document.getElementsByClassName("newe");
	for(var i  =0;i<hobby.length;i++){
	    var h = hobby[i];
	    h.checked = false;
					
    }
}

function  checktest(){
	var   test= document.getElementsByClassName("newe");
	for(var i  =0;i<test.length;i++){
	    var h = test[i];
	  	if(h.checked===true){
			return true;
		}
		
		
		
		
		
		
		
		
					
    }
}