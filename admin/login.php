<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page de connexion</title>
  <?php include('links.php') ?>
</head>
<body>
  <br><br>
  <div id="resultat"></div>
  <div class="container center-div">
    <div class="container row d-flex flex-row justify-content-center mb-5">
      <div class="admin-form shadow p-5">

        <form id="" action="" method="POST">
          <center><h3>Se connecter</h3></center><br>
          <div class="col form-group">
          <label class="font-weight-bold">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Saisir email" name="email" required>
          </div>
          <div class="col form-group">
          <label class="font-weight-bold">Mot de passe</label>
          <input type="password" class="form-control" id="password" placeholder="Saisir mot de passe" name="password" required>
          </div>
          <div class="col form-group">
          <label class="font-weight-bold">Role</label>
          <select class="form-control" name ="role" id ="role" required>
          <option value="" >Définir votre role</option>
          <option value="Superviseur">Superviseur</option>
          <option value="Administrateur">Administrateur</option>
          <option value="Opérateur de saisie">Opérateur de saisie</option>
          </select>
          </div><br>
          <input type="submit" id="Connection" value="Connection" name="Connection" class="btn btn-success">
          <br><br>
          <a href="#" class="text-sm">Email ou Mot de passe oublié?</a>
        </form>

      </div>
    </div>
  </div>

  <?php
include_once('connection.php');

if(isset($_POST['Connection'])){
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  
  $row = mysqli_fetch_assoc($result);
	$nometprenoms = $row["nometprenoms"];
	$role = $row["role"];
   $_SESSION['nometprenoms'] = $nometprenoms;
   $_SESSION['role'] = $role;


   header("Location: dbd.php");
  
    } else {
      // echo "Error: " . $sql . "<br>" . mysqli_error($con);
      echo " Email ou mot de passe incorrect " ;
    }

    }else{ 
  
    }


    mysqli_close($con);

    ?> 
 

</body>
</html>