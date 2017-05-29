function addUser(idevent, idcustomer){

  $.post('../../api/events/addToHost.php',{
      'idevent' : idevent,
      'idcustomer' : idcustomer
  },
  function(data, status){
    if(data.localeCompare('maxreached') == 0)
      document.getElementById("errorAddingHost").innerHtml = "Can't add more members";
    else if(data.localeCompare('memHost') == 0)
      document.getElementById("errorAddingHost").innerHtml = "Member already added";
    else
      $("#menu3").append(data);
  });
  event.stopPropagation();
  return false;
}
