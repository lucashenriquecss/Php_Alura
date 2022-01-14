<?php


$contacorrente = [
    '102.66' => [
        'titular' => 'Maria',
        'Saldo' => 10000
    ],
    '103.66' => [
        'titular' => 'Marcos',
        'Saldo' => 10000
    ],
    '104.666' => [
        'titular' => 'Pedro',
        'Saldo' => 10000
    ],
    '105.66' => [
        'titular' => 'João',
        'Saldo' => 10000
    ],
];
if (condition) {
    # code...
}
$contacorrente['102.66']['Saldo'] -= 500;

foreach($contacorrente as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['Saldo'] .PHP_EOL;
};