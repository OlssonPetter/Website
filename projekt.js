$(function() {
  $(".dark").click(function() {
    $("#feed").addClass('dark');
  });
  $(".light").click(function() {
    $("#feed").removeClass('dark');
  });
  var url = 'http://codepen.io/jobs/feed/'; ///Här måste det ändras 
    var rubrik = "NamnPåEvent";
    var innehåll = "InfoOmEvent";
    var länktillevent = "";
    var skapare = "Creater";
    var länktilldelta = "";
    
  
  $.ajax({
    type: "GET",
    url: document.location.protocol + '//api.rss2json.com/v1/api.json?rss_url=' + encodeURIComponent(url),
    dataType: 'json',
    error: function() {
      $("#feed").after("<center>Unable to load feed, Incorrect path or invalid feed</center>");
    },
    success: function(xml) {
      values = xml.items;

      for (var i = 0, j = values.length; i < j; i++) {
        // console.log(values[i]);
        ////// I values vill vi lagra alla värden som ska synas i startsidans feed. T.ex. namn på event, info, osv.   
        
          //////Detta är informationen som visas i startpage.php. Borde gå att ta från en användarinput istället. Alltså att lagra alla event i variabeln values och loopa igenom tabellen som lagrar alla event.  
        $("#feed").append("<li><a href='" + länktillevent + "' target='_blank'>" + rubrik + "</a><br><i>" + skapare + "</i><a href='" + länktilldelta + "' class='apply'  target='_blank'>JOIN!</a><div>" + innehåll + "</div></li>");
      }
    }
  });
});
