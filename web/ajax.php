<?php
// https://fitness.zxlogin.com/index.php?user=7 	// Таблиця
// https://fitness.zxlogin.com/ajax.php?com=1&user=7&val=20
if($_GET['com']=='1'){
	$user=(int)$_GET['user'];
	$val=(float)$_GET['val'];
	$rez['ack']=0;
	$db=mysqli_connect("dao.mysql.tools","dao_fitness","---","dao_fitness");
	if(!$db){exit();}
	$query='INSERT INTO fitness SET user='.$user.', value='.$val.', time='.time();
	$result=mysqli_query($db, $query);
	if($result){$rez['ack']=1;}
	mysqli_close($db);
	echo json_encode($rez);
}
?>