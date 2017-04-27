<div class="row">
  <div class="col-md-6">
    <form method="get" action="../../pages/events/editEvent.php">
      <input type="hidden" name="create" value=0 />
      <input type="hidden" name="id" value={$smarty.get.id} />
      <button id="Edit" class="btn btn-info" type="submit"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Edit</button>
    </form>
  </div>
  <div class="col-md-4">
    <form method="get" action="../../actions/events/deleteEvent.php">
      <input type="hidden" name="id" value={$smarty.get.id} />
      <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove-circle"></i> Delete</Button>
    </form>
  </div>
</div>

