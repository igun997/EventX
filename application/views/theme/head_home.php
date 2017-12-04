<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Event X</title>
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/style.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/summernote.css">
        <script src="<?= base_url("assets/") ?>bower_components/jquery/dist/jquery.min.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="./">Event X</a> </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-double-down"></i> Explore</a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($category->result() as $key => $value) { ?>
                                        <li><a href="<?= base_url("home/category/" . $value->id_category) ?>"><?= $value->name_category ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li> 
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <form class="navbar-form navbar-left">
                                    <div class="form-group">
                                        <input class="typeahead form-control" id="name">
                                    </div>
                                </form> 
                            </li>
                            <li><a href="<?= base_url("home/addevent") ?>">Add Event</a></li>
                            
                            <?php if($this->session->nama == null){ ?>
                            <li><a href="<?= base_url("home/login") ?>">Login</a></li>
                            <?php } ?>
                            <?php if($this->session->nama != null){ ?>
                            <li><a href="<?= base_url("home/logout") ?>">Log Out</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>