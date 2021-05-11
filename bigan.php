


<?php
header('Content-Type: application/json;'); //設定資料類型為 json，編碼 utf-8
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = 'william';
//改成你登入phpmyadmin密碼
$passwd = '';
//資料庫名稱
$database = 'test';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}

	
	
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
//

$where=$_POST["bigan"]; //取得 nickname POST 值




//選擇資料表user，條件是欄位id = 1的
$selectSql = "SELECT * FROM look WHERE area = '$where'";
	
//呼叫query方法(SQL語法)
$memberData = $connect->query($selectSql);
	
$datacount = $memberData->num_rows;//查詢裡面幾筆



	
	

	

	
////if( checktest() == true){
//for($i=0;$i<$datacount;$i++){
$json_test = array();  

while ($test=$memberData->fetch_assoc()) {  
	
	$area=$test['area'];
	$Inquire=$test['Inquire'];
	$have=$test['have'];
	$stop=$test['stop'];
	array_push($json_test,$area,$Inquire,$have,$stop); 
}
	echo json_encode($json_test);



	//$mix=array_merge($mix,$area, $Inquire,$have,$stop);
//}

//	echo json_encode(array(
//            'area' => $area,
//			'Inquire'=>$Inquire,
//			'have'=>$have,
//			'stop'=>$stop
//        ));


//



?>
	
