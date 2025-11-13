<?php 

//Arrays numéricos

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];

echo  PHP_EOL;

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda" ;
$motos[5] = "Suzuki";
echo $motos[5]; 

echo PHP_EOL;

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);

//Count

$TotalClientes = count($clientes);
echo $TotalClientes;
echo PHP_EOL;

//Foreach

foreach ($clientes as $valor) {
    echo $valor . PHP_EOL;
}

echo "______________________________________________________________________________________________________". PHP_EOL;

// Arrays associativos

$pessoa = array("Nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);

foreach($pessoa as $indice => $valor) {
    echo $indice .":". $valor . PHP_EOL; 
}
echo "_____________________________________________________________________________________________________" . PHP_EOL;
// Arrays multidimensionais

$times = array(
        "Cariocas" => array("Campeao"=>"Vasco", "Vice"=>"Flamengo", "Terceiro"=>"Botafogo"),
        "Paulistas" => array("Campeao"=>"Santos", "Vice"=>"SãoPaulo", "Terceiro"=>"Palmeiras"),
        "Baianos" => array("Campeao"=>"Bahia", "Vice"=>"Vitória", "Terceiro"=>"Itabuna")
        );
echo $times ["Cariocas"]["Campeao"];
echo PHP_EOL;

foreach ($times["Cariocas"] as $indice => $valor) {
    echo $indice .":".$valor. PHP_EOL; 
}
echo "_____________________________________________________________________________________________________" . PHP_EOL;

foreach ($times["Baianos"] as $indice => $valor) {
    echo $indice .":".$valor. PHP_EOL; 
}
echo "_____________________________________________________________________________________________________" . PHP_EOL;

foreach ($times["Paulistas"] as $indice => $valor) {
    echo $indice .":".$valor. PHP_EOL; 
}