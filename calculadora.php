<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <form method="post">
    <table border="1">
        <th colspan="2">CALCULADORA</th>
        <tr><td>Introduzca número 1</td>
            <td><input type="number" name="num1" required></td></tr>
        <tr><td>Introduzca número 2</td>
            <td><input type="number" name="num2" required></td></tr>
        <td><fieldset>
                <legend>Selecciona la operación a realizar</legend>
                <input type="radio" name="operacion" value="suma">Sumar<br>
                <input type="radio" name="operacion" value="resta">Restar<br>
                <input type="radio" name="operacion" value="multiplica">Multiplicar<br>
                <input type="radio" name="operacion" value="divide">Dividir<br>
            </fieldset></td>
        <td colspan="2" align="center"><input type="submit" name="ok" value="Calcular"</td>
    </table>
    </form>
    
        <?php
            if (isset($_POST["ok"])){
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                function operacion(&$n1,&$n2){
                    $resultado=array(
                        'suma'=>$n1+$n2,
                        'resta'=>$n1-$n2,
                        'multiplica'=>$n1*$n2,
                        'divide'=>$n1/$n2
                    );
                    return $resultado;
                }
                $resultado_operacion= operacion($num1, $num2);

                echo "El primer operador es $num1<br>";
                echo "El segundo operador es $num2<br>";
                $boton=$_POST["operacion"];
                switch ($boton) {
                    case "suma":
                        echo "El resulado de numar $num1 + $num2 es " . $resultado_operacion['suma'];
                        break;
                    case "resta":
                        echo "El resulado de restar $num1 - $num2 es " . $resultado_operacion['resta'];
                        break;
                    case "multiplica":
                        echo "El resulado de multiplicar $num1 por $num2 es " . $resultado_operacion['multiplica'];
                        break;
                    case "divide":
                        echo "El resulado de dividir $num1 entre $num2 es " . $resultado_operacion['divide'];
                        break;
                    }
                    }
            //$resultado=suma($num1, $num2);
            //echo "El resultado es $resultado"; 
        ?>
    </body>
</html>
