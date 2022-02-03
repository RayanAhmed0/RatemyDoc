<!-- (A) SEARCH FORM -->
<form method="post" action="index.php">
    <h1>SEARCH FOR USERS</h1>
    <input type="text" name="search" required />
    <input type="submit" value="Search" />
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
    // (B1) SEARCH FOR USERS
    require "search.php";

    // (B2) DISPLAY RESULTS
    if (count($results) > 0) {
        foreach ($results as $r) {
            printf("</div>%s </div>%s </div>%s </div>%s ", $r["name_1"], $r["name_2"], $r["name_3"],$r["major"]);
        }
    } else {
        echo "No results found";
    }
}
?>