function createReply(){
  $('button.reply').click(function(){
    var idevent = $("#idevent").val();
    var description = $("#description").val();
    var idpub = $(this).val();
    console.log(idpub);
    $.post('../../api/events/createReply.php',{
        'idevent' : idevent,
        'description' : description,
        'idpub' : idpub
    },
    function(data, status){
      var local = '.list-of-reply' + idpub;
      console.log(data);
      $(local).prepend(data);
      document.getElementById("description").value = "";
    });
    event.stopPropagation();
    return false;
  });
}

$(document).ready(createReply);
