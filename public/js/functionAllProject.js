/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('li a').on('click',function(e){
  	    goTo((e.target.innerHTML)-0);
    });
    $('#myModal').on('hidden.bs.modal', function (e) {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('body').removeAttr("style");
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

function view_comics_partners(id_character){
    $('#body_model').html('');
    parameters={c:'characters',a:'character_comics_partners',id_character:id_character};
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
function app_by_comic(elementDom,filter){
    //1 filter next and 2 filter prev
    if(filter==1){
        div_price=$(elementDom).closest('div').find('[class="item active"]').next('div');
    }else{
        div_price=$(elementDom).closest('div').find('[class="item active"]').closest('div');
    }
    value_price=div_price.find('[class="price_comic"]').val();
    
    $('#price_by').html('BY FOR $'+value_price);

}

function fill_section_comics(){
    var items = JSON.parse(localStorage.getItem("test"));
    var txt_html='';
    $.each(items,function(key,value){
        txt_html+='<article class="art-comic" id="comic_'+value['id']+'">';
        txt_html+='    <img class="img-responsive img-remove-fav" src="public/icons/btn-delete.png" remove_fav_comics('+value['id']+');>';
        txt_html+='    <img class="img-responsive" src="'+value['url']+'">';
        txt_html+='    <h5><b>'+value['name']+'</b></h5>';
        txt_html+='</article>';
    });
    $('#carrito_comic').append(txt_html);
}

function added_favourites(elementDom){

    var id_comic=$(elementDom).parent().parent().closest('div').find('[class="item active"]').find('[class="id_comic"]').val();
    var title_comic=$(elementDom).parent().parent().closest('div').find('[class="item active"]').find('[class="title_comic"]').val();
    var url_img_comic=$(elementDom).parent().parent().closest('div').find('[class="item active"]').find('[class="url_comic"]').val();
  
     var test = localStorage.getItem("test");
     var obj = [];
     if(test){
         obj= JSON.parse(test);  
     }
     obj.push({"id":id_comic,"name":title_comic,"url":url_img_comic});
     localStorage.setItem("test",JSON.stringify(obj));

    var txt_html='';
    txt_html+='<article class="art-comic" id="comic_'+id_comic+'">';
    txt_html+='    <img class="img-responsive img-remove-fav" src="public/icons/btn-delete.png" remove_fav_comics('+id_comic+');>';
    txt_html+='    <img class="img-responsive" src="'+url_img_comic+'">';
    txt_html+='    <h5><b>'+title_comic+'</b></h5>';
    txt_html+='</article>';
    
    $('#carrito_comic').append(txt_html);
    $('#myModal').hide();
    $('.modal-backdrop').hide();
    $('body').css('padding-right','0px');
}


