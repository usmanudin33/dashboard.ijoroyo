<?php
 $servername = "dashboard.ijoroyo.id";		//example = localhost or 192.168.0.0
    $username = "u2899107_ijoroyo";		//example = root
    $password = "@Margonda100";	
    $dbname = "u2899107_ijoroyo";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $d = date("Y-m-d");
    $t = date("H:i:s");
    $date = new Datetime();

$timestamp = date('Y-m-d H:i:s');

    if(!empty($_POST['pompa_A_ON']))
    {

    $pompa_A_on = $_POST['pompa_A_ON'];
    $pompa_A_off = $_POST['pompa_A_OFF'];
    $pompa_B_on = $_POST['pompa_B_ON'];
    $pompa_B_off = $_POST['pompa_B_OFF'];
    $pompa_C_on = $_POST['pompa_C_ON'];
    $pompa_C_off = $_POST['pompa_C_OFF'];
    $pompa_D_on = $_POST['pompa_D_ON'];
    $pompa_D_off = $_POST['pompa_D_OFF'];
    $pompa_E_on = $_POST['pompa_E_ON'];
    $pompa_E_off = $_POST['pompa_E_OFF'];
  
    $nutrisi_A = $_POST['nutrisi_A'];
    $ph_A = $_POST['ph_A'];
    $nutrisi_B = $_POST['nutrisi_B'];
    $ph_B = $_POST['ph_B'];
    $nutrisi_C = $_POST['nutrisi_C'];
    $ph_C = $_POST['ph_C'];
    $nutrisi_D = $_POST['nutrisi_D'];
    $ph_D = $_POST['ph_D'];
    $nutrisi_E = $_POST['nutrisi_E'];
    $ph_E = $_POST['ph_E'];
   

      $sql = "INSERT INTO `otomasi`(`no`, `pompa_1_ON`, `pompa_1_OFF`,`pompa_2_ON`, `pompa_2_OFF`,`pompa_3_ON`, `pompa_3_OFF`,`pompa_4_ON`, `pompa_4_OFF`, `nutrisi_1`, `ph_1`,`nutrisi_2`, `ph_2`,`nutrisi_3`, `ph_3`,`nutrisi_4`, `ph_4`, `waktu`)  VALUES ('','$pompa_A_on','$pompa_A_off','$pompa_B_on','$pompa_B_off','$pompa_C_on','$pompa_C_off','$pompa_D_on','$pompa_D_off','$nutrisi_A','$ph_A','$nutrisi_B','$ph_B','$nutrisi_C','$ph_C','$nutrisi_D','$ph_D','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "Sukses..";
  }



  // $jadwal_penyiraman = mysqli_query($conn,"SELECT `no`, `waktu_pompa_on`, `waktu_pompa_off`, `waktu` FROM `otomasi` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($jadwal_penyiraman))
  //   {    
  //   $waktu_siram_on = $row["waktu_pompa_on"];
  //   $waktu_siram_off = $row["waktu_pompa_off"];
  //   $waktu = $row["waktu"];
  //   }
    
  // $nutrisi = mysqli_query($conn,"SELECT `nutrisi`,`waktu` FROM `sensor` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($nutrisi))
  //   {
  //   $data_nutrisi =$row['nutrisi'];
  //   }
  // $ph = mysqli_query($conn,"SELECT `ph`,`waktu` FROM `sensor` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($ph))
  //   {
  //     echo $data_ph =$row['ph'];
  //   }
  // $cahaya = mysqli_query($conn,"SELECT `cahaya`,`waktu` FROM `sensor` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($cahaya))
  //   {
  //     echo $data_cahaya = $row['cahaya'];
  //   }
  
  // $dt_suhu = mysqli_query($conn,"SELECT `suhu`,`waktu` FROM `sensor` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($dt_suhu))
  //   {
  //      echo $suhu = $row['suhu'];
  //   }
  // $waterlevel = mysqli_query($conn,"SELECT `waterlevel`,`waktu` FROM `sensor` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($waterlevel))
  //   {

  //     echo $data_tinggi_air = $row['waterlevel'];
  //   }
  // $waterflow = mysqli_query($conn,"SELECT `waterflow`,`waktu` FROM `sensor` ORDER BY waktu DESC LIMIT 1");
  // while($row = mysqli_fetch_array($waterflow))
  //   {
  //     echo $data_waterflow = $row['waterflow'];

  //   } 

  // $swaktu = "SELECT waktu FROM sensor ORDER BY waktu DESC LIMIT 1";
  //   $result = $conn->query ($swaktu);

  //   $row = $result->fetch_assoc();
  //   $waktu_server = $row["waktu"];
    

  // $show = "SELECT tombol_auto FROM kontrol";
  //   $result = $conn->query ($show);

  //   $row = $result->fetch_assoc();
  //   $tombol = $row["tombol_auto"];

    
  //   $pompa_siram_ON =2;
  //   $pompa_siram_OFF =3;


  // $new_server = strtotime($waktu_server);
  //   $new_req = strtotime($waktu_siram_on);
  //   $new_end = strtotime($waktu_siram_off);

  //   echo $waktu_server;

  //   echo $waktu_siram_on;

  //   echo $waktu_siram_off;
   


  //   if ($tombol == 2) {
  //     echo "tombol otomatis diaktifkan <br>";
  //     if ($new_server > $new_req && $new_server < $new_end) {
  //       $update_pompa_on = "UPDATE `kontrol` SET `pomp_tank`= $pompa_siram_ON"; 
  //         if ($conn->query($update_pompa_on) === TRUE) {
  //             echo "Pompa tangki Hidup <br>";
  //              if(intval($data_nutrisi) > 1400){
  //                $update_valve_on="UPDATE kontrol SET nut_a=3, pomp_BIG =2, buzzer=2";
  //                  if ($conn->query($update_valve_on) === TRUE){
  //                   echo "<br>valve aktif <br><br>";
  //                  }
  //                  else {
  //                     echo "Error: " . $update_valve_on . "<br>" . $conn->error;
  //                 }
  //           }else if (intval($data_nutrisi) >= 800 ){
  //               echo "Nutrisi Terpenuhi: ";
  //                 $update_valve_off="UPDATE kontrol SET nut_a=3, pomp_BIG = 3, buzzer=3";
  //                  if ($conn->query($update_valve_off) === TRUE){

  //                   echo "valve non aktif (AMAN) <br>";
  //                   echo "Pompa Nutrisi mati <br>";
  //                  }
  //                  else {

  //                     echo "Error: " . $update_valve_off . "<br>" . $conn->error;
  //                 }
  //            }else if (intval($data_nutrisi) < 800) {
  //                 # code...
  //                 echo "Nutrisi Kurang : ";
  //                 $update_nut="UPDATE kontrol SET nut_a = 2, buzzer=3, pomp_BIG =3";
  //                  if ($conn->query($update_nut) === TRUE){
  //                   echo "pompa nutrisi aktif selama 4 detik<br>";
  //                  }
  //                  else {

  //                     echo "Error: " . $update_nut . "<br>" . $conn->error;
  //                 }
  //            }else{

  //               }

  //            if ($data_ph >= 6.5) {
  //             echo "ph ASAM kurang.. :  ";
  //             $update_ph="UPDATE kontrol SET ph_a = 2, ph_b = 3";
  //                  if ($conn->query($update_ph) === TRUE){
  //                   echo "sedang menambahkan pH Asam <br>";
  //                  }
  //                  else {
  //                     echo "ph asam gagal ditambahkan <br>";
  //                     echo "Error: " . $update_ph . "<br>" . $conn->error;
  //                 }
  //            } else if ($data_ph >= 5) {
  //             echo "pH Terpenuhi <br>";
  //             # code...
  //            } else if ($data_ph < 5) {
  //             $update_ph="UPDATE kontrol SET ph_a = 3, ph_b = 2";
  //                  if ($conn->query($update_ph) === TRUE){
  //                   echo "sedang menambahkan pH Basa <br>";
  //                  }
  //                  else {
  //                     echo "ph asam gagal ditambahkan <br>";
  //                     echo "Error: " . $update_ph . "<br>" . $conn->error;
  //                 }
  //            } else {
  //             # code...
  //            }


  //           if ($data_waterflow >= 1) {
  //             echo "terdapat aliran air <br>";
  //           } else if ($data_waterflow <= 0){
  //             echo "tidak terdapat aliran air, silahkan cek manual pompa tangki <br>";
  //             $cek_pompatangki="SELECT pomp_tank FROM kontrol";
  //             $result = $conn->query ($cek_pompatangki);
  //                   $row = $result->fetch_assoc();
  //                   $row = $row["pomp_tank"];
  //                   $status_pompa = $row;
  //                   if ($status_pompa = 3) {
  //                     echo "pompa sedang dihidupkan :..... <br>";
  //                     $update_pompa="UPDATE kontrol SET pomp_tank = 2";
  //                        if ($conn->query($update_pompa) === TRUE){
  //                         echo "status pompa tangki sudah aktif <br><br>";
  //                        }
  //                        else {
  //                           echo "error cek manual.. <br>";
  //                           echo "Error: " . $update_pompa . "<br>" . $conn->error;
  //                         }
  //                   } else {
  //                     echo "pompa tangki sudah aktif<br><br>";
  //                   }
                    
  //           }else{

  //           }


  //         if ($data_tinggi_air >= 60) { //perhitungan dari bawah
  //             echo "Valve mati ";

  //             $cek_pompatangki="SELECT pomp_BIG FROM kontrol";
  //             $result = $conn->query ($cek_pompatangki);
  //                   $row = $result->fetch_assoc();
  //                   $row = $row["pomp_BIG"];
  //                   $status_pompa = $row;
  //                   if ($status_pompa = 3) {
  //                     echo "Valve mati, sedang dihidupkan :..... <br>";
  //                     $update_pompa="UPDATE kontrol SET pomp_BIG = 2";
  //                        if ($conn->query($update_pompa) === TRUE){
  //                         echo "status valve sudah aktif <br><br>";
  //                        }
  //                        else {
  //                           echo "error cek manual.. <br>";
  //                           echo "Error: " . $update_pompa . "<br>" . $conn->error;
  //                         }
  //                   } else {
  //                     echo "pompa tangki sudah aktif<br><br>";
  //                   }
                  
  //           } else if ($data_tinggi_air >=42){
  //             echo "tangki air aman (isi cukup) <br><br>";
              
  //           }else{
  //             echo "air Berebihan <br>";
  //            $update_Valve="UPDATE kontrol SET pomp_BIG = 3";
  //               if ($conn->query($update_Valve) === TRUE){
  //                    echo "status Valve dimatikan <br><br>";
  //                    }
  //                    else {
  //                     echo "error cek manual.. <br>";
  //                   echo "Error: " . $update_Valve. "<br>" . $conn->error;
  //                   }

  //           }
            
  //         if ($data_cahaya < 500) {
  //             echo "lampu growthlight sedang dimatikan : ";
  //             $update_lampu="UPDATE kontrol SET lampu = 3";
  //                  if ($conn->query($update_lampu) === TRUE){
  //                   echo "Lampu Growthlight mati <br>";
  //                  }
  //                  else {
  //                     echo "lampu gagal dimatikan <br>";
  //                     echo "Error: " . $update_ph . "<br>" . $conn->error;
  //                 }
  //             # code...
  //            } else {
  //             echo "lampu growthlight dihidupkan : ";
  //             $update_lampu="UPDATE kontrol SET lampu = 2";
  //                  if ($conn->query($update_lampu) === TRUE){
  //                   echo "Lampu Growthlight hidup <br>";
  //                  }
  //                  else {
  //                     echo "lampu gagal dihidupkan <br>";
  //                     echo "Error: " . $update_ph . "<br>" . $conn->error;
  //                 }
  //            }
  //           if ($suhu >= 31) {
  //             echo "suhu panas, kipas akan diaktifkan : ";
  //               $update_kipas="UPDATE kontrol SET kipas = 2";
  //                    if ($conn->query($update_kipas) === TRUE){
  //                     echo "Kipas sudah aktif <br>";
  //                    }
  //                    else {
  //                       echo "Kipas gagal diaktifkan <br>";
  //                       echo "Error: " . $update_kipas . "<br>" . $conn->error;
  //                   }
  //             # code...
  //           } else if ($suhu > 28) {
  //             echo "suhu = ".$suhu."  kipas dimatikan ";
  //               $update_kipas="UPDATE kontrol SET kipas = 3";
  //                    if ($conn->query($update_kipas) === TRUE){
  //                     echo "Kipas sudah mati <br>";
  //                    }
  //                    else {
  //                       echo "gagal mematikan kipas <br>";
  //                       echo "Error: " . $update_kipas . "<br>" . $conn->error;
  //                   }
  //             } else {
  //               $update_kipas="UPDATE kontrol SET kipas = 3";
  //                    if ($conn->query($update_kipas) === TRUE){
  //                     echo "Kipas mati <br>";
  //                    }
  //                    else {
  //                       echo "kipas error <br>";
  //                       echo "Error: " . $update_kipas . "<br>" . $conn->error;
  //                   }
  //             }
                 

  //         } else {
  //             echo "Error: " . $update_pompa_on . "<br>" . $conn->error;
  //         }


  //     } else if ($new_server > $new_end && $new_server > $new_req) {
  //         $update_pompa_off = "UPDATE `kontrol` SET `tombol_auto`= 3, `pomp_tank`= 3,`pomp_BIG`= 3, `kipas`= 3,  ph_a = 3, ph_b = 3, nut_a=3, lampu=3" ; 

  //         if ($conn->query($update_pompa_off) === TRUE) {
  //             echo "Pompa tangki Mati";
  //         } else {
  //             echo "Error: " . $update_pompa_off . "<br>" . $conn->error;
  //         }
  //     } else{
  //         $update_pompa_off = "UPDATE `kontrol` SET pomp_tank=3"; 
  //         if ($conn->query($update_pompa_off) === TRUE) {
  //             echo "Belum ada perintah otomatisasi";
  //         } else {
  //             echo "Error: " . $update_pompa_off . "<br>" . $conn->error;
  //         }
  //     }
  //   } else if ($tombol == 3) {
  //     echo "Tombol Otomatis dinon-aktifkan silahkan pakai tombol manual";
  //     $update_pompa_off="UPDATE kontrol SET nut_a=3, pomp_BIG =3, buzzer=3, pomp_tank=3, lampu=3, kipas=3";
  //                  if ($conn->query($update_pompa_off) === TRUE){
  //                   echo "<br> Semua aktuator mati<br><br>";
  //                  }
  //                  else {
  //                     echo "Error: " . $update_pompa_off . "<br>" . $conn->error;
  //                 }
  //   } else {
  //     # code...
  //   }

$conn->close();
 header("Location:otomasi");
 ?>

 


