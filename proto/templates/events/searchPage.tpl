<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="../../js/calendar.js"></script>
<script type="text/javascript" src="../../js/priceValue.js"></script>

<div class="container specific">
  <div class="row">


    <div class=" col-sm-3">
      <nav class="navbar navbar-default ES">

        <form method="post">
          <h2 id="filters">Filters</h2>

          <div class="well">
            <div class="checkbox">
              <h4 class="filter">Location</h4>
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Norte
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Centro
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Sul
	          </label>
            </div>
          </div>

          <div class="well">
            <div class="checkbox">
              <h4 class="filter">Type</h4>
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Cinema
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Concerts
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Exhibitions
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Dance
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Theatre
	          </label>
            </div>
          </div>

          <div class="well">
            <h4 class="filter">Price</h4>
            <input type="range" min="0" max="50" value="0" step="5" onchange="showValue(this.value)">
            <span id="range">0</span>
          </div>
          <div class="well">
            <h4 class="filter">Date</h4>
            <div class="form-group">
              <!-- Date input -->
              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
            </div>
          </div>

          <div class="form-group">
            <!-- Submit button -->
            <button class="btn btn-primary center-block" name="submit" type="submit"><i class="glyphicon glyphicon-ok"></i>&nbsp;Submit</button>
          </div>
        </form>
      </nav>
    </div>

    <div class="col-sm-offset-1 col-sm-8">
       <nav class="navbar navbar-default ES">
                <ul class="event-list">
