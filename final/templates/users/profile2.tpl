</ul>
</nav>
</div>

<div id="menu1" class="tab-pane fade">
  <input type="hidden" id="hosted" value={$hosted} />
  <input type="hidden" id="invited" value={$invited} />
  <div class="row">
    <div class="col-xs-offset-0 col-xs-5">
      Hosted<canvas id="myHostedEvents"></canvas>
    </div>
    <div class="col-xs-offset-1 col-xs-5">
      Invited<canvas id="myInvitedEvents"></canvas>
    </div>
    <div class="col-xs-offset-2 col-xs-8">
      <canvas id="myTitle"></canvas>
    </div>
  </div>
</div>
</div>
</div>
