function createReply(){
  $('button.reply').click(function(){
    var idpub = $(this).val();
    var idevent = $("#idevent").val();
    var des = "#description" + idpub;
    var description = $(des).val();

    $.post('../../api/events/createReply.php',{
        'idevent' : idevent,
        'description' : description,
        'idpub' : idpub
    },
    function(data, status){
      var local = '.list-of-reply' + idpub;
      $(local).prepend(data);
      var empty = "description" + idpub;
      document.getElementById(empty).value = "";
    });
    event.stopPropagation();
    return false;
  });
}

$(document).ready(createReply);
