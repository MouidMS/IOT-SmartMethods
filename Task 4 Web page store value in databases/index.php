<?php
require './connection.php';
error_reporting( 0 );

?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Web page</title>
<link rel = 'stylesheet' href = 'style.css'>
<link href = 'https://fonts.googleapis.com/css2?family=Lora&family=Source+Sans+Pro&display=swap' rel = 'stylesheet'>
</head>
<body>
<h1>Input Integer Values</h1>
<p>If you press  Send, it will be sent to the databases</p>
<hr>

<form name = 'formNo' action = '' method = 'get'>
<label>Input: <input name = 'int' type = 'number' ></label>
<button name = 'submit' type = 'submit' onclick = 'Send()'>Send</button>

</form>
</body>
</html>

<?php
$intger_Get = $_GET[ 'int' ];

if ( isset( $_GET[ 'submit' ] ) ) {

    if ( empty( $intger_Get ) ) {
        echo '<h2>Please enter the number</h2>';
    } else {
        // Attempt insert query execution
        $sql = "INSERT INTO  int_data (int_input) VALUES ('$intger_Get')";
        if ( mysqli_query( $link, $sql ) ) {
            echo '<h2>Records inserted successfully.</h2>';
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error( $link );
        }
    }

}
// Close connection
mysqli_close( $link );

?>