function rateEvent(){
  $('button#rate_event').click(function(){
    var idevent = $("#idevent").val();
    var rate = $("#quantity").val();

    if (rate >= 1 && rate <= 5){
      $.post('../../api/events/evaluateEvent.php',{
          'idevent' : idevent,
          'rate' : rate
      },
      function(data, status){
        document.getElementById("rating_stars").innerHTML = data;
        document.getElementById("rate_response").innerHTML = "Thanks for Evaluating!";
      });
    }
    else {
      document.getElementById("rate_response").innerHTML = "Please enter a valid rate, between 1 and 5!";
    }

    event.stopPropagation();
    return false;
  });
}

$(document).ready(rateEvent);
