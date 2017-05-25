$(document).ready(function(){

  var hosted = JSON.parse($("#hosted").val());
  var invited = JSON.parse($("#invited").val());

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
        data: [hosted.cinemacount, hosted.concertcount, hosted.theatrecount, hosted.exhibitioncount, hosted.dancecount]
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
        data: [invited.cinemacount, invited.concertcount, invited.theatrecount, invited.exhibitioncount, invited.dancecount]
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
});
