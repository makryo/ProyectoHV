<?php  
$username = 'debian-sys-maint';
$password = 'ws1SC0JreanoNAJ8';
$database = 'victoria';
$host = 'localhost';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">

    <style type="text/css">
        
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
  text-align: left;
}
    </style>
</head>
<body>

<h1>Informe de reservaciones </h1>

<table class="table table-striped">

<tr>
                                        
    <th>Numero</th>
    <th>nombre</th>
    <th>Atendio</th>
    <th>entrada</th>
    <th>salida</th>
    <th>detalle</th>
</tr>   
                                
    <?php
                        
    try {

    $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
    $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch (PDOException $e){

    echo $e->getMessage();
    
 }
        $sql = 'select rooms.number, clients.fullname, users.name, rooms.price, fech_inicio, fech_fin 
                    from reservacions, clients, rooms, users 
                    where reservacions.room_id = rooms.id 
                    and reservacions.client_id = clients.id 
                    and reservacions.users_id = users.id;';
                        $result = $db_con->query($sql);
                        foreach ($result as $values) {
                            
                                echo "<tr><td>"
                                    . $values["number"]
                                    . "</td><td>"
                                    . $values["fullname"]
                                    . "</td><td>"
                                    . $values["name"]
                                    . "</td><td>"
                                    . $values["fech_inicio"]
                                    . "</td><td>"
                                    . $values["fech_fin"]
                                    . "</td><td>"
                                    . "<a href='update.php"
                                    . "?id=" . $values["number"]
                                    . "&name=" . $values["fullname"]
                                    . "&date=" . $values["name"]
                                    . "' class = 'button is-small is-warning is-outlined'><span class='icon is-small'><i class='fas fa-edit'></i></span><span>Editar</span></a></td>"
                                    . "</td><td>";
                            }
                        ?>
                                    
            </table>

</body>
</html>