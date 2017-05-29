function deleteReply(){
  $('button.deleteRep').click(function(){
    var idreply = $(this).val();
    $.post('../../api/events/deleteReply.php',{
        'idreply' : idreply
    },
    function(data, status){
      article = ".reply" + idreply;
      $(article).hide();
    });
    event.stopPropagation();
    return false;
  });
}

$(document).ready(deleteReply);
