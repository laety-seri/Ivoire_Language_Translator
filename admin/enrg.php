<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page d'enregistrement admin et sup</title>
  <?php include('links.php') ?>
</head>
<body>
        <div class="container center-div">
            <div class="container row d-flex flex-row justify-content-center mb-8">
                <div class="admin-form shadow p-5">
                    <form id="" action="" method="POST">
                        <center><h3>S'enregistrer</h3></center><br>

                        <div class="col form-group">
                            <label class="font-weight-bold">Nom et Prénom(s)</label>
                            <input type="name" class="form-control" id="nometprenoms" placeholder="Saisir nom et prénom(s)" name="nometprenoms" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Saisir email" name="email" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Mot de passe (par défaut)</label>
                            <input type="password" class="form-control" id="password" placeholder="12345" name="password" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Role</label>
                            <select name="role" id="role" required>
                                <option value="">Définir role</option>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Superviseur">Superviseur</option>
                            </select>
                        </div>

                        <input type="submit" value="Enregistrer" name="Enregistrer" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>

        <?php

include_once('connection.php');



if(isset($_POST['Enregistrer'])){
$nometprenoms = $_POST['nometprenoms'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$role = $_POST['role'];
$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO users (nometprenoms, email, password, role, date)
VALUES ('$nometprenoms', '$email', '$password', '$role', '$date')";

if (mysqli_query($con, $sql)) {

 
    echo '<script language="Javascript">';
    echo 'document.location.replace("./login.php")';
    echo ' </script>';


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}else{
	echo "";
}


mysqli_close($con);

?>


    </body>
</html>