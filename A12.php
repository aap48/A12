<?php
//slide 6 and 7 
$cookie_name = "";
$cookie_value = "87";
$seven_days_in_seconds = 60*60*24*7;
?>

<html>
    <body>
    <script>
        document.write("hello");
        </script>
</body>
</html>

<?php
setcookie($cookie_name, $cookie_value, time() + $seven_days_in_seconds, "/");
echo "Cookie named $cookie_name is set";
echo "Cookie name"
?>