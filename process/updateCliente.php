<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(3);
$nitOldClienteUp=$_POST['nit-clien-old'];
$nitClienteUp= $_POST['clien-nit'];
$userClienteUp= $_POST['clien-user'];
$nombreClienteUp= $_POST['clien-nombre'];
$apeCliente= $_POST['clien-apellido'];
$passClienteUp= md5($_POST['clien-clave']);
$dirClienteUp= $_POST['clien-direccion'];
$phoneClienteUp= $_POST['clien-telefono'];
$emailClienteUp= $_POST['clien-email'];

if(consultasSQL::UpdateSQL("cliente", "NIT='$nitClienteUp',Nombre='$userClienteUp',NombreCompleto='$nombreClienteUp',Apellido='$apeCliente',Clave='$passClienteUp',Direccion='$dirClienteUp',Telefono='$phoneClienteUp',Email='$emailClienteUp'", "NIT='$nitOldClienteUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p>

    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}