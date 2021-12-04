<html>
<head>
<title>Автоматизация разгрузки сырья</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	body { background: url(fon.jpg); }
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div class="blok-menu">
<ul class="menu">
<li><a href="index.php">Текущие операции</a></li>
<li><a href="nextOper.php">Будущие операции</a></li>
<li><a href="Archive.php">Архив операций</a></li>
<li><a href="contakt.html">Техническая поддержка</a></li>
</ul>
</div>


<!-- Tab links -->
<div class="tab">
<style>button{font: 18px Verdana, Arial, Helvetica, sans-serif;}</style>
  <button class="tablinks" onclick="openCity(event, 'ZonaA')">Зона А</button>
  <button class="tablinks" onclick="openCity(event, 'ZonaB')">Зона Б</button>
  <button class="tablinks" onclick="openCity(event, 'ZonaV')">Зона В</button>
</div>
<!--вот тут мы объявляем что у нас есть 3 зоны. По нормальному нам тут нужно из sql подгружать количество исходя из данных.
это дрочево ебейшее, но надо сделать я мб смогу или сам посмотри как это делается -->
<!-- Tab content -->


<div id="ZonaA" class="tabcontent">
<style>
  table  {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 640px;
  text-align: left;
  border-collapse: collapse;
  background: #e3e3e3;
  margin: 10px;
}
th{
  color: #000000;
  border-bottom: 1px solid #303030;
  padding: 12px 17px;
}
td {
  color: #000000;
  border-bottom: 1px solid #303030;
  border-right:1px solid #303030;
  border-left:1px solid #303030;
  padding: 7px 17px;
}
</style>
<?php
$servername = "127.0.0.1";
$username = "123";
$password = "123";
$dbname = "homelib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, company, number_vag, pred_mass, real_mass, waste, status FROM polka1 WHERE status='completed'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Компания поставщик</th><th>Номер вагона</th><th>Поставленно сырья</th><th>Сырья качественного</th><th>Брак</th><th>Статус</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["company"]. "</td><td>" . $row["number_vag"]. "</td><td>" . $row["pred_mass"]. "</td><td>" . $row["real_mass"]. "</td><td>" . $row["waste"]. "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</div>


<div id="ZonaB" class="tabcontent">
   <style>
  table  {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 640px;
  text-align: left;
  border-collapse: collapse;
  background: #e3e3e3;
  margin: 10px;
}
th{
  color: #000000;
  border-bottom: 1px solid #303030;
  padding: 12px 17px;
}
td {
  color: #000000;
  border-bottom: 1px solid #303030;
  border-right:1px solid #303030;
  border-left:1px solid #303030;
  padding: 7px 17px;
}
</style>
<?php
$servername = "127.0.0.1";
$username = "123";
$password = "123";
$dbname = "homelib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, company, number_vag, pred_mass, real_mass, waste, status FROM zonab WHERE status='completed'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Компания поставщик</th><th>Номер вагона</th><th>Поставленно сырья</th><th>Сырья качественного</th><th>Брак</th><th>Статус</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["company"]. "</td><td>" . $row["number_vag"]. "</td><td>" . $row["pred_mass"]. "</td><td>" . $row["real_mass"]. "</td><td>" . $row["waste"]. "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


</div>


<div id="ZonaV" class="tabcontent">
   <style>
  table  {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 640px;
  text-align: left;
  border-collapse: collapse;
  background: #e3e3e3;
  margin: 10px;
}
th{
  color: #000000;
  border-bottom: 1px solid #303030;
  padding: 12px 17px;
}
td {
  color: #000000;
  border-bottom: 1px solid #303030;
  border-right:1px solid #303030;
  border-left:1px solid #303030;
  padding: 7px 17px;
}
</style>
<?php
$servername = "127.0.0.1";
$username = "123";
$password = "123";
$dbname = "homelib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, company, number_vag, pred_mass, real_mass, waste, status FROM zonav WHERE status='completed'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Компания поставщик</th><th>Номер вагона</th><th>Поставленно сырья</th><th>Сырья качественного</th><th>Брак</th><th>Статус</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["company"]. "</td><td>" . $row["number_vag"]. "</td><td>" . $row["pred_mass"]. "</td><td>" . $row["real_mass"]. "</td><td>" . $row["waste"]. "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</div>

<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>