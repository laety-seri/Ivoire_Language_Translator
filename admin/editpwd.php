<?php
session_start(); include("connection.php");

if (isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $password = $row['password'];
        $date = date("Y-m-d h:i:s");
    }
 
}

if (isset($_POST['Modifier'])){

    $id = $_GET['id'];
    $newpassword = md5($_POST['newpwd']);
	$date = date("Y-m-d h:i:s");

    $sql = "UPDATE users SET password = '$newpassword', date = '$date' WHERE id = $id";
    
    if (mysqli_query($con, $sql)) {
        
        echo '<script language="Javascript">';
              echo 'document.location.replace("./dbd.php")'; // -->
              echo ' </script>';
      }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Modifier mot de passe</title>
        <?php include('links.php') ?>
    </head>
    <body>
        <div class="container center-div">
        
            <div class="container row d-flex flex-row justify-content-center mb-8">
                <div class="admin-form shadow p-5">

                    <form id="myForm" action="editpwd.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <center><h3>Modifier mot de passe</h3></center><br>
                    <div class="row">
                        <div class="col form-group">
                        <label class="font-weight-bold">Mot de passe actuel</label>
                        <input type="password" value="" class="form-control" id="langue" placeholder="Mot de passe actuel" name="crrtpwd">
                        </div>
                        <div class="col form-group">
                        <label class="font-weight-bold">Nouveau mot de passe</label>
                        <input type="password" value="" class="form-control" id="langue" placeholder="Saisir nouveau mot de passe" name="newpwd">
                        </div>
                        <div class="col form-group">
                        <label class="font-weight-bold">Confirmer mot de passe</label>
                        <input type="password" value="" class="form-control" id="langue" placeholder="Saisir nouveau mot de passe" name="cfrmpwd">
                        </div>
                    </div>
                    <input type="submit" name= "Modifier" class="btn bg-success text-dark" id="Modifier" value="Modifier">
                    </form>

                </div> 
            </div>

        </div>
    </body>
</html>
