<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>
    <?php
    $name = $email = $phone = $age = $shoeSize = $heigh = $birthDate = $hair = $dateDay = $hour = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = checkData($_POST["name"]);
        $email = checkData($_POST["email"]);
        $phone = checkData($_POST["phone"]);
        $age = checkData($_POST["age"]);
        $shoeSize = checkData($_POST["shoeSize"]);
        $heigh = checkData($_POST["heigh"]);
        $birthDate = checkData($_POST["birthDate"]);
        $hair = checkData($_POST["hair"]);
        $dateDay = checkData($_POST["dateDay"]);
        $hour = checkData($_POST["hour"]);
     }
     
    function checkData($data) {
        // <!-- saco espacios de los costados -->
        $data = trim($data);
        // <!-- saca barras de un string -->
        $data = stripslashes($data);
        // <!-- convierte caracteres especiales en entidades HTML -->
        $data = htmlspecialchars($data);
        return $data;
     }
    ?>
    <h1>Formulario para Solicitud de Turno</h1>
    <form  method="POST">
        <label for="name">Nombre del Paciente</label>
        <input type="text" name="name" id="name" required /><br>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" required /><br>
        <label for="phone">Teléfono</label>
        <input type="number" name="phone" id="phone" required> <br>
        <label for="age">Edad</label>
        <input type="number" name="age" id="age"><br>
        <label for="shoeSize">Talla del Calzado</label>
        <input type="number" name="shoeSize" id="shoeSize" value="20 " min="20" max="45"><br>
        <label for="heigh">Altura</label>
        <input type="range" name="heigh" id="heigh" min="100" max="250"><br>
        <label for="birthDate">Fecha de Nacimiento</label>
        <input type="date" name="birthDate" id="birthDate" required><br>
        <label for="hair">Color de Pelo</label>
        <select name="hair" id="hair">
            <option value="" disabled selected>Seleccione Una Opción</option>
            <option value="Negro">Negro</option>
            <option value="Rubio">Rubio</option>
            <option value="Marron">Marron</option>
        </select><br>
        <label for="dateDay">Fecha del Turno</label>
        <input type="date" name="dateDay" id="dateDay"><br>
        <label for="hour">Hora del Turno</label>
        <input type="time" name="hour" id="hour" value="08:00" min="08:00" max="17:00" step="900"><br>
        <input type="reset" value="Limpiar">
        <input type="submit" value="Enviar">
    </form>

    <?php
         echo "<h2>Sus datos ingresados para el Turno :</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $phone;
         echo "<br>";
         
         echo $age;
         echo "<br>";
         
         echo $shoeSize;
         echo "<br>";
         
         echo $heigh;
         echo "<br>";
         
         echo $birthDate;
         echo "<br>";
         
         echo $hair;
         echo "<br>";
         
         echo $dateDay;
         echo "<br>";
         
         echo $hour;
         echo "<br>";

      ?>
</body>

</html>