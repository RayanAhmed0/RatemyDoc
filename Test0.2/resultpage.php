<!DOCTYPE html>
<html>

<head>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <a href="rights.html">الحقوق</a>
        <a href="aboutus.html">من نحن</a>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #b2e0df;
                animation: mymove 30s linear infinite alternate;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            @keyframes mymove {
                0% {
                    background-color: #b2e0df;
                }

                50% {
                    background-color: rgb(210, 145, 229);
                }

                100% {
                    background-color: rgb(247, 247, 148);
                }


            }

            .main {
                font-family: 'Aref Ruqaa', serif;
                font-size: 38px;
                position: sticky;
                right: 1px;
                bottom: 1px;
                opacity: 100%;



            }

            .navbar {
                overflow: hidden;
                background-color: rgba(255, 255, 255, 0);

                position: fixed;
                /* Set the navbar to fixed position */
                top: 0;
                /* Position the navbar at the top of the page */
                width: 100%;
                /* Full width */
                font-size: 20px;

            }

            /* Links inside the navbar */
            .navbar a {
                float: right;
                opacity: 50%;
                color: #000000;
                text-align: right;
                padding: 14px 16px;
                text-decoration: overline;
            }

            /* Change background on mouse-over */
            .navbar a:hover {
                background: rgba(221, 221, 221, 0.438);
                opacity: 50%;
                color: black;
                text-decoration: underline overline;
            }
        </style>


</body>
<!-- (A) SEARCH FORM -->
<form method="post" action="resultpage.php">
    <h1 class="main">RateMyDoc</h1>
    <input type="text" name="search" required />
    <input type="submit" value="Search" />
</form>

</html>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if ($_POST["search"] == "") {
    echo "يرجى إدخال اسم الدكتور";
} else {
    if (isset($_POST["search"])) {
        // (B1) SEARCH FOR USERS
        require "search.php";

        // (B2) DISPLAY RESULTS
        if (count($results) > 0) {
            foreach ($results as $r) {

                printf("</div>%s </div>%s </div>%s <div>%s ", $r["name_1"], $r["name_2"], $r["name_3"], $r["major"]);
            }
        } else {
            echo "لم يتم العثور على الدكتور";
        }
    }
}
?>