$( document ).ready(function() {
    console.log( "ready!" );

    //geeft laatste product in cart.index een beneden border
    $('.cartindexcontainer1').last().css("border-bottom", "solid black 1px");
 

 //functie om aantallen in cart.index te regelen
    $(document).on('input','#cartindexinputaantal', function(){

        var id= $(this).attr('class');
        var stuks= $(this).val();

        if(stuks !=false ){
        $(location).attr('href','cart/aantal/'+ stuks +'/'+id);
        }
 
    });



    $(document).on('mouseover','.vergroot', function(e){
    
        $(this).css('cursor','grab');
    });
  
  
//vergroot image on click
    $(document).on('click','.vergroot', function(e){

        var y = e.pageY-50;

        var options={
            'width':'22rem',
            'height':'22rem',
            'zIndex':'1000',
            'position':'absolute',
            'right':'42%',
            'top':'42%',
            'border':'1px solid black',
            'cursor':'grab' 
        }

      $(this).clone().attr('class','clone').appendTo('body').css(options);
    
      $('.clone').wrap('<div class="containerimage"></div>');

      var optionsx={
        'width':'2rem',
        'height':'2rem',
        'zIndex':'1000',
        'position':'absolute',
        'right':'42%',
        'top':'42%',
        'padding':'0.2rem'
    }

       var x = "<div class=close >X</div>";  
       $(x).appendTo('body').css(optionsx);
    
    });

    

    //verwijder image on click
    $(document).on('click','.close', function(e){

       $('.containerimage').remove();
       $(this).remove();
       
    });

 


});