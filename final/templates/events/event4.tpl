</section>
</div>
</div>
</div>
</div>
</div>
{if $session.username != NULL}
<div id="menu2" class="tab-pane fade">
  <div class="row">
     <div class="evaluation-container">
      <div class="row">
        <div class="col-md-12">
          <form method="post">
            <input type="hidden" id="idevent" name="idevent" value={$idevent} />
            Rate Event (between 0 and 5):
            <input type="number" id="quantity" name="quantity" min="1" max="5">
            <button type="button" id="rate_event" class="btn btn-info pull-right">Evaluate</button>
          </form>
          <div id="rate_response">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  {/if}

<div id="menu3" class="tab-pane fade">
  <div class="row">
    <div class="host-container">
      <div class="row">
        <div class="col-md-12">
         <ul class="listHost">
