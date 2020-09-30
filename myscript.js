$(document).ready(function () {
  refresh();
});

function refresh(){
  var request = $.ajax({
    url: "ajax.php",
    dataType: "json",
    method: "POST",
    data: {
      refresh: true
    }
  });

  request.done(function (antwort) {
    $("#myEntries").html("");
      $.each(antwort, function (index, zeile) {
        $("#myEntries").append("<div class='singleEntry'><h1>" + zeile.title + "</h1><p>"
            + zeile.description + "</p><br /><p class='timeStamp'>" + zeile.date + "</p><hr /></div>");
      });
  });

  request.done(function (antwort) {
    $("#currentEntries").html("");
    $.each(antwort, function (index, zeile) {
      $("#currentEntries").append("<li style='display: block'><h2 id='currentEntryTitles'>" + zeile.title + "</h2>"+"<button class='delete' value='" + zeile.id + "'>"+"Delete"+"</button>"+"</li><hr />");

      $(".delete").click(function () {
        var request = $.ajax({
          url: "ajax.php",
          method: "POST",
          data: {
            delete: $(this).val()
          }
        });
        request.done(function (antwort) {
          refresh();
        });
      });
    });
  });
}

function changeMode(){
  var request = $.ajax({
    url: "action.php",
    method: "POST",
    data: {invert: true}
  });
  request.done(() => location.reload());
}