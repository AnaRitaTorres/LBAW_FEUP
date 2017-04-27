<article class="row">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src={$user.picture} />
      <figcaption class="text-center">@{$user.username}</figcaption>
    </figure>
  </div>
  <div class="col-md-10 col-sm-10">
    <div class="panel panel-default arrow left">
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
          <br />
          {/if}
        </div>
        <div class="row">
        <div class="col-md-10 col-sm-10">
          <p class="text-left"><a href="#" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-thumbs-up"></i></a></p>
        </div>
        <div class="col-md-10 col-sm-10">
          <p class="text-left"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Reply</a></p>
        </div>
        </div>
      </div>
    </div>
  </div>
</article>
