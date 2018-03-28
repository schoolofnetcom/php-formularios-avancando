<?php

$csrf_token = $_SESSION['csrf_token'] ?? false;

if (!$csrf_token or $csrf_token !== filter_input(INPUT_POST, '_csrf_token')) {
    die('CSRF token validation fail');
}
