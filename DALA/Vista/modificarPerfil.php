<?php
session_start();
require '../logica/consulta.php';
require '../logica/conexion.php';

?>
<html>
<head>
<title>Modificando Perfil ...</title>
<link rel="stylesheet" href="../Estilos/bulma.css">
<link rel="stylesheet" href="../Estilos/img.css">
</head>
<body><br><br>

<?php
if ($reg = mysqli_fetch_array($consulta)) {
    ?>
  <div class="prueba" align="center">
  <h1 >Modificar Perfil</h1><br>
    <form action="../logica/modificar.php" method="post">
    <table width="" border="0" align="center">
    <tr>
      <td> Clave:</td>
      <td><?php echo $reg['clave_usuario'] ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ingrese  el nombre:</td>
      <td><input class="input is-rounded is-small" type="text" name="txt_nombreN" value="<?php echo $reg['nombre'] ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ingrese  el Apellido Paterno:</td>
      <td><input class="input is-rounded is-small" type="text" name="txt_apePat" value="<?php echo $reg['apellido_paterno'] ?>"><td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ingrese  el Apellido Materno:</td>
      <td><input class="input is-rounded is-small" type="text" name="txt_apeMat" value="<?php echo $reg['apellido_materno'] ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ingrese  el genero:</td>
      <td><input type="radio" name="rb_sexo" value="Masculino"<?php if ($reg['genero'] == 'Masculino') {
        echo "checked";
    }
    ?>>Masculino
      <input type="radio" name="rb_sexo" value="Femenino"<?php if ($reg['genero'] == 'Femenino') {
        echo "checked";
    }
    ?>>Femenino</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ingrese  el fecha de nacimineto:</td>
      <td><input type="date" name="dt_fecNac" id="dt_fecNac" value="<?php echo $reg['fecha_nacimiento'] ?>" required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ingrese  el correo electronico:</td>
      <td><input class="input is-rounded is-small" type="text" name="txt_correo" value="<?php echo $reg['correo_electronico'] ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Escolaridad:</td>
      <td><input class="input is-rounded is-small" type="text" value="Primaria" disabled='disabled'></td>
      <!--<select class="select is-primary" name="slc_escolaridad" id="slc_escolaridad" value="" disabled='disabled'>
        <td></td>
      <option value="Primaria" selected='selected'>Primaria</option>
    </select></td>-->
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Cambiar la contraseñia:</td>
      <td><input class="input is-rounded is-small" type="text" name="pvs_password1" value="<?php echo $reg['contrasenia'] ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <input class="button is-success is-rounded" type="submit" value="Modificar">
<a href="javascript:CerrarVentana()" class="button is-warning is-rounded">Regresar</a>

</form>

    <?php
} else {
    echo "No existe alumno con dicho email";
}

?>
  </div>
  </body>
</html>

<script>
  function CerrarVentana(){
      window.close();
  }

</script>