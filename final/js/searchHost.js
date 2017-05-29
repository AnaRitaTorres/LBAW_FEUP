function searchHost(){
  $('button#startSearch').click(function(){
    var username = $("#searchHost").val();
    var idevent = $(this).val();

    $.post('../../api/events/searchHost.php',{
        'idevent' : idevent,
        'username' : username
    },
    function(data, status){
      $("#searchResult").append(data);
    });
    event.stopPropagation();
    return false;
  });

  $('#myModal').modal({backdrop: 'static', keyboard: false});

}

$(document).ready(searchHost);
