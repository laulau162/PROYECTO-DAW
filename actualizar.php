<?php 
    include("conection.php");
    $con=conectar();

$id=$_GET['idUsu'];

$sql="SELECT * FROM usuarios WHERE idUsu='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <h1>ACTUALIZAR USUARIO</h1>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idUsu" value="<?php echo $row['idUsu']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombreUsu" placeholder="nombreUsu" value="<?php echo $row['nombreUsu']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="password" placeholder="password" value="<?php echo $row['password']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>