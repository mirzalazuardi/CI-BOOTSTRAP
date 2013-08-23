<!DOCTYPE html>
<html>
    <head>
        <title>Mirzalazuardi Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <script type="text/javascript" src="public/jquery/jquery-1.10.2.min.js"></script>        
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5212d457628219bb"></script>
        <script type="text/javascript" src="public/addthis/addthis.js"></script>
        
        <!--<script type="text/javascript" src="public/nosteal/nst.js"></script>-->
        <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap-responsive.css">
        
        <body>
        <?php
            //list href NAV
            $ciug=base_url().'user_guide';
            $bsug=base_url().'public/bootstrap/docs/index.html';
            $dup=base_url().'dupont';


        ?>

        <div class="container-fluid">
            <div class="row-fluid">
              <div class="span8 offset2">
                  <!-- Begin Contain -->
                  <div class="navbar">
                      <div class="navbar-inner">
                        <a class="brand" href="#">Mirzalazuardi Project</a>
                        <ul class="nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="<?=$ciug;?>">CI</a></li>
                          <li><a href="<?=$bsug;?>">BS</a></li>
                        </ul>
                      </div>
                    </div>

                 
                  <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li class="active">Data</li>
                  </ul>