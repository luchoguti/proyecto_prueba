<section id="query_result">
<div class="detalle_personajes col-md-10 col-xs-10 col-sm-10">
    <div class="container">
        <div class="row" id="row_characters">
            <div class="tab-content">
            <?php
                $numpage=10;
                $count_reg= ceil($query['data']['count']/$numpage);
                $i=1;
                $j=1;
                foreach ($query['data']['results'] as $key => $datos) {
                $control=($numpage*$j)+1;
                if($i==1 || $control==$i){
                    if($i!=1){
                        $j++;
                    }
                    $optTag=($i==1)?'active':'';
                    echo '<div class="tab-pane '.$optTag.'" id="tab'.$j.'" role="tabpanel">';
                }
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
            <?php 
            
                    if(($i/$numpage)==$j || $query['data']['count']==$i){
                        echo '</div>';
                    }
                    $i++; 
                } 
            ?>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2 col-xs-2 col-sm-2 carrito_comic">.col-md-4</div>
<div class="col-md-12" id="row_pagination">
       <div class="row">
        	<nav aria-label="...">
            	<ul class="pager" role="tablist">
                    <li class="previous" onclick="goTo(1);"><a href="#"><span aria-hidden="true">←</span> Previous</a></li>
                <?php
                  for ($paginas = 1; $paginas <= $count_reg; $paginas++) {
                     $tag_1=($paginas==1)?' class="active" id="first"':'';
                     $tag_2=($paginas==$count_reg)?' id="last"':'';
                ?>
                <li<?php echo $tag_1.$tag_2;?>>
                    <a aria-controls="tab<?php echo $paginas; ?>" data-toggle="tab" href="#tab<?php echo $paginas; ?>" role="tab"><?php echo $paginas; ?></a>
                </li>
                <?php } ?>                   
                    <li class="next" onclick="goTo(2);"><a href="#">Next <span aria-hidden="true">→</span></a></li>
                </ul>
            </nav>
        </div>
</div>
</section>
