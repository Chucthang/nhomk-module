
    
$(document).ready(function () {
   
    /*----------------------------------Click Slide Submenu------------*/


    

       $('.nav-item').click(function() {
            var _this = $(this);
            _this.children(".dropdown-menu").slideToggle();
           
            $('.nav-item').not(_this).children('.dropdown-menu').slideUp();
          
        });

         
        $('.navbar .respon').click(function() {
            $(".navbar-nav").slideToggle();
        });
   


   
       

        $(window).resize(function(){

            var width = $(window).width();

            if (width > 813 ){

                $(".navbar-nav").css({"display": "flex", "flex-direction": "row"});

            }
            else
            {
                $(".navbar-nav").css({"display": "flex", "flex-direction": "column"});
              
            }

        });

/*---------------------------- ACTIVE ARROW -------------------------*/

var arrow = document.getElementsByClassName("nav-item");
for (var i = 0; i < arrow.length; i++) {
    // debugger;
    arrow[i].addEventListener("click", function() {
        // debugger;
  var current = document.getElementsByClassName("current-menu-item");
//   debugger;
  current[0].className = current[0].className.replace(" current-menu-item", "");
  this.className += " current-menu-item";
//   debugger;
  });
}




document.getElementById('color-picker-bg').addEventListener('input',myheader);

function myheader()
{
 

    var xnav, i;
    xnav = document.querySelectorAll(".nav-link");
             var colorHeader = document.getElementById('color-picker-bg').value;
                        for (i = 0; i < xnav.length; i++) {
                        
                            xnav[i].style.color =  colorHeader;
                         
                        }
 
}





}); 

  $(document).on("change" , "#color-picker-primary" , function(){
    
    document.getElementById('wrap_header').style.background = $(this).val();
});

$(document).on("change" , "#color-picker-menu" , function(){
    
    document.getElementById('bg-nav').style.background = $(this).val();
});

