<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>
    <div class="lewy">
        <h3>Promocja 15% obejmuje artykuły:</h3>
        <ul>
    </ul>
    </div>
    <div class="srodkowy">
        <h3>Cena wybranego artykułu w promocj</h3>
        <form>
            <select name="towar">
                <option value="gumka_do_mazania">Gumka do mazania</option>
                <option value="cienkopis">Cienkopis</option>
                <option value="pisaki">Pisaki 60 szt.</option>
                <option value="markery">Markery 4 szt.</option>
            </select>
            <input type= "submit" value="WYBIERZ">
    </form>
    </div>
    <div class="prawy">

    </div>
    <div class="stopki">

    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sklep";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $mysqli = mysqli_select_db($conn, $database);
    if(mysqli_error($conn)){ 
        echo "Connection error";
    }
    if($result = mysqli_query($conn, "SELECT * FROM towary")){
        //$row = mysqli_fetch_row($result);
        while($array = mysqli_fetch_array($result)){
            echo($array["cena"]." ".$array["nazwa"]."<br>");
        }
        //$rows = mysqli_num_rows($result);
        //$fields = mysqli_num_fields($result);
    }
    mysqli_close($conn);
    
    /*
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, "sklep");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
      }
    // Return name of current default database
    if ($result = mysqli_query($con, "SELECT * from towary")) {
        $row = mysqli_fetch_row($result);
        echo "Default database is " . $row[0];
        mysqli_free_result($result);
    }
    // Change db to "test" db
    mysqli_select_db($con, "test");

    // Return name of current default database
    if ($result = mysqli_query($con, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    echo "Default database is " . $row[0];
    mysqli_free_result($result);
    }

    // Close connection
    mysqli_close($con);*/
    ?> 
</body>
</html>