<?php
session_start();


unset($_SESSION['user']);
unset($user);

echo "Успешный выход!";
