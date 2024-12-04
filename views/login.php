<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Serviscan S.A.C</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/login.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-container">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="circle-image">
                                <img src="../public/icon/logo.svg" alt="Titulo Logo serviscan" class="serviscan">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <!-- <div class="circle-logo">
                                <img src="icon/logo.svg" alt="Titulo Logo serviscan" class="serviscan">
                            </div> -->
                            <div class="titles">
                                <h2>SISTEMA DE VENTAS DE PRODUCTOS MECÁNICOS</h2>
                                <h4 class="mb-3">SERVISCAN S.A.C</h4>
                            </div>
                            <div class="form-login">
                                <div>
                                    <h5>INICIAR SESIÓN</h5>
                                    <p>COLOCA TUS DATOS CORRECTAMENTE</p>
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Usuario">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <button type="submit" class="btn custom-button">Ingresar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
