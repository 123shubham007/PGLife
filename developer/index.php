<?php
include "../includes/database_connect.php";

?>

<!DOCTYPE html>
<html>

<head>
    <title>PGLife Developer Mode</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="../admin/css/property_list.css">
    <?php
    include "head_links.php";
    ?>
    <link rel="stylesheet" href="../admin/css/extra.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        .header {
            background-color: #fff;
        }

        .w3-row-padding img {
            margin-bottom: 12px
        }

        .w3-sidebar {
            width: 105px;
            height: fit-content;
            background: #4dc7bc;
        }

        #main {
            margin-left: 120px
        }

        .margin {
            margin-top: 15px;
        }

        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }
    </style>
    <link rel="stylesheet" href="css/developer.css">
</head>

<body style="color: black;">
    <?php
    include "header.php"
    ?>
    <div class="w3-padding-64 w3-content w3-text-white">
        <h3>Hostels Available On the Server :</h3>
        <br/>
        <?php
        include "card.php";
        ?>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>