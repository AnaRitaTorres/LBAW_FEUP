 $(document).ready(function(){
      $("#replyPub").click(function(){
        $id = $(this).val();
      });

      $("#replyPub").unbind('click').click(function(){
          $("#reply").slideToggle  ("slow");
      });
  });
