function likePub(){
  $('button.like').click(function(){
    var idpub = $(this).val();
    $.post('../../api/events/likePub.php',{
        'idpub' : idpub
    },
    function(data, status){
      var local = "thumbsUp" + idpub;
      document.getElementById(local).innerHTML = '<i class="glyphicon glyphicon-thumbs-up"></i> ' + data;
    });
    event.stopPropagation();
    return false;
  });
}

$(document).ready(likePub);
