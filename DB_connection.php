<?php
// Turn off automatic exceptions (PHP 8.1+ enables them by default),
// so the site behaves the same as it did on the old laptop.
mysqli_report(MYSQLI_REPORT_OFF);

// Same settings as before: XAMPP default user "root" with no password.
// The database name "geaheads" must match the one created in database.sql.
$con = mysqli_connect("localhost", "root", "", "gearheads");

if (!$con) {
    // mysql_error() was removed in modern PHP; mysqli_connect_error() replaces it.
    die("Database connection failed: " . mysqli_connect_error());
}
?>