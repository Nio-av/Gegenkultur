<!DOCTYPE HTML>
<html>
<head>
    
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/basic.css" rel="stylesheet" type="text/css"></link>
    <link href="css/admin.css" rel="stylesheet" type="text/css"></link>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
   
	<title>Backend</title>
    
</head>
<body>
    <?php
        include_once "res/adminnav.php";
    ?>
    <div id="content">
        <h1>Adminoberfläche</h1>


        <table>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Vorname
                </th>
                <th>
                    Geburtsdatum
                </th>
                <th>
                    Uhrzeit
                </th>
            </tr>
            <?php
                include_once "res/Backendfetch.php";
            ?>


        </table>

    </div>
</body>
