<?php
// diretório onde estão os arquivos

foreach (glob("./downloads/*.txt") as $arquivo) {
    $palavra = 'portal';
    header('Content-Type: text/plain');
    $conteudo = file_get_contents($arquivo);
    $parte = explode("\n", $conteudo);
    $base = preg_quote($palavra, '/');
    $base = "/^.*$base.*\$/m";
    if(preg_match_all($base, $parte[0], $achado)){
        echo "achou:\n";
        echo implode("\n", $achado[0]);
    }else{
        echo "não achou";
    }
}