<?php 

/* método HTTP */
echo "Método: ";
echo $_SERVER['REQUEST_METHOD'];

echo "\n\nHEADERS:\n";
$headers = getallheaders();
print_r($headers);

echo "\nPOST:\n";
$input = file_get_contents('php://input');
$array = json_decode($input, true);
$_POST = !empty($array) ? $array : $_POST;
print_r($_POST); 


/* response */
$array = [
    'codigo'  => 200,
    'sucesso' => true,
];

/* converte o array para JSON */
echo json_encode($array);