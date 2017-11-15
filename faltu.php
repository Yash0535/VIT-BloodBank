header('Location: recordinsert.html');
header('Location: Donorsdetails.php');
viewcertificate.php?donor_id=<?php echo $row['Donor_ID']?>
$sql="INSERT INTO $tbl_name (Donor_name,DonorEmail,Gender,Date_of_Birth,city,area,Date_of_Donation,Donor_mobile,Residence,Office,blood_group,Weight,Any_disease,DonorID,password) VALUES ('$name','$email','$gender','$dob','$city','$area','$date_of_donation','$mobile','$dayphone','$evephone','$bloodgroup','$weight','$chk','$DonorId','$ppassword')";
$result=mysql_query($sql);

$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'bloodbank';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");



    	$insert = $db->query("INSERT into certificates (ID,certificate, created) VALUES ('$DonorIID','null', '$dataTime')");


    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button><a href='#'>Button Text</a></button>
