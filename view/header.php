<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?> - Aplication </title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/panel_inicial.css" rel="stylesheet">
    </head>
    <!--<img src="public/img/marvel_logo.png" class="img-responsive" alt="Logo Marvel" width="130">--> 
    <body>
        <header>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button> <img src="public/img/marvel_logo.png" class="img-responsive" alt="Logo Marvel" id="logo_inicial">

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse collapse" id="navbar-collapse" aria-expanded="false" style="height: 1px;">

      <form class="navbar-form" role="search" id="formID">
        <div class="input-group">
            <input class="form-control" id="q" placeholder="Search charter" name="q" type="text" onkeyup="search_charters(this);">
          <div class="input-group-btn">
                <button class="btn btn-default" type="submit" style="height: 48px;"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
      </form>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
   </nav>
</header>
<div class="detalle_personajes col-md-10 col-xs-10 col-sm-10">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6">
                <section>
                    <img style='float:left;margin-right:10px;' src="public/icons/characters.png">
                    <p><h1><b>Characters</b></h1></p>
                </section>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
                <div class="inpt-personj col-md-6">
                    <section>
                        <select name="order_personajes" class="form-control">
                            <option>Sort by</option>
                        </select>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

