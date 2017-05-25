$(document).ready(function () {

  var location_north = true;
  var location_center = true;
  var location_south = true;
  var type_cinema = true;
  var type_concert = true;
  var type_dance = true;
  var type_theatre = true;
  var type_exhibition = true;
  var use_price = false;
  var use_date = false;
  var date;
  var price;

  $('#date').on('change', function() {
    use_date = true;
    d = document.getElementById("date").value;
    var ds = d.split('/');
    date = ".date";
    for (var i = 0; i < ds.length; i++){
      date += ds[i];
    }
    filter();
  });
  $('#location-north').click( function (){
    location_north = this.checked;
    filter();
  });
  $('#location-center').click( function (){
    location_center = this.checked;
    filter();
  });
  $('#location-south').click( function (){
    location_south = this.checked;
    filter();
  });

  $('#type-cinema').click( function (){
    type_cinema = this.checked;
    filter();
  });
  $('#type-concert').click( function (){
    type_concert = this.checked;
    filter();
  });
  $('#type-exhibition').click( function (){
    type_exhibition = this.checked;
    filter();
  });
  $('#type-dance').click( function (){
    type_dance = this.checked;
    filter();
  });
  $('#type-theatre').click( function (){
    type_theatre = this.checked;
    filter();
  });
  $('#price').on('change', function() {
    use_price = true;
    price = document.getElementById("price").value;
    console.log(price);
    filter();
  });

  function filter(){
    if(use_date){
      $('.event').hide();
      $(date).show();
    }
    else{
      $('.event').show();
    }
    if (!location_north)
      $('.Norte').hide();
    if (!location_center)
      $('.Centro').hide();
    if (!location_south)
      $('.Sul').hide();
    if (!type_cinema)
      $('.cinema').hide();
    if (!type_concert)
      $('.concert').hide();
    if (!type_dance)
      $('.dance').hide();
    if (!type_theatre)
      $('.theatre').hide();
    if (!type_exhibition)
      $('.exhibition').hide();
    if (use_price){
      for (var i = 200; i > price; i--){
        var p = '.price' + i;
        $(p).hide();
      }
    }
  }


  // var price = getElementById("range");
  // if ($('.price') <= price)
  //   $('.evento').show();
  // else
  //   $('.evento').hide();

});

function showValue(newValue) {
  document.getElementById("range").innerHTML = newValue;
}
