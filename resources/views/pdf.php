<?php  
$username = 'debian-sys-maint';
$password = 'ws1SC0JreanoNAJ8';
$database = 'victoria';
$host = 'localhost';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reporte</title>

    <style type="text/css">
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}

    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="/home/mario/Documentos/LARAVEL/ProyectoHV/resources/views/images/logoVictoria.jpg">
      </div>
      <h1>HOTEL VICTORIA</h1>
      <div id="company" class="clearfix">
        <div>Nombre</div>
        <div>2.da calle 9-99 zona 1,<br /> Chiquimula, Guatemala</div>
        <div>(502) 7942-2732</div>
        <div><a href="roland350under@gmail.com">roland350under@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>TIPO</span>Reporte de reservaciones</div>
        <div><span>NOMBRE</span>Hotel y restaurante Victoria</div>
        <div><span>DIRECCIÓN</span>2.da calle 9-99 zona 1 ,Chiquimula, Guatemala</div>
        <div><span>EMAIL</span> <a href="mailto:roland350under@gmail.com">roland350under@gmail.com</a></div>
        <div><span>FECHA</span>
            <?php  
                echo " " . date("d") . "/" . date("m") . "/" . date("Y");
            ?>
        </div>
      </div>
    </header>
    <main>
      
        <div align="center">
      <table>

<tr>
                                        
    <th class="service">HABITACIÓN</th>
    <th class="service">PRECIO</th>
    <th class="service">NOMBRE</th>
    <th class="service">ATENDIÓ</th>
    <th class="service">INGRESO</th>
    <th class="service">SALIDA</th>

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
                            
                                echo "<tr><td class='service'>"
                                    . $values["number"]
                                    . "</td><td class='desc'>"
                                    . $values["price"]
                                    . "</td><td class='desc'>"
                                    . $values["fullname"]
                                    . "</td><td class='desc'>"
                                    . $values["name"]
                                    . "</td><td class='desc'>"
                                    . $values["fech_inicio"]
                                    . "</td><td class='desc'>"
                                    . $values["fech_fin"]
                                    . "</td></tr>";
                            }
                        ?>
                    </table>
                </div>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">EL SIGUIENTE REPORTE SOLO ES PARA USO DEL HOTEL .</div>
      </div>
    </main>
    <footer>
      Softdragon 2019
    </footer>
  </body>
</html>