<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body>
        <header>
           <div class="container">
                <img src="assets/images/logo.png" alt="">
                <nav class="navbar navbar-expand-sm bg-light">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php?route=admin/new/listing">Admin</a>
                        </li>
                        <?php
                        foreach($all_category as $cat){
                        ?>
                        <a class="nav-link" href="home.php?route=category&id=<?=$cat['id']?>"><?=$cat['name']?></a>
                        <?php }?>
                        </ul>
                    </div>
                </nav>
                <div class="banner">
                    <img src="<?=BASE_IMAGE?>banner.png" alt="" width="100%">
                </div>
                
           </div>
        </header>