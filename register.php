 <?php
    isset($_GET['id']);
    
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="donor"; // Table name 
$name=$_POST['name'];
$ddob=$_POST['ddob'];
$mdob=$_POST['mdob'];
$ydob=$_POST['ydob'];
$dob=$ydob.'-'.$mdob.'-'.$ddob;
$bloodgroup=$_POST['bloodgroup'];
$mobile=$_POST['mobile'];
$dayphone=$_POST['dayphone'];
$evephone=$_POST['evephone'];
$weight=$_POST['weight'];
$city=$_POST['city'];
$area=$_POST['town'];
$DonorId = $_POST['DonorID'];
$ppassword = $_POST['ppassword'];
if (isset($_POST['suffered1'])){

$checkbox1=$_POST['suffered1'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." ,";  
   };
 }
if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
$email=$_POST['email'];
$dlast=$_POST['dlast'];
$mlast=$_POST['mlast'];
$ylast=$_POST['ylast'];
$date_of_donation=$ylast.'-'.$mlast.'-'.$dlast;

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="INSERT INTO $tbl_name (Donor_name,DonorEmail,Gender,Date_of_Birth,city,area,Date_of_Donation,Donor_mobile,Residence,Office,blood_group,Weight,Any_disease,DonorID,password) VALUES ('$name','$email','$gender','$dob','$city','$area','$date_of_donation','$mobile','$dayphone','$evephone','$bloodgroup','$weight','$chk','$DonorId','$ppassword')";
$result=mysql_query($sql);

$sql="SELECT Donor_ID FROM $tbl_name WHERE DonorID ='$DonorId'" ;
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
			$DonorIID = $row['Donor_ID'];
}


$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
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

        
        //Insert image content into database
        $insert = $db->query("INSERT into certificates (ID,certificate, created) VALUES ('$DonorIID','$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{

    	$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'bloodbank';
        
        $iset = "No"; 
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");



    	$insert = $db->query("INSERT into certificates (ID, created,isset) VALUES ('$DonorIID', '$dataTime','$iset')");
        echo "Please select an image file to upload.";
    }

    header('Location: recordinsert.html');



?>