<?php

$conn = mysqli_connect("localhost", "root", "", "flatbuddy");

if (isset($_POST['input'])) {
    $output = "";
    $input = $_POST['input'];
    // $query = "SELECT * FROM cities WHERE Cities LIKE '{$input}%'";
    $query = "SELECT DISTINCT Location FROM flatdata WHERE Location LIKE '%{$input}%'";
    $output = '<ul class="list-unstyled">';

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) { // Fetch the row as an associative array
            // $output .= '<li>' . $row["Location"] . '</li>'; // Access the "Cities" column from the fetched row
            $output .= '<li><a href="Cards.php?Location=' . $row['Location'] . '">' . $row['Location'] . '</a></li>';
        }
    } else {
        $output .= '<li>City not found</li>';
    }
    $output .= '</ul>';
    echo $output;
}

?>
