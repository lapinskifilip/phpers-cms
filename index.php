<?php

$section = $_GET['section'] ?? 'home';

if ($section == 'about') {
    include 'controller/aboutUsPage.php';
} elseif ( $section == 'contact') {
    include 'controller/contactUsPage.php';
} else {
    include 'controller/homePage.php';
}

