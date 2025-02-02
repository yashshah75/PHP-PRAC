
<?php 

$str = "Yash shah";

echo "The string is: ".$str;
echo "<br>";
echo "<br>";

echo "================================================================="."<br>"; 
echo "md5(variable,TRUE): It will convert string to binary"."<br>";
echo "The md5 Binary: ".md5($str,TRUE);
echo "<br>"."================================================================="."<br>";
echo "<br>";
echo "<br>";

echo "================================================================="."<br>"; 
echo "md5(variable): It will convert string to Hexa,"." <b>(md5)</b> Will Give <b>32</b> Characters"."<br>";
echo "The md5 Hexa: ".md5($str);
echo "<br>"."================================================================="."<br>";
echo "<br>";
echo "<br>";

echo "================================================================="."<br>"; 
echo "sha1(variable,TRUE): It will convert string to Binary,"." <b>(sha1)</b> Will Give <b>20</b> Characters"."<br>";
echo "The sha1 Binary: ".sha1($str,TRUE);
echo "<br>"."================================================================="."<br>";
echo "<br>";
echo "<br>";

echo "================================================================="."<br>"; 
echo "md5(variable): It will convert string to Hexa,"." <b>(sha1)</b> Will Give <b>40</b> Characters"."<br>";
echo "The sha1 Hexa: ".sha1($str);
echo "<br>"."================================================================="."<br>";
echo "<br>";
echo "<br>";




?>