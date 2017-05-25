<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>



<div class="row">
  <div class="col-md-10 ">
    <form class="form-horizontal" method="post" action="../../actions/events/createEvent.php" enctype="multipart/form-data">
      <input type="hidden" name="create" value={$create} />
      <input type="hidden" name="id" value={$id} />
      <fieldset>
        {if $create == 1}
        <legend>Create Event</legend>
         {else}
        <legend>Edit Event</legend>
         {/if}
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventTitle">Event Title</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-music"></i>
              </div>
              <input id="EventTitle" name="EventTitle" type="text" placeholder="Event Title*" class="form-control input-md" required value={if $create==0}{$info.title}{/if}>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventType">Type</label>
          <div class="col-md-4">
            <select class="form-control col-md-4" id="EventType" name="EventType" required>
                  <option>theatre</option>
                  <option>exhibition</option>
                  <option>cinema</option>
                  <option>concert</option>
                  <option>dance</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
          <div class="col-md-4">
            <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label col-xs-12" for="Location">Location</label>
          <div class="col-md-2  col-xs-4">
            <input id="Location" name="Location" type="text" placeholder="District" class="form-control input-md " value={if $create==0
              }{$info.district}{/if}>
          </div>
          <div class="col-md-2 col-xs-4">
            <input id="Area" name="Area" type="text" placeholder="Area" class="form-control input-md" value={if $create==0 }{$info.area}{/if}>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Address"></label>
          <div class="col-md-2  col-xs-4">
            <input id="Street" name="address" type="text" placeholder="Street*" class="form-control input-md" required value={if $create==0 }{$info.address}{/if}>
          </div>
          <div class="col-md-2 col-xs-4">
            <input id="ZipCode" name="ZipCode" type="text" placeholder="Zip-Code*" class="form-control input-md" required value={if $create==0}{$info.zip_code}{/if}>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventDate">Date</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
              </div>
              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY*" type="text" required  value={if $create==0}{$info.date}{/if}>
			  <span class="field_error">{$FIELD_ERRORS.date}</span>             
			 <script type="text/javascript" src="../../js/calendar.js"></script>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventDate">Time</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-time"></i>
              </div>
               <input id="EventTime" name="EventTime" type="time" placeholder="EventTime*" class="form-control input-md" value={if $create==0}{$info.time}{/if} required>

            </div>
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="EventPrice">Price</label>
            <div class="col-md-4">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-euro"></i>
                </div>
                <input id="EventPrice" name="EventPrice" type="number" placeholder="EventPrice*" class="form-control input-md" value={if $create==0}{$info.price}{/if} required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview</label>
            <div class="col-md-4">
              <textarea class="form-control" rows="10" id="Overview" name="Overview" placeholder="max 200 words*">{if $create == 0}{$info.overview}{/if}</textarea>
            </div>
          </div>
		  <div class="row">
			<div class="col-md-12 col-offset-1">
				<div id="error_messages">
				{foreach $ERROR_MESSAGES as $error}
						<div class="error">{$error}<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
				{/foreach}
				</div>
				<div id="success_messages">
				{foreach $SUCCESS_MESSAGES as $success}
						<div class="success">{$success}<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
				{/foreach}
			    </div>
			</div>
		  </div>
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
            </div>
          </div>
      </fieldset>
    </form>
    </div>
  </div>
</div>
