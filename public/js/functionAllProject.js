/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('li a').on('click',function(e){
  	    goTo((e.target.innerHTML)-0);
    });
});

function goTo(number){
   $('ul.pager li:eq('+number+') a').tab('show');
   upgradePreNext(number);
}
function upgradePreNext(number){
   if (number>1){
       $('ul.pager li:eq(0)').attr("onclick","goTo("+(number-1)+")");
       $('ul.pager li:eq(0)').attr("class", "previous");
   } else {
       $('ul.pager li:eq(0)').attr("class", "disabled");
   }
    if (number<5){
       $('ul.pager li:eq(6)').attr("onclick","goTo("+(number+1)+")");
       $('ul.pager li:eq(6)').attr("class", "next");
   } else {
       $('ul.pager li:eq(6)').attr("class", "disabled");
   }
}
//Function that is responsible for performing the search ajax of characters
function search_charters(filter){
    $('#body_model').html('');
    valueInput_search=$('#search_input').val();
    valueSelect_ordeBy=$('#sort_by').val();
    stringRead=valueInput_search.length;
    $body = $("body");
    if(stringRead > 1 || filter==1){
       parameters={c:'characters',a:'autocomplete_characters',string_autocomplete:valueInput_search,sort:valueSelect_ordeBy};
       $.ajax({
        url:'./index.php',
        type:'POST',
        data:parameters,
        beforeSend: function() {
            waitingDialog.show('wait please...');
        },
        complete: function(){
            waitingDialog.hide();
        },
        success:function(resultado){
            $('#query_result').html(resultado);
        },
        error:function(){alert('Error: function search_charters');}
      });
    }    
}
//function to generate an ajax looking for the comics associated with a specific character
function view_comics_partners(id_character){
    var items = JSON.parse(localStorage.getItem("comics"));
    if(items!== null){
        id_comics={};
        j=0;
        $.each(items,function(key,value){
            id_comics[j]=value['id'];
            j++;
        });
    }else{
      id_comics={};
    }
    $('#body_model').html('');
    parameters={c:'characters',a:'character_comics_partners',id_character:id_character,add_fav:JSON.stringify(id_comics)};
    $.ajax({
        url:'./index.php',
        type:'POST',
        data:parameters,
        beforeSend: function() {
            waitingDialog.show('wait please...');
        },
        complete: function(){
            waitingDialog.hide();
        },
        success:function(resultado){
            $('#body_model').html(resultado);
            $('#myModal').modal('show');
        },
        error:function(){alert('Error: function search_charters');}
    });
}
//funcion que cambiar el precio de venta de los comics y it is responsible for ensuring that repeated comics are not included in the favorites list
function app_by_comic(elementDom,filter){
    //1 filter next and 2 filter prev
    if(filter==1){
        div_price=$(elementDom).closest('div').find('[class="item active"]').next('div');
    }else{
        div_price=$(elementDom).closest('div').find('[class="item active"]').prev('div');
    }
    value_price=div_price.find('[class="price_comic"]').val();
    value_add_comic=div_price.find('[class="state_comic"]').val();
    var div_add='';
    if(value_add_comic==1){
        div_add+='<div class="col-md-6" id="btn-added-fav" onclick="alert(\'Sorry this comics was already added.\');">';
        div_add+='  <section><img src="public/icons/btn-favourites-primary.png"><label class="txt-btn-added"><b>ADDED TO FAVOURITES</b></label></section>';
        div_add+='</div>';
    }else{
        div_add+='<div class="col-md-6" id="btn-add-fav" onclick="add_favourites(this);">';
        div_add+='   <section><img src="public/icons/btn-favourites-default.png"><label class="txt-btn-add"><b>ADD TO FAVOURITES</b></label></section>';
        div_add+='</div>';
    }
    $('#btn-add-fav,#btn-added-fav ').remove();
    $('#comic_modal_footer').prepend(div_add);
    $('#price_by').html('BY FOR $'+value_price);

}
///Function that fills the section of comics added to favorites
function fill_section_comics(){
    var items = JSON.parse(localStorage.getItem("comics"));
    var txt_html='';
    if(items!== null){
        $.each(items,function(key,value){
            txt_html+='<article class="art-comic" id="comic_'+value['id']+'">';
            txt_html+='    <img class="img-responsive img-remove-fav" src="public/icons/btn-delete.png" onclick="remove_fav_comics('+value['id']+');">';
            txt_html+='    <img class="img-responsive" src="'+value['url']+'">';
            txt_html+='    <h5><b>'+value['name']+'</b></h5>';
            txt_html+='</article>';
        });
        $('#carrito_comic').prepend(txt_html);
    }
}
//Function that is responsible for adding comics to the favorites section
function add_favourites(elementDom){

    var id_comic=$(elementDom).parent().parent().closest('div').find('[class="item active"]').find('[class="id_comic"]').val();
    var title_comic=$(elementDom).parent().parent().closest('div').find('[class="item active"]').find('[class="title_comic"]').val();
    var url_img_comic=$(elementDom).parent().parent().closest('div').find('[class="item active"]').find('[class="url_comic"]').val();
  
     var comics = localStorage.getItem("comics");
     var obj = [];
     if(comics){
         obj= JSON.parse(comics);  
     }
     obj.push({"id":id_comic,"name":title_comic,"url":url_img_comic});
     localStorage.setItem("comics",JSON.stringify(obj));

    var txt_html='';
    txt_html+='<article class="art-comic" id="comic_'+id_comic+'">';
    txt_html+='    <img class="img-responsive img-remove-fav" src="public/icons/btn-delete.png" onclick="remove_fav_comics('+id_comic+');">';
    txt_html+='    <img class="img-responsive" src="'+url_img_comic+'">';
    txt_html+='    <h5><b>'+title_comic+'</b></h5>';
    txt_html+='</article>';
    
    $('#carrito_comic').prepend(txt_html);
    $('#myModal').hide();
    $('.modal-backdrop').hide();
    $('body').css('padding-right','0px');
}
//Function that delete comics to the section of favorites
function remove_fav_comics(id_comic){
    comics=localStorage.getItem("comics");
    var items = JSON.parse(comics);
    var items_delete = JSON.parse(comics);
    $.each(items,function(key,value){
        var id_co=value['id'];
        if(id_co==id_comic){
            items_delete.splice(key,1);
        }
    });

    if(comics){
        obj= items_delete; 
    }
    localStorage.setItem("comics",JSON.stringify(obj));
    $('#comic_'+id_comic).remove();
    
 }

