<?php

require_once 'VehiculosRent.php';
require_once 'Flota.php';
require_once 'Coche.php';
require_once 'Cliente.php';
require_once 'Camion.php';
require_once 'Moto.php';
require_once 'ContratoAlquiler.php';
require_once 'Agencia.php';
require_once 'carga_datos.php';
cargarDatos();

$salir = false;


do{
    print "************************************************\n";
    print "*            \e[32mMenú principal\e[0m                    *\n";
    print "************************************************\n";
    print "Elige una opción: (1,2...):\n";
    print "1. Añadir vehiculos a una flota\n";
    print "2. Mostrar vehículos de una flota\n";
    print "3. Quitar un vehículo de una flota\n";
    print "4. Mostrar Agéncias\n";
    print "0. Salir de la aplicación\n";

    fscanf(STDIN, "%d\n", $opcion);
    switch ($opcion){
        case 1:
            addVehiculoToFlota();
            break;
        case 2:
            mostrarVehiculosFlota();
            break;
        case 3:
            quitarVehiculoFlota();
            break;
        case 4:
            mostrarAgencias();
            break;
        case 0:
            $salir = true;
    }
}while(!$salir);

function addVehiculoToFlota()
{
    global $VR;
    do {
        echo "Añadir una vehiculo a la flota\n";
        //Pedir y guardar datos el Vehiculo
        print "Matricula: ";
        $matricula = fgets(STDIN);//TODO comprobar si el vehículo existe y mostrar en que flota está
        if ($VR->vehiculoExists($matricula)) {
            echo "Esta matricula ya existe\n";
            continue;
        }
        print "Marca: ";
        $marca = fgets(STDIN);
        print "Modelo: ";
        $modelo = fgets(STDIN);

        //Elegir el tipo de vehívulo
        print "Elige un tipo de vehículo\n";
        print "1 Coche\n";
        print "2 Moto\n";
        print "3 Camión\n";

        fscanf(STDIN, "%d\n", $opcion);
        switch ($opcion) {
            case 1:
                print "Número de plazas: \n";
                $numero_plazas = fgets(STDIN);
                print "Número de puertas: \n";
                $puertas = fgets(STDIN);
                $vehiculo = new Coche($matricula, $marca, $modelo, $numero_plazas, $puertas);
                break;
            case 2:
                print "Cilindrada: ";
                $cilindrada = fgets(STDIN);
                $vehiculo = new Moto($matricula, $marca, $modelo, $cilindrada);
                break;
            case 3:
                print "Tara: ";
                $kg = fgets(STDIN);
                $vehiculo = new Camion($matricula, $marca, $modelo, $kg);
                break;
            default:
                echo "\e[31mOpción incorrecta! \e[0m\n";
                return;
        }
//        var_dump($vehiculo);
        //Mostrar las flotas
        echo "Selecciona una flota\n";
        foreach ($VR->getFlotas() as $key => $flota) {
            echo $key . ': ' . $flota->getNombre() . "\n";
        }
        //Preguntar por la opción de la flota
        fscanf(STDIN, "%d\n", $opcion);
        //Selecciona una flota
        if ($opcion < 0 || $opcion > count($VR->getFlotas())) {
            echo "\e[31mOpción incorrecta! \e[0m\n";
            return;
        }
        //Añadir el vehiculo
        if ($VR->getFlotas()[$opcion]->addVehiculo($vehiculo)) {
            echo "El vehiculo se añadió correctamente a la flota" . $VR->getFlotas()[$opcion]->getNombre() . "\n";
        } else {
            echo "Ha ocurrido un error al añadir el vehiculo\n";
        }
        return;
    }while(true);
}

function mostrarVehiculosFlota()
{
    print "************************************************\n";
    print "*     Vista de los vehiculos de la flota       *\n";
    print "************************************************\n";
    print "Elige una flota (0,1...)\n";
    global $VR;
    foreach ($VR->getFlotas() as $key => $flota){
        echo $key.': '.$flota->getNombre()."\n";
    }
    //Preguntar por la opción de la flota
    fscanf(STDIN, "%d\n", $opcion);
    if($opcion < 0 || $opcion > count($VR->getFlotas())){
        echo "\e[31mOpción incorrecta! \e[0m\n";
        return;
    }
    //listar los vehiculos de la flota que tenga el indice de la opción
    $listaVehiculos = $VR->getFlotas()[$opcion]->listVehiculos();
    echo "$listaVehiculos\n";
}

function quitarVehiculoFlota()
{
    global $VR;
    echo "Quitar un vehiculo de la flota\n";
    echo "Escribe la matrícula: ";
    $matricula = trim(fgets(STDIN));//TODO filtar los espacios
    if($VR->removeVehiculo($matricula)){
        echo "El vehiculo ".$matricula."se ha quitado correctamente";
            return;
    }

    echo "Algo ha ido mal al intentar eliminar el vehiculo\n";
}

function mostrarAgencias()
{
    global $VR;
    print "************************************************\n";
    print "*     Vista de las Agencias                    *\n";
    print "************************************************\n";
    foreach ($VR->getAgencias() as $agencia){
        echo $agencia;
    }
}