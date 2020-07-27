
 $(function () {
    $('#myTab li:last-child a').tab('show');
  });
  
   
 function classToggle() {
  var el = document.querySelector('.icon-cards__content');
  el.classList.toggle('step-animation');
}

////////////////////Navbar sticky//////////////////////////
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
        
  } else {
    navbar.classList.remove("sticky");
    
  }
}
//////////////////////////////////////////////////////////
$(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});
//////////////////launching MODAL///////////////////

