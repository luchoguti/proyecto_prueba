<?php
//echo '<pre>';
//print_r($query);
?>
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
            <?php
                foreach ($query['data']['results'] as $key => $datos) {
            ?>
            <div class="grid-data col-md-6 col-xs-12 col-sm-6">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img class="img-responsive img-circle" src="<?php echo $datos['thumbnail']['path'].'.'.$datos['thumbnail']['extension'];  ?>" alt="<?php echo $datos['name']; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 person_descrip">
                    <article class="white-panel">
                        <h4><b><?php echo $datos['name']; ?></b></h4>
                        <?php
                            $max_str=152;
                            $charter=substr($datos['description'],0,$max_str);
                            $str=(strlen($datos['description'])>$max_str)?$charter.'...':$charter;
                        ?>
                        <p><?php echo $str; ?></p>
                        <p>
                            <button type="button" class="btn btn-danger">VIEW MORE</button>
                        </p>
                    </article>
                </div>
                <div class="col-md-12">
                    <h4><b>Related comics</b></h4>
                    <?php
                        if(count($datos['comics']['items'])>0){
                            for ($index = 0; $index < 3; $index++) {
                                if($index%2==0){
                                $max_str_2=50;
                                $nameComic=substr($datos['comics']['items'][$index]['name'],0,$max_str_2);
                                $nameComic_parset=(strlen($datos['comics']['items'][$index]['name'])>$max_str_2)?$nameComic.'...':$nameComic;
                    ?>           
                    
                                <div class="col-md-6 col-xs-12 col-sm-6 relacion_comics">        
                                    <p><?php echo $nameComic_parset;?></p>
                                </div>
                    <?php 
                                }else{
                    ?>
                                <div class="col-md-6 relacion_comics">        
                                    <p><?php echo $nameComic_parset;?></p>
                                </div>
                    <?php
                                }
                            }
                        }else{
                            for ($index1 = 0; $index1 < 2; $index1++) {      
                    ?>
                                <div class="col-md-6 col-xs-12 col-sm-6 relacion_comics">        
                                    <p>Related comic name two lines</p>
                                </div>
                                <div class="col-md-6 relacion_comics">        
                                    <p>Related comic name two lines</p>
                                </div>
                    <?php
                            } 
                        }
                    ?>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="col-md-2 col-xs-2 col-sm-2 carrito_comic">.col-md-4</div>
