<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Blood Bank Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--  using boost library    -->
    <link rel="icon" href="data:image/png;base64,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">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<script>
    function validateForm(formId) {
        var inputs, index;
        var form = document.getElementById(formId);
        inputs = form.getElementsByTagName('input');
        for (index = 0; index < inputs.length; ++index) {
            // deal with inputs[index] element.
            if (inputs[index].value == null || inputs[index].value == "") {
                alert("Field is empty");
                return false;
            }
        }
    }
</script>

<?php

session_start();
if ($_SESSION['status'] != "ACTIVE") {
    header("Location: homepage.php");
}

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "proje");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$check = mysqli_query($link, "SELECT * FROM  bloodbank");

if (!$check) { // add this check.
    die('Invalid query: ' . mysql_error());
}

$myarr = array();

while ($row = mysqli_fetch_array($check)) {
    array_push($myarr, $row);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<style>
    .example {

        background-image: url(bbBackground.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }

    .cusBut {
        background-color: transparent;
        border: none;
        color: white;

    }

    .cusBut:hover {
        background-color: transparent;
        border: none;
        color: white;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .homeBut {
        background-color: transparent;
        border: none;
        color: white;
        font-size: 50px;
    }

    .textColor {

        color: white;

    }
</style>

<body class="example">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 mt-4" title="Patates">
                <button class="homeBut" onclick="window.location='admin_page.php'"><i class="fa fa-home"></i></button>
            </div>
            <div class="text-center col-md-6 offset-md-2 mt-4">
                <h1 class="textColor">BLOOD BANK DONATION TABLE</h1>
            </div>
            <table class="table textColor table-hover col-md-10 offset-md-1">
                <thead>
                    <tr style="background-color:transparent">
                        <th>Blood Bank ID</th>
                        <th>Donor ID</th>
                        <th>Donation Date</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $row_number = count($myarr);

                    for ($i = 0; $i < $row_number; $i++) {
                        $bbid = $myarr[$i]['bbid'];
                        $did = $myarr[$i]['did'];
                        $ddate = $myarr[$i]['ddate'];
                        echo "<tr>";
                        echo "<td>" . $bbid .  "</td>";
                        echo "<td>" . $did .  "</td>";
                        echo "<td>" . $ddate . "</td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>

            </table>

            <div class="offset-md-1 mt-4">
                <div>
                    <h4 class="textColor">To Add a Donation into our Database</h4>
                </div>
                <form name="add" id="add" method="post" action="bloodBankAdd.php" onsubmit="return validateForm('add');">
                    <input class="inputField" id="bbid" type="text" name="bbid" placeholder="Blood Bank ID">
                    <input class="inputField" id="did" type="text" name="did" placeholder="Donor ID">
                    <input class="inputField" id="ddate" type="text" name="ddate" placeholder="Donation Date">
                    <input class="cusBut" id="submit" type="submit" value="INSERT"><br>
                </form>
                <div>
                    <h4 class="textColor">To Add a Donation Details into our Database</h4>
                </div>
                <form name="add2" id="add2" method="post" action="bloodBankAdd.php" onsubmit="return validateForm('add2');">
                    <input class="inputField" id="did2" type="text" name="did2" placeholder="Donor ID">
                    <input class="inputField" id="hemoglobin" type="text" name="hemoglobin" placeholder="Hemoglobin Level">
                    <input class="inputField" id="hemaocrit" type="text" name="hemaocrit" placeholder="Hemaocrit Level">
                    <input class="cusBut" id="submit" type="submit" value="INSERT"><br>
                </form>
                <div>
                    <h4 class="textColor">To Search with Blood Bank ID in our Database</h4>
                </div>
                <form name="search" id="search" method="post" action="bloodBankSearch.php" onsubmit="return validateForm('search');">
                    <input class="inputField" id="bbid_search" type="text" name="bbid_search" placeholder="Blood Bank ID to Search">
                    <input class="cusBut" id="submit" type="submit" value="SEARCH"><br>
                </form>
                <div>
                    <h4 class="textColor">To Search with Donor ID in our Database</h4>
                </div>
                <form name="searchD" id="searchD" method="post" action="bloodBankSearch.php" onsubmit="return validateForm('searchD');">
                    <input class="inputField" id="did_search" type="text" name="did_search" placeholder="Donor ID to Search">
                    <input class="cusBut" id="submit" type="submit" value="SEARCH"><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>