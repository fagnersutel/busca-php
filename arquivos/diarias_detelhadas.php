<?php
$ini  = implode("-", array_reverse(explode("/", substr($_GET['reservation'], 0, 10))));
$fim  = implode("-", array_reverse(explode("/", substr($_GET['reservation'], -10))));
$range =  explode(";", $_GET['range']);
$range[0];
$range[1];
$var1 = $_GET['beneficiario'];
include_once './admin/Classes/dbconfig.php';
include_once './classes-pub/Classes/OrdemPagamento.class.php';
$db = $DB_con;
$diarias = new OrdemPagamento($db, $codigoIten, $nomeItem1, $nomeItem2, $nomeItem3, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10, $nomeItem11, $nomeItem12, $nomeItem13, $nomeItem14, $nomeItem15, $nomeItem16, $nomeItem17, $nomeItem18, $nomeItem19, $nomeItem20);
$diarias->listarDiariasSelecao($var1);
