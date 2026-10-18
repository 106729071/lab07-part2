
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get first name and last name
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";

    echo "<p>Welcome " .
         htmlspecialchars($firstname) . " " .
         htmlspecialchars($lastname) . " !</p>";

    // Check booking options
    $booking = array();

    if (isset($_POST["accom"])) {
        $booking[] = "Accommodation";
    }

    if (isset($_POST["4day"])) {
        $booking[] = "Four-day tour";
    }

    if (isset($_POST["10day"])) {
        $booking[] = "Ten-day tour";
    }

    if (count($booking) > 0) {
        echo "<p>You are now booked on the " .
             implode(" and ", $booking) . "</p>";
    } else {
        echo "<p>No booking option selected.</p>";
    }

    // Check species
    if (isset($_POST["species"])) {
        $species = $_POST["species"];

        if ($species == "M") {
            $species = "Human";
        } elseif ($species == "D") {
            $species = "Dwarf";
        } elseif ($species == "E") {
            $species = "Elf";
        } elseif ($species == "H") {
            $species = "Hobbit";
        }

        echo "<p>Species: " .
             htmlspecialchars($species) . "</p>";
    }

    // Check age
    if (isset($_POST["age"])) {
        $age = $_POST["age"];
        echo "<p>Age: " .
             htmlspecialchars($age) . "</p>";
    }

    // Check menu preference
    if (isset($_POST["food"])) {
        $food = $_POST["food"];
        echo "<p>Meal Preference: " .
             htmlspecialchars($food) . "</p>";
    }

    // Check booking date
    if (isset($_POST["bookday"]) &&
        $_POST["bookday"] != "") {
        $bookday = $_POST["bookday"];
        echo "<p>Booking Date: " .
             htmlspecialchars($bookday) . "</p>";
    }

    // Check number of travellers
    if (isset($_POST["partysize"])) {
        $partysize = $_POST["partysize"];
        echo "<p>Number of travellers: " .
             htmlspecialchars($partysize) . "</p>";
    }
}
?>

</body>
</html>
