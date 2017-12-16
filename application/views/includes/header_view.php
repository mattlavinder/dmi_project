<!DOCTYPE html>
<html lang="en">
<head>
    <title>Martha's Brew Stand</title>
    <link href="<?=base_url()?>/public/img/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/app/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Martha's</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>order/start">Order</a>
                    </li>
                </ul>
                <a href="" class="my-auto btn btn-primary">Login</a>
            </div>
        </div>
    </nav>
    <!--Start container-->
    <div class="container">
