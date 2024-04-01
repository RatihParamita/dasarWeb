<?php
$input = isset($_POST['input']) ? $_POST['input'] : '';
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
$email = isset($_POST['email']) ? $_POST['email'] : '';
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

echo '
<form method="post">
    <label for="input">Nama:</label>
    <input type="text" name="input" value="' . $input . '">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="' . $email . '">
    <br>
    <input type="submit" value="Submit">
</form>
<br>';

echo "Nilai nama: " . $input . "<br>";
echo "Nilai email: " . $email . "<br>";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email valid!";
} else{
    echo "Email tidak valid atau tidak tersedia dalam sistem!";
}
?>