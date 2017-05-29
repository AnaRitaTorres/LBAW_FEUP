
</section>
<article class="row">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" alt="profile picture" src={$session.picture} />
      <figcaption class="text-center">@{$session.username}</figcaption>
    </figure>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> {$session.name}</div>
        </header>
        <form class="form-horizontal" method="post" enctype="multipart/form-data" >
          <input type="hidden" id="idevent" name="idevent" value={$idevent} />
          <div id="box" class="comment-post">
            <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Publication"></textarea>
            <br />
          </div>
            <div class="col-md-offset-9">
              <button type="button" id="publish_pub" class="btn btn-info pull-right">Publish</button>
            </div>
         </form>
      </div>
    </div>
  </div>
</article>
<section class="list-of-comments">
