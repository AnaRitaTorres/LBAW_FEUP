<article class="row reply{$pub.idpub}" hidden>
  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src={$session.picture} />
      <figcaption class="text-center">@{$session.username}</figcaption>
    </figure>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <!--<div class="comment-user">Reply to {$user.name}</div>-->
          <div class="comment-user"><i class="fa fa-user"></i> {$session.name}</div>
        </header>
        <form class="form-horizontal" method="post">
          <input type="hidden" id="idevent" name="idevent" value={$idevent} />
          <input type="hidden" id="idpub"  name="idpub" value={$pub.idpub} />
          <div class="comment-post">
            <textarea class="form-control" rows="3" id="description" name="description" placeholder="Reply"></textarea>
            <br/>
          </div>
            <div class="col-md-offset-9">
              <button type="button" class="btn btn-info pull-right reply" value={$pub.idpub}>Reply</button>
           </div>
        </form>
      </div>
    </div>
  </div>
</article>
<section class="list-of-reply{$pub.idpub}">
