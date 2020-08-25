<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->get_required_files() ?>
    <title>Document</title>
</head>
<body>

<nav class="nav-links">
    <li><a href="<?php echo base_url() ?>">Home</a></li>
    <li><a href="<?php echo base_url().'about'?>">About</a></li>
    <li><a href="<?php echo base_url(). 'test' ?>">Ajax Request</a></li>
    <!-- Trying to link to error page -->
    <li><a href="thisadsadsa/dsadsa">Error Sample</a></li>
</nav>