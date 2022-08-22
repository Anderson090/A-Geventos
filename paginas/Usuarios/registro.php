
<html>

<body >

     <form method="Post" action="insert.php">
    <fieldset>
        <legend> Registrarse</legend>
        <p>
        <label> Nombre:
        <input type="text" name="Nombre" />
        </label>
        </p>
        
        <p>
        <label style="border: green;">Apellido:
        <input type="text" name="Apellido" />
        </label>
        </p>
        <p>
        <label >Nombre de Usuario:
        <textarea name="Nombre_usuario" cols="20" rows="1" pattern="[a-zA-Z0-9]+" required></textarea>
        </label>
        </p>
        <p>
        <label style="border: green;">Telefono:
        <input type="text" name="Telefono" />
        </label>
        </p>
        <p>
        <label style="border: green;">Email:
        <input type="text" name="Temailelefono" />
        </label>
        </p>
        <p>
        <label style="border: green;">Contrase&ntilde;a:
        <input type="text" name="ContraseÃ±a" />
        </label>
        </p>
        <p>
        <input type="submit" value="Registrar"/>
        </p>
        </fieldset>
        </form>
                   
 </body>
</html>