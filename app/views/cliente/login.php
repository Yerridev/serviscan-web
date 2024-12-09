<?php
    // session_start();
    // if(isset($_SESSION['user'])){
    //     header('Location: dashboard.php');
    // }
?>
<section class="login" id="login">
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-container">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="circle-image">
                                <img src="./public/icon/logo.svg" alt="Titulo Logo serviscan" class="serviscan">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <!-- <div class="circle-logo">
                                <img src="icon/logo.svg" alt="Titulo Logo serviscan" class="serviscan">
                            </div> -->
                            <div class="titles">
                                <h2>SISTEMA DE VENTAS DE PRODUCTOS MECÁNICOS</h2>
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
                                <div class="text-center mt-3">
                                        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
