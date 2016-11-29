
<?php
 echo '<pre>';
 print_r($query);
?>
    <!--<div class="col-md-10 col-xs-10 col-sm-10">
        <div class="grid-data col-md-5">
            <div class="col-md-6 col-xs-6 col-sm-6">
                <img class="img-responsive img-circle" src="https://farm1.staticflickr.com/1/2759520_6dea8b9007.jpg" alt="Greece-1173 - Temple of Athena by Dennis Jarvis, on Flickr">
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 article-person">
                <article class="white-panel">
                        <h4><b>SPIDER-MAN</b></h4>
                        <?php
                            $str='Bitten by a radi, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            $max_str=205;
                            $charter=substr($str,0,$max_str);
                            $str=(strlen($str)>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>

                </article>
            </div>
            <div class="col-md-12">
                <h4><b>Relation comit</b></h4>
                <div class="col-md-6 col-xs-12 col-sm-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="col-md-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="col-md-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="grid-data col-md-5">
            <div class="col-md-6 col-xs-6 col-sm-6">
                <img class="img-responsive img-circle" src="https://farm1.staticflickr.com/1/2759520_6dea8b9007.jpg" alt="Greece-1173 - Temple of Athena by Dennis Jarvis, on Flickr">
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 article-person">
                <article class="white-panel">
                        <h4><b>SPIDER-MAN</b></h4>
                        <?php
                            $str='Bitten by a radi, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            $max_str=205;
                            $charter=substr($str,0,$max_str);
                            $str=(strlen($str)>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>

                </article>
            </div>
            <div class="col-md-12">
                <h4><b>Relation comit</b></h4>
                <div class="col-md-6 col-xs-12 col-sm-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="col-md-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="col-md-6">        
                    <p>Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-xs-2 col-sm-2">.col-md-4</div>-->
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
        <div class="row">
            <div class="grid-data col-md-6 col-xs-12 col-sm-6">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img class="img-responsive img-circle" src="https://farm1.staticflickr.com/1/2759520_6dea8b9007.jpg" alt="Greece-1173 - Temple of Athena by Dennis Jarvis, on Flickr">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="white-panel">
                        <h4><b>SPIDER-MAN</b></h4>
                        <?php
                            $str='Bitten by a radi, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            $max_str=205;
                            $charter=substr($str,0,$max_str);
                            $str=(strlen($str)>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>
                    </article>
                </div>
                <div class="col-md-12">
                    <h4><b>Relation comit</b></h4>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>

            <div class="grid-data col-md-6 col-xs-12 col-sm-6">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img class="img-responsive img-circle" src="https://farm1.staticflickr.com/1/2759520_6dea8b9007.jpg" alt="Greece-1173 - Temple of Athena by Dennis Jarvis, on Flickr">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="white-panel">
                        <h4><b>SPIDER-MAN</b></h4>
                        <?php
                            $str='Bitten by a radi, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            $max_str=205;
                            $charter=substr($str,0,$max_str);
                            $str=(strlen($str)>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>
                    </article>
                </div>
                <div class="col-md-12">
                    <h4><b>Relation comit</b></h4>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>

                        <div class="grid-data col-md-6 col-xs-12 col-sm-6">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img class="img-responsive img-circle" src="https://farm1.staticflickr.com/1/2759520_6dea8b9007.jpg" alt="Greece-1173 - Temple of Athena by Dennis Jarvis, on Flickr">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="white-panel">
                        <h4><b>SPIDER-MAN</b></h4>
                        <?php
                            $str='Bitten by a radi, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            $max_str=205;
                            $charter=substr($str,0,$max_str);
                            $str=(strlen($str)>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>
                    </article>
                </div>
                <div class="col-md-12">
                    <h4><b>Relation comit</b></h4>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>

                        <div class="grid-data col-md-6 col-xs-12 col-sm-6">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img class="img-responsive img-circle" src="https://farm1.staticflickr.com/1/2759520_6dea8b9007.jpg" alt="Greece-1173 - Temple of Athena by Dennis Jarvis, on Flickr">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="white-panel">
                        <h4><b>SPIDER-MAN</b></h4>
                        <?php
                            $str='Bitten by a radi, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            $max_str=205;
                            $charter=substr($str,0,$max_str);
                            $str=(strlen($str)>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>
                    </article>
                </div>
                <div class="col-md-12">
                    <h4><b>Relation comit</b></h4>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="col-md-6">        
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2 col-xs-2 col-sm-2 carrito_comic">.col-md-4</div>
