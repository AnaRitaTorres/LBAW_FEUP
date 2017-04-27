<article class="row">
  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src={$userR.picture} />
      <figcaption class="text-center">@{$user.username}</figcaption>
    </figure>
  </div>
  <div class="col-md-9 col-sm-9">
    <div class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> {$userR.name}</div>
        </header>
        <div class="comment-post">
          <p>
            {$rep.description}
          </p>
        </div>
      </div>
    </div>
  </div>
</article>
