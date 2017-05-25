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
              <button type="submit" id="replyPub" class="btn btn-info pull-right">Reply</button>
           </div>
        </div>
    </div>
  </div>
</article>
