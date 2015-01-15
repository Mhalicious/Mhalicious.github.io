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





