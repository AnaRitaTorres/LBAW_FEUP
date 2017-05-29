function deletePub(){
  $('button.deletePub').click(function(){
    var idpub = $(this).val();
    $.post('../../api/events/deletePublication.php',{
        'idpub' : idpub
    },
    function(data, status){
      article = ".pub" + idpub;
      $(article).hide();
    });
    event.stopPropagation();
    return false;
  });
}

$(document).ready(deletePub);
