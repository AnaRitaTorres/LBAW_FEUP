var ctx = document.getElementById("myHostedEvents").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  options: {
    legend: {
      display: false
    }
  },
  data: {
    labels: ["Cinema", "Concerts", "Theatre", "Exhibitions", "Dance"],
    datasets: [{
      backgroundColor: [
        "#008B8B",
        "#3498db",
        "#95a5a6",
        "#000080",
        "#B0E0E6"
      ],
      data: [<?php echo(json_encode($hosted['cinemacount'])) ?>, <?php echo(json_encode($hosted['concertcount'])) ?>, <?php echo(json_encode($hosted['dancecount'])) ?>, <?php echo(json_encode($hosted['exhbitioncount'])) ?>, <?php echo(json_encode($hosted['theatrecount'])) ?>]
    }]
  }
});
var ctx = document.getElementById("myInvitedEvents").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  options: {
    legend: {
      display: false
    }
  },
  data: {
    labels: ["Cinema", "Concerts", "Theatre", "Exhibitions", "Dance"],
    datasets: [{
      backgroundColor: [
        "#008B8B",
        "#3498db",
        "#95a5a6",
        "#000080",
        "#B0E0E6"
      ],
      data: [<?php echo(json_encode($invited['cinemacount'])) ?>, <?php echo(json_encode($invited['concertcount'])) ?>, <?php echo(json_encode($invited['dancecount'])) ?>, <?php echo(json_encode($invited['exhbitioncount'])) ?>, <?php echo(json_encode($invited['theatrecount'])) ?>]
    }]
  }
});
var ctx = document.getElementById("myTitle").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Cinema", "Concerts", "Theatre", "Exhibitions", "Dance"],
    datasets: [{
      backgroundColor: [
        "#008B8B",
        "#3498db",
        "#95a5a6",
        "#000080",
        "#B0E0E6"
      ],
      data: [0, 0, 0, 0, 0]
    }]
  }
});
