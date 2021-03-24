<?php
session_start();
?>

<?php
include("connection.php");

if (isset($_GET['id'])){

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_array($result);
    $nometprenoms = $row['nometprenoms'];
    $email = $row['email'];
    $password = md5($row['password']);
    $role = $row['role'];
	$date = date("Y-m-d h:i:s");
}
 
}

if (isset($_POST['Modifier'])){
    $id = $_GET['id'];
    $nometprenoms = $_POST['nometprenoms'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
	$date = date("Y-m-d h:i:s");

	$query = "UPDATE users SET nometprenoms = '$nometprenoms', email = '$email', password = '$password', role = '$role', date = '$date' WHERE id = $id";
	mysqli_query($con, $query);
	header("Location: dbd.php");

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Modifier un texte</title>
        <?php include('links.php') ?>
    </head>
    <body>
    <div class="container center-div">
	  
      <div class="container row d-flex flex-row justify-content-center mb-8">
	    <div class="admin-form shadow p-5">


        <form id="myForm" action="edituser.php?id=<?php echo $_GET['id']; ?>" method="POST">

          <center><h3>Modifier un utilisateur</h3></center><br>
          <div class="col form-group">
                            <label class="font-weight-bold">Nom et Prénom(s)</label>
                            <input type="name" value="<?php echo $nometprenoms; ?>" class="form-control" id="nometprenoms" placeholder="Saisir nom et prénom(s)" name="nometprenoms" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" value="<?php echo $email; ?>" class="form-control" id="email" placeholder="Saisir email" name="email" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Role</label>
                            <select name="role" id="role" required>
                                <option value="">Modifier le role</option>
                                <option value="Opérateur de saisie">Opérateur de saisie</option>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Superviseur">Superviseur</option>
                            </select>
                        </div>
       <input type="submit" name= "Modifier" class="btn bg-success text-dark" id="Modifier" value="Modifier">
     </form>
   </div>
   </div> 
   </div>

  </div>
  </body>
</html>
