$(function() {
  $(".dark").click(function() {
    $("#feed").addClass('dark');
  });
  $(".light").click(function() {
    $("#feed").removeClass('dark');
  });
  var url = 'http://codepen.io/jobs/feed/'; ///Här måste det ändras 
    var rubrik = "";
    var innehåll = "";
    var länktillevent = "";
    var skapare = "";
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
        $("#feed").append("<li><a href='" + länktillevent.link + "' target='_blank'>" + rubrik.title + "</a><br><i>" + skapare.author + "</i><a href='" + länktilldelta.link + "' class='apply'  target='_blank'>APPLY</a><div>" + innehåll.content + "</div></li>");
      }
    }
  });
});
