<?php
include("connection.php");

if(isset($_POST['champ1'])) {
           
      
    $champ1=$_POST['champ1'];
    //$langue_start=$_POST['langue_start'];
   // $langue_end=$_POST['langue_end'];
    

    $checkdata=" SELECT * FROM data WHERE texte1='$champ1' ";


    $query = mysqli_query($con, $checkdata);
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    
    if($count>0){
        echo "<h5><font color = 'green'>" .$row['texte2'] . "<h5>";
       
        echo "<audio controls>" ;
            echo " <source src=" . $row['audio'] . " type='audio/mpeg' >" ;
        echo "</audio>";                

    } else {
        echo"<h5> <font color = 'red'> Traduction non disponible <br><br> <a href='addtextusers.php'>Soumettre une proposition de traduction</a></h5>";
    }
    exit();
}

if(isset($_POST['texte2']))
{
   
    $texte2=$_POST['texte2'];
    

    $checkdata=" SELECT texte2 FROM data WHERE texte2='$texte2' ";


    $query = mysqli_query($con, $checkdata);
    $count = mysqli_num_rows($query);

    if($count>0)
    {
        echo "<sm><font color = 'red'>Cette traduction existe déjà</sm>";

        echo '<script language="Javascript">';
        echo 'document.getElementById("enregistrer").disabled = true'; // -->
        echo ' </script>';

    }
    else
    {
        echo "<sm><font color = 'green'>Vous pouvez enregistrer cette nouvelle traduction</sm>";

        echo '<script language="Javascript">';
        echo 'document.getElementById("enregistrer").disabled = false'; // -->
        echo ' </script>';
    }
    exit();
}

if(isset($_POST['email']))
{
   
    $email=$_POST['email'];
    

    $checkdata=" SELECT email FROM users WHERE email='$email' ";


    $query = mysqli_query($con, $checkdata);
    $count = mysqli_num_rows($query);

    if($count<0)
    {    }
    else {
        echo "<sm><font color = 'red'>Vous n'etes pas administrateur. Créez un compte</sm>";

        echo '<script language="Javascript">';
        echo 'document.getElementById("Connection").disabled = true'; // -->
        echo ' </script>'; 
    }
    exit();
}

if(isset($_POST['langue']))
{
    $langue=$_POST['langue'];

    $checkdata=" SELECT langue FROM langues WHERE langue='$langue' ";

    $query=mysqli_query($con, $checkdata);
    $row = mysqli_num_rows($query);
    if($row>0)
    {
        echo "<sm><font color = 'red'>Cette langue existe déjà</sm>";
        echo '<script language="Javascript">';
        echo 'document.getElementById("Enregistrer").disabled = true'; // -->
        echo ' </script>';
    }
    else
    {
        echo "<sm><font color = 'green'>Vous pouvez enregistrer cette nouvelle langue</sm>";
        echo '<script language="Javascript">';
        echo 'document.getElementById("Enregistrer").disabled = false'; // -->
        echo ' </script>';
    }
    exit();
}

if(isset($_POST['user_pass2']))
{
    if($_POST['user_pass2'] != $_POST['user_pass'])
    {
     echo "Ne correspond pas";
    }
    else
    {
        echo "OK";
    }
    exit();
}

/* If file upload form is submitted 
$status = $statusMsg = '';
if( isset($_POST['submit_form']) )
{

    $status = 'error';
    $path = 'uploads/'; // Repertoire de telechargement
    if(!empty($_FILES["file"]["name"])) { 
        // Obtention information sur le fichier 
        $fileName = basename($_FILES["file"]["name"]); 
        $ext = $_FILES['file']['tmp_name']; 
        
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); 

        // On peut télécharger la même image en utilisant la rand function
        $final_image = rand(1000,1000000).$fileName;
         
        // Autoriser certains formats d'images 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){

            $path = $path.strtolower($final_image); 

            if(move_uploaded_file($ext,$path)){

                $name = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['useremail']);
                $phone = htmlspecialchars($_POST['userphone']);
                $password = htmlspecialchars($_POST['userpass']);
                $sex = $_POST['sex'];
            
                // Insertion des données dans la base de données 
                $insert = mysqli_query($conn,"INSERT into users (username,phone, email, password,sex ,file_name, uploaded_on)
                VALUES ('$name','$phone','$email','$password','$sex','$path', NOW())"); 
                
                if($insert){ 
                    $status = 'success'; 
                    header('Location: signez.php');

                }else{ 
                    echo  'Echec du téléchargement, Veuillez reprendre.'; 
                }  
        }else{ 
            echo 'Désolé, seul les types JPG, JPEG, PNG, & GIF sont autorisés.'; 
        } 
     }else{ 
        echo  'selectionner une image à télécharger.'; 
     }
    }
            
    mysqli_close($conn);

}*/
 
    if( isset($_POST['email']) && isset($_POST['password']) ){

        $email = $_POST['email'];
        $password = md5($_POST['password']);
 
        if($_POST['email'] == $email && $_POST['password'] == $password){ // Si les infos correspondent...
            session_start();
            $_SESSION['user'] = $email;
            echo "Success";    
        }
        else{ // Sinon
            echo "Failed";
        }
    }


?>
