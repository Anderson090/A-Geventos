
<?php
$misDatos=isset($_REQUEST['campos'])?$_REQUEST['campos']:[];
var_dump($misDatos);?>

<html>
<body>
    <form>
        <input type="hidden" name="campos[]" value="nombre">
        <input type="hidden" name="campos[]" value="sisop">
        <input type="hidden" name="campos[]" value="nro_ip">
    
   <input type="submit">
</form>

</body>
</html>
