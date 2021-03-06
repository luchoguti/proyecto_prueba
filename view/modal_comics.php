<!--/*
*This view contains all the modal html that you use to print the comics associated with the character.
*
*/-->
<link href="public/css/modal_comics.css" rel="stylesheet">
<div class="modal fade firstModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">       
    <div class="modal-dialog">
        <div class="modal-content">
            <!--<a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>-->
            <div class="modal-header">
                <img src="public/icons/btn-close.png" class="close" data-dismiss="modal">
            </div>
            <div class="modal-body">
                <div id="recommendations" class="carousel slide media-carousel" data-interval="false">
                    <div class="carousel-inner">
                    <?php
                        $first_price='';
                        $first_add_comic=0;
                        $notComic=0;
                        if(count($query_comics['data']['results'])>0){
                            $notComic=1;
                            $i=1;
                            foreach ($query_comics['data']['results'] as $key => $data) { 
                            $active=($i==1)?'active':'';
                            if($i==1){
                                //declare first price
                                $first_price.=($data['prices'][1]['price']>0)?$data['prices'][1]['price']:0;
                                //controlled comics added
                                if(count($add_comics)>0){
                                    foreach ($add_comics as $id_comic_add) {
                                        if($data['id']==$id_comic_add){
                                            $first_add_comic=1;
                                            
                                        }else{
                                            $first_add_comic=0; 
                                        }
                                    }
                                }else{
                                   $first_add_comic=0; 
                                }
                            }
                            $i++;
                            $price_comic=0;
                            if($data['prices'][1]['price']>0){
                                $price_comic=$data['prices'][1]['price'];
                            }else if($data['prices'][0]['price']>0){
                                $price_comic=$data['prices'][0]['price'];
                            }else{
                                $price_comic=0;
                            }
                    ?>
                        <div class="item <?php echo $active; ?>">      
                            <div class="col-md-6">
                                <img class="img-responsive" src="<?php echo $data['thumbnail']['path'].'.'.$data['thumbnail']['extension']?>">					
                            </div>
                            <div class="col-md-6 txt_panel_model">
                                <article class="white-panel">
                                    <h3><b><?php echo  $data['title']; ?></b></h3>
                                    <p class="p-description-comics"><?php echo  $data['description']; ?></p>
                                </article>
                            </div>
                            <?php
                                //controlled comics added
                                if(count($add_comics)>0){
                                    $state_comic='';
                                    foreach ($add_comics as $id_comic_add) {
                                       if($data['id']==$id_comic_add){
                                          $state_comic='<input type="hidden" class="state_comic" value="1">'; 
                                          break;
                                       }
                                    }
                                    $state_comic=($state_comic=='')?'<input type="hidden" class="state_comic" value="0">':$state_comic;
                                }else{
                                   $state_comic='<input type="hidden" class="state_comic" value="0">';   
                                }
                                echo $state_comic;
                            ?>
                            <input type="hidden" value="<?php echo $price_comic; ?>" class="price_comic">
                            <input type="hidden" value="<?php echo $data['id'] ?>" class="id_comic">
                            <input type="hidden" value="<?php echo $data['title']; ?>" class="title_comic">
                            <input type="hidden" value="<?php echo $data['thumbnail']['path'].'.'.$data['thumbnail']['extension']?>" class="url_comic">
                        </div>
                    <?php 
                            }
                        }else{
                        $notComic=0;
                    ?>
                        <div class="item active">      
                            <div class="col-md-12 without-result">
                                    <h3><b>This Character doesn't have comics partners.</b></h3>
                            </div>  
                        </div>
                        
                    <?php
                        }
                    ?>
                    </div>
                    <a data-slide="prev" onclick="app_by_comic(this,0);" href="#recommendations" class="left carousel-control btn btn-default btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a data-slide="next" onclick="app_by_comic(this,1);" href="#recommendations" class="right carousel-control btn btn-default btn-primary"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>                          
            </div>
            <div id="comic_modal_footer" class="modal-footer modal-footer-carousel">
                <?php
                    if($first_add_comic==0){
                        $event_onclick=($notComic==1)?'add_favourites(this);':'alert(\'Sorry this characters does not have comic associates.\');';
                ?>
                <div class="col-md-6" id="btn-add-fav" onclick="<?php echo $event_onclick;?>">
                       <section><img src="public/icons/btn-favourites-default.png"><label class="txt-btn-add"><b>ADD TO FAVOURITES</b></label></section>
                </div>
                <?php
                    }else{
                    $event_onclick='alert(\'Sorry this comics was already added.\');'
                ?>
                <div class="col-md-6" id="btn-added-fav" onclick="<?php echo $event_onclick;?>">
                    <section><img src="public/icons/btn-favourites-primary.png"><label class="txt-btn-added"><b>ADDED TO FAVOURITES</b></label></section>
                </div>
                <?php } ?>
                <div class="col-md-6" id="btn-buy" onclick="" role="botton">    
                    <section><img src="public/icons/shopping-cart-primary.png"><label class="txt-btn-buy"><b id="price_by">BY FOR $<?php echo $first_price; ?></b></label></section>
                </div>
            </div>
        </div>
    </div>
</div>
