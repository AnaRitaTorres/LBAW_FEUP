$(document).ready(function(){
  $(".replyPub").click(function(){
    $id = $(this).val();
    $name = '#reply' + $id;

    $($name).slideToggle  ("slow");
  });
});
