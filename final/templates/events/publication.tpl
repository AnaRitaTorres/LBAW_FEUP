<article class="row pub{$pub.idpub}">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <a href={$userLink}><img class="img-responsive" alt="user profile picture" src={$user.picture} /></a>
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
          <img class="img-responsive" alt="publication picture" src={$pub.file} />
          <br /> {/if}

        </div>
        {if $session.username != NULL}
        <form class="form-horizontal" method="post">
		<div class="col-md-offset-0">
        {if $clear == 1}
            <button type="submit deletePub" class="deletePub btn btn-info pull-right" value={$pub.idpub}><i class="glyphicon glyphicon-trash"></i></button>
        {/if}
        </div>
          <div class="col-md-offset-1" >
            <button id="thumbsUp{$pub.idpub}" type="button" class="btn btn-info pull-right like" value={$pub.idpub}><i class="glyphicon glyphicon-thumbs-up"></i> {$likes}</button>
          </div>
        </form>
        <div class="col-md-offset-0">
            <button type="submit replyPub" class="btn btn-info pull-right replyPub" value={$pub.idpub}>Reply</button>
        </div>
		{/if}
      </div>
    </div>
  </div>
</article>
