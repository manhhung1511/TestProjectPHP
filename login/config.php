<?php

$conn = mysqli_connect('localhost', 'root','', 'login_register');
if(!$conn) {
    die("<script>alert('Connect Failed') </script>");
}