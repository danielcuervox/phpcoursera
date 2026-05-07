<?php
if (isset($_POST['operacion'])) {
    // AMPLIACIÓN: Evitar inyección SQL (quitar #)
    $n1 = str_replace('#', '', $_POST['num1']);
    $n2 = str_replace('#', '', $_POST['num2']);
    $op = $_POST['operacion'];
    $resultado = 0;

    // Mensaje inicial obligatorio del PDF
    echo "<script>console.log('Mensaje informa: Iniciando cálculo');</script>";

    // Validación: Comprobar que son números

    try{
        if (!is_numeric($n1) || !is_numeric($n2)) {
                echo "<script>console.warn('Mensaje advierte: Introduce un valor numérico');</script>";
                $resultado = "Error: Datos no numéricos";
        } else {

            switch ($op) {
                case "sumar":
                    $resultado = $n1 + $n2;
                    echo "<script>console.log('Suma realizada');</script>";
                    break;
                case "restar":
                    $resultado = $n1 - $n2;
                    echo "<script>console.log('Resta realizada');</script>";
                    break;
                case "multiplicar":
                    $resultado = $n1 * $n2;
                    echo "<script>console.log('Multiplicación realizada');</script>";
                    break;
                case "dividir":
                    if ($n2 != 0) {
                        $resultado = $n1 / $n2;
                        echo "<script>console.log('División realizada');</script>";
                    } else {
                        $resultado = "Indefinido: no se puede dividir por 0";
                        echo "<script>console.error('Mensaje error: División por cero');</script>";
                    }
                    break;
            }
        }
    }catch(Exception $e){
        $resultado = "Error: " . $e->getMessage();
            echo "<script>console.error('Capturado en PHP: " . $e->getMessage() . "');</script>";
        }
    }

    
    echo "<script>console.log('Tarea finalizada.');</script>";

    // Mostramos el resultado 
    echo "<h1>Resultado del cálculo: $resultado</h1>";
    echo "<br><a href='pagina.html'>Resetear resultado</a>";

?>