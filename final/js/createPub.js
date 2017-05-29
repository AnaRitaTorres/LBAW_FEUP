function createComment(){
  $('button#publish_pub').click(function(){
    var idevent = $("#idevent").val();
    var comment = $("#comment").val();
    $.post('../../api/events/createPublication.php',{
        'idevent' : idevent,
        'comment' : comment
    },
    function(data, status){
      $('.list-of-comments').prepend(data);
      document.getElementById("comment").value = "";
    });
    event.stopPropagation();
    return false;
  });
}

$(document).ready(createComment);
