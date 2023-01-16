
<html>
<body>

<?php
     var_dump($_COOKIE['user']);
if (isset($_COOKIE['user'])) {
     unset($_COOKIE['user']);
     setcookie('user', null, -1, '/'); 
     return true;
     echo "Cookie 'user' is deleted.";
} else {
    echo '<br>';
    echo 'session telah di hapus';
}
?>

</body>
</html>
