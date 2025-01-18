<?php $rik=date("Y"); $mis=date("m"); $day=date("d"); $user=(int)$_GET['user'];?>
<!DOCTYPE html>
<html lang="uk">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fitness</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="keywords" content="Fitness" />
<meta name="description" content="Fitness" />
<meta name="theme-color" content="#5c6bc0" />
<link rel="icon" href="favicon.png" sizes="32x32" />
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
</head>

<body class="grey lighten-5">
<div class="row center black-text light">
	<h5 class="col s12"><br/>FITNESS<br/></h5>
	<h5 class="col s12 light"><? echo $rik.'.'.$mis.'.'.$day; ?><br/></h5>
	<div class="col center s12">
	<table class="striped bordered centered">
		<tr><td class="indigo lighten-1 white-text flow-text"><b>User</b></td>
	    <td class="indigo lighten-1 white-text flow-text"><b>Data</b></td>
		<td class="indigo lighten-1 white-text flow-text"><b>Time</b></td>
		<td class="indigo lighten-1 white-text flow-text"><b>Value</b></td></tr>
<?php $i = 1;
$db = mysqli_connect("dao.mysql.tools", "dao_fitness", "---", "dao_fitness");
if ($db) {
	$query = "SELECT * FROM fitness WHERE user=".$user." ORDER BY id";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$tab[$i] = '<tr><td class="flow-text">'.$row['user'].'</td>
		<td class="flow-text">'.date('Y.m.d',$row['time']).'</td>
		<td class="flow-text">'.date('G:i:s',$row['time']).'</td>
		<td class="flow-text"><b>'.$row['value'].'</b></td></tr>';
		$i++;
	}
	mysqli_free_result($result);
	mysqli_close($db);
}
for ($j=$i; $j>0; $j--) echo $tab[$j]; ?>
	</table>
	<br/><br/>
	</div>
</div>
</body>
</html>