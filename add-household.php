<?php
$title = "";
if (! empty($_POST["title"])) {
    $title = htmlspecialchars($_POST["title"]);
}
$description = "";
if (! empty($_POST["description"])) {
    $description = htmlspecialchars($_POST["description"]);
}
echo var_dump($_POST);

$conn = new mysqli("localhost", "root", "","barangayrbi");

$last_name = "";
if (! empty($_POST["last_name"])) {
    $last_name = htmlspecialchars($_POST["last_name"]);
}

$first_name = "";
if (! empty($_POST["first_name"])) {
    $first_name = htmlspecialchars($_POST["first_name"]);
}

$middle_name = "";
if (! empty($_POST["middle_name"])) {
    $middle_name = htmlspecialchars($_POST["middle_name"]);
}

$suffix = "";
if (! empty($_POST["suffix"])) {
    $suffix = htmlspecialchars($_POST["suffix"]);
}

$gender = "";
if (! empty($_POST["gender"])) {
    $gender = htmlspecialchars($_POST["gender"]);
}

$birthdate = "";
if (! empty($_POST["birthdate"])) {
    $birthdate = htmlspecialchars($_POST["birthdate"]);
}

$birthplace = "";
if (! empty($_POST["birthplace"])) {
    $birthplace = htmlspecialchars($_POST["birthplace"]);
}

$civil_status = "";
if (! empty($_POST["civil_status"])) {
    $civil_status = htmlspecialchars($_POST["civil_status"]);
}

$nationality = "";
if (! empty($_POST["nationality"])) {
    $nationality = htmlspecialchars($_POST["nationality"]);
}
$sql = "INSERT INTO households (last_name,first_name,middle_name,suffix,gender,birthdate,birthplace,civil_status,nationality)
VALUES (
    '$last_name',
    '$first_name',
    '$middle_name',
    '$suffix',
    '$gender',
    '$birthdate',
    '$birthplace',
    '$civil_status',
    '$nationality'
)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: kabarangay.php");
?>