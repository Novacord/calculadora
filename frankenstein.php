<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matameeee no quiero vivir</title>
    <style>
        form {


width: 100%;

max-width: 400px;

text-align: center;

border: solid 1px #c2c2c2;

padding-bottom: 10px;

padding-top: 10px;

margin: auto;

margin-top: 300px;

background: #fafafa;

}

input[type=textfield] {

  width: 75%;

  padding: 20px 32px;

  font-size: 16px;

  margin: 8px 0;

  border: 1px solid silver;

  border-radius: 1px;

  text-align: left;

  color: #333;

  outline: none;

  background: rgb(159, 243, 243);

}

input[type=button], input[type=submit], input[type=reset] {

  background-color: rgb(159, 243, 243);

  border: none;

  color: black;

  padding: 16px 32px;

  font-size: 16px;

  min-width: 21%;

  text-decoration: none;

  margin: 4px 2px;

  cursor: pointer;

}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {

background-color: rgb(15, 90, 112);

}
    </style>
</head>
<body>
    <!-- <form method="POST">
        <input type="text" name="operaciones" placeholder="Ingrese su nombre"><br>
        <input type="submit" value="Enviar">
    </form> -->
<!-- Documento HTML-->

<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" /><!-- Etiqueta para adaptar a @media -->

  <LINK REL="stylesheet" TYPE="text/css" HREF="estiloscalculadora.css"><!-- Enlace hoja estilos -->

</head>

<body>
<?php
    ini_set('display_errors', 0);
    $resultado = eval("return ".$_POST["ans"]." ;");
?>
<!-- Empieza codigo calculadora html-->

  <form name="calculator" method="POST">

    <input type="textfield" name="ans" value="<?php echo isset($resultado) ?>">

    <br>

    <input type="button" value="1" onClick="document.calculator.ans.value+='1'">

    <input type="button" value="2" onClick="document.calculator.ans.value+='2'">

    <input type="button" value="3" onClick="document.calculator.ans.value+='3'">

    <input type="button" value="+" onClick="document.calculator.ans.value+='+'">

    <br>

    <input type="button" value="4" onClick="document.calculator.ans.value+='4'">

    <input type="button" value="5" onClick="document.calculator.ans.value+='5'">

    <input type="button" value="6" onClick="document.calculator.ans.value+='6'">

    <input type="button" value="-" onClick="document.calculator.ans.value+='-'">

    <br>

    <input type="button" value="7" onClick="document.calculator.ans.value+='7'">

    <input type="button" value="8" onClick="document.calculator.ans.value+='8'">

    <input type="button" value="9" onClick="document.calculator.ans.value+='9'">

    <input type="button" value="*" onClick="document.calculator.ans.value+='*'">

    <br>

    <input type="button" value="/" onClick="document.calculator.ans.value+='/'">

    <input type="button" value="0" onClick="document.calculator.ans.value+='0'">

    <input type="button" value="√" onClick="document.calculator.ans.value+='sqrt('">

    <input type="submit" value="=">

    <br>

    <input type="button" value="^2" onClick="document.calculator.ans.value+='**2'">
    
    <input type="button" value="sin" onClick="document.calculator.ans.value+='sin('">

    <input type="button" value="cos" onClick="document.calculator.ans.value+='cos('">

    <input type="button" value="c" onClick="document.calculator.ans.value=' '">

    <input type="button" value="(" onClick="document.calculator.ans.value+='('">

    <input type="button" value=")" onClick="document.calculator.ans.value+=')'">

    <input type="button" value="." onClick="document.calculator.ans.value+='.'">

    <input type="button" value="<" onClick="document.calculator.ans.value = document.calculator.ans.value.slice(0, document.calculator.ans.value.length - 1)">

    </form>

</body>
</html>