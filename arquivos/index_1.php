<?php
//verifica se existe o campo $_POST['pesquisa'] vindo do formulário
$pesq = $_GET['busca'];

//verifica se o campo está vazio
if(empty($pesq)){
echo 'Digite uma palavra no campo de busca.';
}elseif(strlen($pesq) < 3){
echo 'Digite pelo menos três letras.';
}else{
//pasta onde está os arquivos da pesquisa        
$pasta = "./";
//arquivo atual
$atual = "../busca/index.php";

//faz a listagem dos arquivos da pasta indicada, e atribui a um array
$arquivo1 = glob("./$pasta/*.php", GLOB_BRACE);
$arquivo2 = glob("./$pasta/*.php", GLOB_BRACE);
$arquivo3 = glob("./$pasta/*.php", GLOB_BRACE);


$busca  = array_merge($arquivo1, $arquivo2, $arquivo3); 
//percorre o array
foreach($busca as $item){
//verifica se o arquivo não é o atual
if($item !== $atual){
//abre o arquivo
$abrir = fopen($item, "r");
//faz um loop até chegar o final do arquivo
while(!feof($abrir)){
//ler arquivo
$lendo = fgets($abrir);
//remove os caracteres html e php
$lendo = strip_tags($lendo);

//verifica se tem algum um item da pesquisa
if(stristr($lendo, $pesq) == true){
//remove a extensão .php
$dados = str_replace(".php", "", $item);
//retorna o nome apenas do arquivo
$area = dirname($dados);
$area2 = str_replace("/arquivos", "", $area);
$dados = basename($dados);

//coloca o link no array
$result[] = '<a href="port/../'.$area2.'/index.php?pagina='.$dados.'">'.$dados.'</a>';
//apaga a variavel $dados
unset($dados);
}
//apague a variavel lendo
unset($lendo);
}
//fecha o arquivo
fclose($abrir);    
}                
}

/*IMPRIMIR O RESULTADO*/

//verifica seo result existe
if(isset($result) && count($result) > 0){
//remove os resultado iguais
$result = array_unique($result);

//total de resultados
$total = count($result);
echo $total.' resultados encontrados.';

echo '<ul>';

//percorre o array
foreach($result as $link){
echo "<li>$link</li>";
}
echo '<ul>';
}else{
echo 'Nenhum resultado encontrado.';
}

}
