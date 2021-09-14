<?php 

/* inicia o curl */
$curl = curl_init();

/* headers */
$headers = [
    'Autorization: Bearer 102030405060708090100',
    'Content-Type: application/json'
];

/* POST */
$post = [
    'nome'  => 'Teste Marcelo',
    'canal' => 'Teste de requisição utilizando o CURL',
];

/* JSON */
$json = json_encode($post);

/* define as configurações */
curl_setopt_array($curl, [
    CURLOPT_URL            => "http://localhost/curl/api.php",
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_POSTFIELDS     => $json,
]);

/* executa a requisição */
$response = curl_exec($curl);

/* imprime o response da requisição */
echo $response;

/* fecha a conexão */
curl_close($curl);

/* imprime o response da requisição */
$array = json_decode($response, true);

/* response convertido em array */
print_r($array);