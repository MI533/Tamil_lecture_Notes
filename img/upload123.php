<?php
 $file_path = "C:/xampp/htdocs/img/upload/";
 $email=$_POST['email'];
      $imageName = 'test' .".mp3";
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path.$imageName) ){
       $out = array();

$value = "python tmp.py ". $email;

$command = escapeshellcmd($value);

//echo $command;

//exec('bash -c "exec nohup setsid python3 main.py > /dev/null 2>&1 &"',$out,$result);
for( $i = 0; $i<2; $i++ ) {
exec($command,$out,$result);
}
//echo $email."<br>";

//echo $result."<br>";

//print_r($out);

// foreach($out as $line) {
  
//     echo $line."\n <br>";
  
// }php
include('success.html');
    } else{
        //echo "fail";
    }
    //echo $email;
   
  ?>