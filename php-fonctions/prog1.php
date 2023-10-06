<?php
$insultes = ['merde', 'con', 'salope','connard'];
$asterisque = [];
foreach ($insultes as $insulte){
    $asterisque[] = substr($insulte, 0, 1) . str_repeat ('*', strlen($insulte) - 1);
}
$phrase = readline('Entrez une phrase :');
$phrase = str_replace($insultes, $asterisque, $phrase);

echo $phrase;