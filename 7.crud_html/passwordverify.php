<?php 





$plaintext = "yash123"."<br>";
$hashed = password_hash($plaintext, PASSWORD_BCRYPT);

echo $plaintext;
echo $hashed;
echo "<br>";

if(password_verify($plaintext, $hashed))
{
    echo "matched";
}
else
{
    echo "not matched";
}


?>

