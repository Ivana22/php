$( document ).ready(function() {
    var $productcarousel = $('#product-list');
   var products = $productcarousel.children().length;
   var productwidth = (products * 350); // 300px width for each client item 
   $productcarousel.css('width',productwidth);
});


$(function(){


  var $clientcarousel = $('#logo-list');
  var clients = $clientcarousel.children().length;
  var clientwidth = (clients * 270); // 300px width for each client item 
  $clientcarousel.css('width',clientwidth);
  
  var rotating = true;
  var clientspeed = 2100;
  var seeclients = setInterval(rotateClients, clientspeed);
  
  function rotateClients() {
    if(rotating != false) {
      var $first = $('#logo-list li:first');
      $first.animate({ 'margin-left': '-250px' }, 600, function() {
        $first.remove().css({ 'margin-left': '0px' });
        $('#logo-list li:last').after($first);
      });
    }
  }
  
});

$( "#next" ).click(function() {
  
      var $first1 = $('#product-list div:first');
      $first1.animate({ 'margin-left': '-350px' }, 600, function() {
        $first1.remove().css({ 'margin-left': '0px' });
        $('#product-list div:last').parent().parent().closest('div').append($first1);
      });
});

$( "#prev" ).click(function() {
    var $last1 = $('#product-list div:last').parent().closest('div');
	$last1.css({ 'margin-left': '-350px' });
	$('#product-list div:first').parent().prepend($last1);
	
      $last1.animate({ 'margin-left': '0px' }, 600, function() {
        //$('#product-list div:last').parent().remove();
      });
});
/*$(function(){

	
  var $productcarousel = $('#product-list');
  var products = $productcarousel.children().length;
  var productwidth = (products * 380); // 300px width for each client item 
  $productcarousel.css('width',productwidth);
  
  var rotating = true;
  var clientspeed = 3000;
  var seeclients = setInterval(rotateClients1, clientspeed);
  function rotateClients1() {
    if(rotating != false) {
      var $first1 = $('#product-list div:first');
      $first1.animate({ 'margin-left': '-250px' }, 600, function() {
        $first1.remove().css({ 'margin-left': '0px' });
        $('#product-list div:last').parent().parent().closest('div').append($first1);
      });
    }
  }
  });*/