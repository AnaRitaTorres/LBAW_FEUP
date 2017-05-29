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
    <p>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalHost"><i class="glyphicon glyphicon-plus"></i>&nbsp;Hosts</button>
      <div id="myModalHost" class="modal fade" role="dialog">
        <div class="modal-dialog">
           <div class="modal-content">
            <div class="modal-header">
              <button id="closeHost" type="button" class="pull-right btn btn-lg btn-default" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Host</h4>
            </div>
            <div class="modal-body">
              <form method="post">
                <div class="input-group">
                  <input type="text" id="searchHost" class="form-control" placeholder="Search" name="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-info" id="startSearch" type="button" value={$info.idevent}><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </form>
              <div id="errorAddingHost">
              </div>
              <div id="searchResult">
              </div>
            </div>
          </div>
        </div>
      </div>
    </p>
  </div>
</div>
