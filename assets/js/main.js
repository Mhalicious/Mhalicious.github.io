// Parallax Scrolling
$(document).ready(function()
{

	var $window = $(window);

    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this);
        
    
        $window.scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
            
            
            var coords = '50% '+ yPos + 'px';

            
            $bgobj.css({ backgroundPosition: coords });
        }); 
    });    
});
// Parallax Scrolling

/*Menu*/
$(document).ready(function()
{
$("#toggle").click(function() 
{
  	//für das "X"
  	$(this).toggleClass("on");

  	$("#menu").slideToggle();
});
});


function scroll()
{
	//console.log("scroll");
	
	var toggle = document.getElementById("toggle");
	toggle.style.top = window.pageYOffset + "px";

}
/*Menu*/

/*Schmetterlinge Div-onclick*/
// $(document).ready(function() 
// { 
//       $("#schmetterlinge").click(function(event) { 
//         window.location.href = 'http://www.Schmetterlingefliegenleise.at';
//         this.target = "_blank";
//       }); 
//  });
/*Schmetterlinge Div-onclick*/

/*Hovers*/
$(document).ready(function()
{
  $(".twitter").hover(function() {
    $(this).attr("src","assets/icons/social19_w.png");
      }, function() {
    $(this).attr("src","assets/icons/social19.png");
  });
  $(".fb").hover(function() {
    $(this).attr("src","assets/icons/facebook29_w.png");
      }, function() {
    $(this).attr("src","assets/icons/facebook29.png");
  });
  $(".mail").hover(function() {
    $(this).attr("src","assets/icons/black218_w.png");
      }, function() {
    $(this).attr("src","assets/icons/black218.png");
  });
  $(".instagram").hover(function() {
    $(this).attr("src","assets/icons/vintage2_w.png");
      }, function() {
    $(this).attr("src","assets/icons/vintage2.png");
  });
});
/*Hover*/

/*Scroll to Work*/
$(document).ready(function() 
{
    $("#scrolldown").click(function() 
    {
    $('html, body').animate(
    {
        scrollTop: $("#work").offset().top
    }, 1000);
    })
});
/*Scroll to Work*/

/*Hover Works*/
$(document).ready(function()
{
  $("#schmetterlinge").hover(function() {
    $(this).attr("src","assets/img/work/schmetterlinge/schmetterlinge_1_b.png");
      }, function() {
    $(this).attr("src","assets/img/work/schmetterlinge/schmetterlinge_1.jpg");
  });
});
/*Hover Works*/
/* Jquery Portfolio wall by Mohamed Abo El-Ghranek - fb.com/midoghranek no need to plugins */

$(document).ready(function(){

  $('.hidden').css('display','none');

  $( "#filter button" ).each(function() {

    $(this).on("click", function(){

         var filter = $(this).attr('class');         

      if ( $(this).attr('class') == 'all' ) {
         $('.hidden').contents().appendTo('#posts').hide().show('slow');
         $( "#filter button" ).removeClass('active');
         $(this).addClass('active');
         $("#filter button").attr("disabled", false);
         $(this).attr("disabled", true);
      }
      else {
         $('.post').appendTo('.hidden');
         $('.hidden').contents().appendTo('#posts').hide().show('slow');
         $('.post:not(.' + filter + ')').appendTo('.hidden').hide('slow');
         $( "#filter button" ).removeClass('active');
         $(this).addClass('active');
         $("#filter button").attr("disabled", false);
         $(this).attr("disabled", true);
      };
      
      });

  });

});
/*Hover Works*/






