<!DOCTYPE html>
<html lang="en">
<?php include('./componentes/module/head.php') ?>


<?php 

$errores = isset($_SESSION["error"])? $_SESSION["error"]: [];
$goodData = isset($_SESSION["datosRegistro"])? $_SESSION["datosRegistro"]: [];
// var_dump($goodData);exit;

?>

<body>
    <?php include('./componentes/module/header.php'); ?>
    <div class="fondo">
        <div class="container">
            <div class="registroTitle">
                <h1>Bienvenido a nuestro formulario de registro!</h1>
            </div>
            <form action="./componentes/module/validation.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name">
                        Nombre
                    </label>
                    <input type="text" name="name" value="<?php if(isset($goodData["name"])) echo $goodData["name"]; ?>" validate>
                    <?php if(isset($errores["name"])){
                        foreach ( $errores["name"] as $key => $value ){
                            echo "<li style='color:red;'><small>$value</small></li>";
                        }
                    } ?>
                </div>
                <div>
                    <label for="lastname">
                        Apellido
                    </label>
                    <input type="text" name="lastname" value="<?php if(isset($goodData["lastname"])) echo $goodData["lastname"]; ?>" validate>
                    <?php if(isset($errores["lastname"])){
                        foreach ( $errores["lastname"] as $key => $value ){
                            echo "<li style='color:red;'><small>$value</small></li>";
                        }
                    } ?>
                </div>
                <div>
                    <label for="fotoCarnet">
                        Foto de Perfil
                    </label>
                    <input type="file" name="fotoCarnet" validate>
                    <?php if(isset($errores["password"])){
                        $imgProblem = $errores["imgProfile"];
                        echo "<li style='color:red;'><small>$imgProblem</small></li>";
                    } ?>
                </div>
                <div>
                    <label for="password">
                        Contraseña
                    </label>
                    <input type="password" name="password" validate>
                    <?php if(isset($errores["password"])){
                        foreach ( $errores["password"] as $key => $value ){
                            echo "<li style='color:red;'><small>$value</small></li>";
                        }
                    } ?>
                </div>
                <div>
                    <label for="password2">
                        Repita la contraseña
                    </label>
                    <input type="password" name="password2" validate>
                </div>
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input type="email" name="email" value="<?php if(isset($goodData["email"])) echo $goodData["email"]; ?>" validate>
                    <?php if(isset($errores["email"])){
                        foreach ( $errores["email"] as $key => $value ){
                            echo "<li style='color:red;'><small>$value</small></li>";
                        }
                    } ?>
                </div>
                <div>
                    <label for="pais">
                        Pais
                    </label>
                    <input type="text" name="pais" value="<?php if(isset($goodData["pais"])) echo $goodData["pais"]; ?>" validate>
                </div>
                <div>
                    <label for="provincia">
                        Provincia
                    </label>
                    <input type="text" name="provincia" value="<?php if(isset($goodData["provincia"])) echo $goodData["provincia"]; ?>" validate>
                </div>
                <div>
                    <label for="localidad">
                        Localidad
                    </label>
                    <input type="text" name="localidad" value="<?php if(isset($goodData["localidad"])) echo $goodData["localidad"]; ?>" validate>
                </div>
                <div>
                    <label for="birthday">
                        Fecha de Nacimiento
                    </label>
                    <input type="date" name="birthday" value="<?php if(isset($goodData["birthday"])) echo $goodData["birthday"]; ?>" validate>
                    <?php if(isset($errores["age"])){
                        $ageProblem = $errores["age"];
                        echo "<li style='color:red;'><small>$ageProblem</small></li>";
                    } ?>
                </div>
                <button name="btnRegistro" class="waves-effect waves-light btn">Confirmar</button>
                <button name="btnCancelRegistro" class="waves-effect waves-light btn red">Cancelar</button>
            </form>
        </div>
    </div>
    <?php 
        $_SESSION["error"] = []; 
        $_SESSION["datosRegistro"] = [];
    ?>
    <?php include('./componentes/module/footer.php'); ?>
</body>

</html>