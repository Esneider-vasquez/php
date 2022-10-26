<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <h1>PHP</h1>
        <form action="operacion-7.php" method="get">
            <label for="valor">Nombre del aprendiz</label><input name="nombre" type="text" value="">
            <label for="valor1">Asignatura</label><input name="asignatura" type="text" value="">
            <label for="valor2">Nota final</label><input name="nota" type="text" value="">
            <input type="submit" name="enviar" value="enviar" >
        </form>
    </main>
</body>
</html>

<!-- 

Tener en cuenta que las calificaciones serán del 1 al 10, y se debe mostrar en
pantalla:
• Cuando la calificación sea menor de 7, mostrar el mensaje de «REPROBADO»
• Cuando la calificación sea de 7 o superior mostrar el mensaje de «APROBADO» -->