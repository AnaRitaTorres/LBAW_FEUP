<div class="row">
  <div class="col-md-offset-0">
    <form method="get" action="../../pages/events/editEvent.php">
      <input type="hidden" name="create" value=0 />
      <input type="hidden" name="id" value={$smarty.get.id} />
      <p>
        <button id="Edit" class="btn btn-info" type="submit"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Edit</button>
      </p>
    </form>
      <form method="get" action="../../actions/events/deleteEvent.php">
      <input type="hidden" name="id" value={$smarty.get.id} />
      <p>
        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i>&nbsp;Delete</Button>
      </p>
    </form>
  </div>
</div>
