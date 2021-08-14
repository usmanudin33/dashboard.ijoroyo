<?php
$servername = "dashboard.ijoroyo.id";		//example = localhost or 192.168.0.0
    $username = "u2899107_ijoroyo";		//example = root
    $password = "@Margonda100";	
    $dbname = "u2899107_ijoroyo";
try
{
  $conn=new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password); 
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if(isset($_POST["tombol_auto"]))
 {	 $dataon= 2;
 	 $dataoff= 3;
 	 $auto =$_POST['tombol_auto'];
 	 if ($auto == 'ON') {
 	 	$query1 = "UPDATE kontrol SET tombol_auto = $dataon";
	 	$statement1 = $conn->prepare($query1);
	 	$statement1->execute(
	 	array('tombol_auto' => $_POST["tombol_auto"]));
	 	$btn_auto = $statement1->rowCount();
	 		if($btn_auto > 0)
			 {
				 echo "Success..!";
				 echo "ON";
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_auto;
			 }	 
	 } else if ($auto == 'OFF') {
 	 	$query2 = "UPDATE kontrol SET tombol_auto = $dataoff";
	 	$statement2 = $conn->prepare($query2); 	 
	 	$statement2->execute(
	 	array('tombol_auto' => $_POST["tombol_auto"]));
	 	$btn_auto = $statement2->rowCount();
	 		if($btn_auto > 0)
			 {
				 echo "Success..!";
				 echo "ON";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["nut_a"]))
 {	 $on_nut_a= 2;
 	 $off_nut_a= 3;
 	 $nut_a =$_POST['nut_a'];
 	 if ($nut_a == 'nut_a_ON') {
 	 	$query3 = "UPDATE kontrol SET nutrisi = $on_nut_a";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('nut_a' => $_POST["nut_a"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0) 
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
				
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
	 } else if ($nut_a == 'nut_a_OFF') {
 	 	$query4 = "UPDATE kontrol SET nutrisi= $off_nut_a";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('nut_a' => $_POST["nut_a"]));
	 	$btn_nut = $statement4->rowCount();
	 		if($btn_nut > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
				 
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
  else if(isset($_POST["ph_a"]))
 {	 $on_ph_a= 2;
 	 $off_ph_a= 3;
 	 $ph_a =$_POST['ph_a'];
 	 if ($ph_a == 'ph_a_ON') {
 	 	$query3 = "UPDATE kontrol SET ph_a = $on_ph_a";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('ph_a' => $_POST["ph_a"]));
	 	$btn_ph = $statement3->rowCount();
	 		if($btn_ph > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
				 
			 }
	 			else
			 {
				 echo "Failed";
				 
			 }	 
	 } else if ($ph_a == 'ph_a_OFF') {
 	 	$query4 = "UPDATE kontrol SET ph_a = $off_ph_a";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('ph_a' => $_POST["ph_a"]));
	 	$btn_ph = $statement4->rowCount();
	 		if($btn_ph > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 } else if(isset($_POST["ph_b"]))
 {	 $on_ph_b= 2;
 	 $off_ph_b= 3;
 	 $ph_b =$_POST['ph_b'];
 	 if ($ph_b == 'ph_b_ON') {
 	 	$query3 = "UPDATE kontrol SET ph_b = $on_ph_b";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('ph_b' => $_POST["ph_b"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_nut;
			 }	 
	 } else if ($ph_b == 'ph_b_OFF') {
 	 	$query4 = "UPDATE kontrol SET ph_b = $off_ph_b";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('ph_b' => $_POST["ph_b"]));
	 	$btn_nut = $statement4->rowCount();
	 		if($btn_nut > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 } else if(isset($_POST["lampu"]))
 {	 $on_lampu= 2;
 	 $off_lampu= 3;
 	 $lampu =$_POST['lampu'];
 	 if ($lampu == 'lampu_ON') {
 	 	$query3 = "UPDATE kontrol SET lampu = $on_lampu";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('lampu' => $_POST["lampu"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
				 
			 }
	 			else
			 {
				 echo "Failed";
				 
			 }	 
	 } else if ($lampu == 'lampu_OFF') {
 	 	$query4 = "UPDATE kontrol SET lampu = $off_lampu";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('lampu' => $_POST["lampu"]));
	 	$btn_lampu = $statement4->rowCount();
	 		if($btn_lampu > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }else if(isset($_POST["kipas"]))
 {	 $on_kipas= 2;
 	 $off_kipas= 3;
 	 $kipas =$_POST['kipas'];
 	 if ($kipas == 'kipas_ON') {
 	 	$query3 = "UPDATE kontrol SET kipas = $on_kipas";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('kipas' => $_POST["kipas"]));
	 	$btn_kipas = $statement3->rowCount();
	 		if($btn_kipas > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
				 
			 }
	 			else
			 {
				 echo "Failed";
				 
			 }	 
	 } else if ($kipas == 'kipas_OFF') {
 	 	$query4 = "UPDATE kontrol SET kipas = $off_kipas";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('kipas' => $_POST["kipas"]));
	 	$btn_kipas = $statement4->rowCount();
	 		if($btn_kipas > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["kran"]))
 {	 $on_kran= 2;
 	 $off_kran= 3;
 	 $kran =$_POST['kran'];
 	 if ($kran == 'kran_ON') {
 	 	$query3 = "UPDATE kontrol SET kran = $on_kran";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('kran' => $_POST["kran"]));
	 	$btn_kran = $statement3->rowCount();
	 		if($btn_kran > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
				
			 }	 
	 } else if ($kran == 'kran_OFF') {
 	 	$query4 = "UPDATE kontrol SET kran = $off_kran";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('kran' => $_POST["kran"]));
	 	$btn_kran = $statement4->rowCount();
	 		if($btn_kran > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["pompa_A"]))
 {	 $on_pompa_A= 2;
 	 $off_pompa_A= 3;
 	 $pompa_A =$_POST['pompa_A'];
 	 if ($pompa_A == 'pompa_A_ON') {
 	 	$query3 = "UPDATE kontrol SET pompa1 = $on_pompa_A";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('pompa_A' => $_POST["pompa1"]));
	 	$btn_pompa_A = $statement3->rowCount();
	 		if($btn_pompa_A > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
				
			 }	 
	 } else if ($pompa_A == 'pompa_A_OFF') {
 	 	$query4 = "UPDATE kontrol SET pompa1 = $off_pompa_A";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('pompa_A' => $_POST["pompa1"]));
	 	$btn_pompa_A = $statement4->rowCount();
	 		if($btn_pompa_A > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["pompa_B"]))
 {	 $on_pompa_B= 2;
 	 $off_pompa_B= 3;
 	 $pompa_B =$_POST['pompa_B'];
 	 if ($pompa_B == 'pompa_B_ON') {
 	 	$query3 = "UPDATE kontrol SET pompa2 = $on_pompa_B";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('pompa_B' => $_POST["pompa2"]));
	 	$btn_pompa_B = $statement3->rowCount();
	 		if($btn_pompa_B > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
				
			 }	 
	 } else if ($pompa_B == 'pompa_B_OFF') {
 	 	$query4 = "UPDATE kontrol SET pompa2 = $off_pompa_B";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('pompa_B' => $_POST["pompa2"]));
	 	$btn_pompa_B = $statement4->rowCount();
	 		if($btn_pompa_B > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["pompa_C"]))
 {	 $on_pompa_C= 2;
 	 $off_pompa_C= 3;
 	 $pompa_C =$_POST['pompa_C'];
 	 if ($pompa_C == 'pompa_C_ON') {
 	 	$query3 = "UPDATE kontrol SET pompa3 = $on_pompa_C";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('pompa_C' => $_POST["pompa3"]));
	 	$btn_pompa_C = $statement3->rowCount();
	 		if($btn_pompa_C > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
				
			 }	 
	 } else if ($pompa_C == 'pompa_C_OFF') {
 	 	$query4 = "UPDATE kontrol SET pompa3 = $off_pompa_C";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('pompa_C' => $_POST["pompa3"]));
	 	$btn_pompa_C = $statement4->rowCount();
	 		if($btn_pompa_C > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["pompa_D"]))
 {	 $on_pompa_D= 2;
 	 $off_pompa_D= 3;
 	 $pompa_D =$_POST['pompa_D'];
 	 if ($pompa_D == 'pompa_D_ON') {
 	 	$query3 = "UPDATE kontrol SET pompa4 = $on_pompa_D";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('pompa_D' => $_POST["pompa4"]));
	 	$btn_pompa_D = $statement3->rowCount();
	 		if($btn_pompa_D > 0)
			 {
				echo '<img src="../dist/img/btn_on.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
				
			 }	 
	 } else if ($pompa_D == 'pompa_D_OFF') {
 	 	$query4 = "UPDATE kontrol SET pompa4 = $off_pompa_D";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('pompa_D' => $_POST["pompa4"]));
	 	$btn_pompa_D = $statement4->rowCount();
	 		if($btn_pompa_D > 0)
			 {
				echo '<img src="../dist/img/btn_off.png" height="60" width="60">';
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>