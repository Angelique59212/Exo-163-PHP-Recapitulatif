<?php

if (isset($_POST['mail'])) {
    $email = trim(strip_tags($_POST['mail']));
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: formNewsletter.php');
    }
}
