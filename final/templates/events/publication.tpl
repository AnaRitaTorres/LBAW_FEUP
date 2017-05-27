 <!--<script>$(document).ready(function(){
      $(".reply").hide();

      $(".replyPub").unbind('click').click(function(){
          $(".reply").slideToggle  ("slow");
      });
  });</script>
 script de cima é para o reply mas apenas está a funcionar para 1  -->

<article class="row">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <a href={$userLink}><img class="img-responsive" src={$user.picture} /></a>
      <a href={$userLink}>
        <figcaption class="text-center">@{$user.username}</figcaption>
      </a>
    </figure>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> {$user.name}</div>
        </header>
        <div class="comment-post">
          {if $pub.comment != NULL}
          <p>
            {$pub.comment}
          </p>
          {else}
          <img class="img-responsive" src={$pub.file} />
          <br /> {/if}
        </div>

          <div class="col-md-offset-0">
            <button id="thumbsUp" class="btn btn-info pull-right"><i class="glyphicon glyphicon-thumbs-up"></i></button>
          </div>
          <div class="col-md-offset-9">
            <button id="thumbsDown" class="btn btn-info pull-right" ><i class="glyphicon glyphicon-thumbs-down"></i></button>
          </div>
          <div class="col-md-offset-0">

              <button type="submit" id="replyPub" class="btn btn-info pull-right replyPub" value={$pub.idpub}>Reply</button>

              <!-- Isto é o que estou a usar para aparecer. Mas apenas aparece para 1 -->
              <!-- <div class="col-lg-10 col-md-10 col-sm-10">
                  <div id="reply" class="panel panel-default arrow left reply">
                    <div class="panel-body">
                      <header class="text-left">
                        <div class="comment-user"><i class="fa fa-user"></i> {$session.name}</div>
                      </header>
                      <form class="form-horizontal" method="post" action="../../actions/events/createReply.php">
                        <input type="hidden" name="idevent" value={$idevent} />
                        <div id="box" class="comment-post box">
                          <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Publication"></textarea>
                          <br />
                        </div>
                          <div class="col-md-offset-9">
                            <button type="submit" class="btn btn-info pull-right">Publish</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div> -->
                <!-- Termina aqui -->

           </div>
        </div>
    </div>
  </div>
</article>
