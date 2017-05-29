<article class="row pub{$pub.idpub} reply{$rep.idreply}">
  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
    <figure class="thumbnail">
      <a href={$userRLink}><img class="img-responsive" alt="user profile picture" src={$userR.picture} /></a>
      <a href={$userRLink}><figcaption class="text-center">@{$userR.username}</figcaption></a>
    </figure>
  </div>
  <div class="col-md-9 col-sm-9">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> {$userR.name}</div>
        </header>
        <div class="comment-post">
          <p>
            {$rep.description}
          </p>
        </div>
		<div class="col-md-offset-0">
            {if $clear == 1}
            <button type="submit deleteRep" class="deleteRep btn btn-info pull-right" value={$rep.idreply}><i class="glyphicon glyphicon-trash"></i></button>
            {/if}
        </div>
      </div>
    </div>
  </div>
</article>
