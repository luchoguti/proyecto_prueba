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
function search_charters(domElement){
    valueInput=$(domElement).val();
    stringRead=valueInput.length;
    if(stringRead > 1){
       parameters={c:'personajes_marvel',a:'autocomplete_personaje',string_autocomplete:valueInput};
       $.ajax({
        url:'./index.php',
        type:'POST',
        data:parameters,
        beforeSend: function() {

        },
        complete: function(){

        },
        success:function(resultado){
            $('#query_result').html(resultado);
        },
        error:function(){alert('Error: function search_charters');}
      });
    }    
}
