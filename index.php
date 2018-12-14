<!DOCTYPE html>
<html>
<head>
    <title>Encuesta I+D+i Laboratorios UTFSM</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form>
        <table id="DatosContestador">
                <tr>
                    <th>Identificación de la persona contestando la encuesta.</th>            
                </tr>
                <tr>
                    <td>Nombre Completo: </td><td><input type="text" id="fullName" name="fullName"></td>
                </tr>
                <tr>
                    <td>Rut: </td><td><input type="text" id="rut" name="rut"></td>
                </tr>
                <tr>
                    <td>Email: </td><td><input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td>Telefono: </td><td><input type="text" id="telefono" name="telefono"></td>
                </tr>
            </table>
            <table id="datosLab">
                <tr>
                    <th>Identificación del laboratorio.</th>            
                </tr>
                <tr>
                    <td>Nombre: </td><td><input type="text" id="labName" name="labName"></td>
                </tr>
                <tr>
                    <td>Descripción: </td><td><textarea minlenght="300" maxlength="500" name="descrLab" form="DatosContestador">Enter text here...</textarea></td>
                </tr>
            </table>
            <table id="pertDepto">
                <tr>
                    <th>¿Pertenece a un departamento?</th>            
                </tr>
                <tr>
                    <td>SI: <input type="radio" id="deptoSI" name="deptoSI"></td>
                    <td>NO: <input type="radio" id="deptoNO" name="deptoNO"></td>
                </tr>
            </table>
            <table id="Depto">
                <tr>
                    <th>Identificación del laboratorio.</th>            
                </tr>
                <tr>
                    <td>Nombre: </td><td><input type="text" id="labName" name="labName"></td>
                </tr>
                <tr>
                    <td>Descripción: </td><td><textarea minlenght="300" maxlength="500" name="descrLab" form="DatosContestador">Enter text here...</textarea></td>
                </tr>
            </table>
    </form>
</body>
</html>
