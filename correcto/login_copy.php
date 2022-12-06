<?php
$db = new PDO('mysql:host=pruebas.cjaya8wvxq54.us-east-2.rds.amazonaws.com; dbname=pruebas','admin504','eO08Wh2Dan36');
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = trim($_POST['password']);
    $query = $db->query("SELECT * FROM usuarios WHERE username='{$username}'");
    if($query->rowCount()){  //si encuentra un usuario el contador será mayor a 1
        header("location: administrador.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2>Iniciar sesión</h2>
                                <p>Llantas Max</p>

                                <form action="login_copy.php" method="post" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Nombre de usuario</label>
                                        <input type="text" id="username" name="username" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Entrar">
                                    </div>
                                    <p>no tienes cuenta? <a href="register.php">Registrate</a>.</p>
                                </form>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>

                                        <a href="http://192.168.100.93/">Registrate con Facebook</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>