<?php
// Definisci 4 variabili:
// Integer
// Float
// String
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili.
    $integer = 5;
    $float = 5.2;
    $string = '5';
    $boolean = true;
    echo gettype($integer);
    echo gettype($float);
    echo gettype($string);
    echo gettype($boolean);

// Date le seguenti variabili:
// $1text = "Marco";
// $text2 = "hai";
// $text.3 = "sete";
// $text4 = "?";
// @text5 = "Perchè";
// $te-xt6 = '$text2';
// $text 7 = 'bevuto';
// $text8 = "tutto"
// correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“
    $text1 = "Marco";
    $text2 = "hai";
    $text3 = "sete";
    $text4 = "?";
    $text5 = "Perchè";
    $text6 = 'hai';
    $text7 = 'bevuto';
    $text8 = "tutto";
    echo "\n $text1 $text2 $text3$text4 $text5 $text6 $text7 $text8";

// Dati i seguenti array:
// $words1 = [
// 'una',
// 67,
// 'vita',
// 'colle',
// 'mi',
// 'rosso',
// [
// 'oscura',
// 'era',
// 89,
// [
// 'mezzo',
// [
//     'cammin',
//     'Nel',
//     [
//     'selva',
//     'la',
//     [
//         'via',
//         'una',
//         true,
//     ]
//     ],
// ]
// ],
//     'ritrovai',
//     'per'
// ],
// 'diritta'
// ];
// $words2 = [
// 'elemento1' => 25.89,
// 'elemento2' => 'nostra',
// 'elemento3' => [
//     'Virgilio',
//     'smarrita',
//     'ché'
// ]
// ];
// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo,
// attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura,
// che' la diritta via era smarrita“.
$words1 = [
'una',
67,
'vita',
'colle',
'mi',
'rosso',
[
'oscura',
'era',
89,
[
'mezzo',
[
    'cammin',
    'Nel',
    [
    'selva',
    'la',
    [
        'via',
        'una',
        true,
    ]
    ],
]
],
    'ritrovai',
    'per'
],
'diritta'
];

$words2 = [
'elemento1' => 25.89,
'elemento2' => 'nostra',
'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
]
];
$words1[] = 'del';
$words1[] = 'di';
$results = $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' ' . $words1[8] . ' ' . $words1[6][3][1][0] . ' ' . $words1[9] . ' ' . $words2['elemento2'] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[6][3][1][2][2][1] . ' ' . $words1[6][3][1][2][0] . ' ' . $words1[6][0] . ', ' . $words2['elemento3'][2] . ' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . $words1[6][1] . ' ' . $words2['elemento3'][1];
print_r($words1);
print_r($words2);
echo $results;
