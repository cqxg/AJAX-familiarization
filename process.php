<?php

echo 'Processing...';

if (isset($_POST['name'])){
    echo 'GET: Your name is '. $_POST['name'];
}


if (isset($_GET['name'])){
    echo 'GET: Your name is '. $_GET['name'];
}