Hola <?php print $_POST['Nombre']; ?> Te Damos la Bienvenida<br>
Tu Nombre de Usuario es: <?php isset($_REQUEST["Nombre_usuario"]) ? print $_POST["Nombre_usuario"] : ""; ?><br>
Tu Contaseña  es: <?php isset($_POST["Contraseña"]) ? print $_POST["Contraseña"] : ""; ?><br>
