<?php
#Estructuras de control condicionales (IF - IF ELSE):

/*
 * Ejercicio #1 : Escribir un programa que calcule la edad de una persona basado en una fecha de nacimiento.
 */
function calcularEdad()
{
    $fechaNacimiento = new DateTime("2001/09/07");
    $hoy = new DateTime();
    $diferencia = date_diff($fechaNacimiento, $hoy);
    if($diferencia -> format("%y") >= 18) {
        echo "El usuario es mayor de edad, tiene " . $diferencia->format("%y") . " años";
    }else{
        echo "El usuario es menor de edad, tiene " . $diferencia->format("%y") . " años";
    }
}

function calcularEdad2()
{
    $fechaNacimiento = new DateTime("2001/09/07");
    $hoy = new DateTime();
    $edad = $hoy->format("y") - $fechaNacimiento->format("y");
    if ($hoy->format("%m") < $fechaNacimiento->format("%m")){
        $edad--;
    }
    echo "El usuario tiene " . $edad . " años";
}
calcularEdad2();


/*
 * Ejercicio #2 : Escribir un programa en donde se establezcan 2 variables (primerNumero y segundoNumero) y que calculé
 * cuál es el mayor de los dos.
 */
function numeroMayor($primerNumero, $segundoNumero)
{
    if($primerNumero > $segundoNumero){
        echo "El PRIMER numero ingresado es mayor";
    }else if($segundoNumero > $primerNumero){
        echo "El SEGUNDO numero ingresado es mayor";
    }else{
        echo "Ambos numeros son iguales";
    }
}


/*
 * Ejercicio #3 : Escribir un programa en donde se establezca una variable (numeroSeleccionado) y determine si es par o impar
 */
function par($numeroSeleccionado)
{
    if($numeroSeleccionado % 2 == 0){
        echo "El numero seleccionado es PAR";
    }else {
        echo "El numero seleccionado es IMPAR";
    }
}


#Estructuras de control Iterativas (FOR - WHILE):

/*
 * Ejercicio #1 : Escribir un programa en donde se establezca una variable (numeroBase) y calcule su factorial utilizando
 * un bule while
 */
function factorial($numeroBase)
{
    $factorial = 1;
    $i = 1;
    while ($i <= $numeroBase){
        $factorial *= $i;
        $i++;
    }
    echo "El resultado de " . $numeroBase . "! es: " . $factorial;
}


/*
 * Ejercicio #2 : Escribir un programa que genere 20 números aleatorios y los ordene de mayor a menor, utilizando ciclos for
 */
function ordenarNumeros()
{
    $numerosAleatorios = [];
    for ($i = 0; $i < 20; $i++){
        $numerosAleatorios[] = rand(1,50);
    }
    rsort($numerosAleatorios);
    echo  "20 numeros aleatorios ordenados de mayor a menor:\n";
    foreach ($numerosAleatorios as $numero){
        echo $numero . ", ";
    }
}


#Array Asociado y Foreach

/*
 * Ejercicio #1 : Escribe un programa en donde llenes un array asociativo con datos de 10 alumnos de la siguiete manera:
 * 'alumno' => 'nombre del alumno', 'curso' => 'nombreCurso', 'nota' => 'xx' y posteriormente debes recorrerlo para mostrar
 * todos los datos de los alumnos
 */

function datosAlumnos()
{
    $datosAlumnos = array(
        array(
            'alumno' => 'Katherine Flores',
            'curso' => 'Programacion III',
            'nota' => 84
        ),
        array(
            'alumno' => 'Michonne Hawthorne',
            'curso' => 'Microeconomia',
            'nota' => 93
        ),
        array(
            'alumno' => 'Rick Grimes',
            'curso' => 'Progamacion II',
            'nota' => 81
        ),
        array(
            'alumno' => 'Daryl Dixon',
            'curso' => 'Calculo II',
            'nota' => 95
        ),
        array(
            'alumno' => 'Carol Peletier',
            'curso' => 'Estadistica I',
            'nota' => 88
        ),
        array(
            'alumno' => 'Negan Smith',
            'curso' => 'Fisica II',
            'nota' => 82
        ),
        array(
            'alumno' => 'Margaret Greene Rhee',
            'curso' => 'Fisica I',
            'nota' => 81
        ),
        array(
            'alumno' => 'Glenn Rhee',
            'curso' => 'Programacion I',
            'nota' => 87
        ),
        array(
            'alumno' => 'Morgan Jones',
            'curso' => 'Calculo I',
            'nota' => 87
        ),
        array(
            'alumno' => 'Madison Clark',
            'curso' => 'Proceso Administrativo',
            'nota' => 97
        )
    );

    foreach ($datosAlumnos as $alumno){
        echo "Alumno: " . $alumno['alumno'] . "\n";
        echo "Curso: " . $alumno['curso'] . "\n";
        echo "Nota: " . $alumno['nota'] . "\n\n";
    }
}


function main()
{
    $x=1;
    do{
        echo "\n---------- MENU PRINCIPAL ----------\n";
        echo "1. Calcular la edad\n";
        echo "2. Determinar cual es el numero mayor\n";
        echo "3. Determinar si es par o impar\n";
        echo "4. Calcular el factorial de un numero\n";
        echo "5. Generar 20 numeros aleatorios\n";
        echo "6. Array de alumnos\n";
        echo "0. Salir\n";
        fscanf(STDIN, "%d", $x);
        switch ($x){
            case 1:
                echo "\n-> Calcular la edad\n";
                calcularEdad();
                break;
            case 2:
                echo "\n-> Determinar cual es el numero mayor\n";
                numeroMayor(7,9);
                break;
            case 3:
                echo "\n-> Determinar si es par o impar\n";
                par(11);
                break;
            case 4:
                echo "\n-> Calcular el factorial\n";
                factorial(7);
                break;
            case 5:
                echo "\n-> Generar 20 numeros aleatorios\n";
                ordenarNumeros();
                break;
            case 6:
                echo "\n-> Array de alumnos\n";
                datosAlumnos();
                break;
            case 0:
                echo "\nSaliendo...";
                break;
            default:
                echo "Opcion incorrecta, intentelo nuevamente";
        }

    }while($x!=0);
}

main();