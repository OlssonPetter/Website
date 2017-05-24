$(function() {
  $(".dark").click(function() {
    $("#feed").addClass('dark');
  });
  $(".light").click(function() {
    $("#feed").removeClass('dark');
  });
 
    var rubrik = "NamnPåEvent";
    var innehåll = "InfoOmEvent";
    var länktillevent = "";
    var skapare = "Creater";
    var länktilldelta = "";
        // console.log(values[i]);
        ////// I values vill vi lagra alla värden som ska synas i startsidans feed. T.ex. namn på event, info, osv.   
        
          //////Detta är informationen som visas i startpage.php. Borde gå att ta från en användarinput istället. Alltså att lagra alla event i variabeln values och loopa igenom tabellen som lagrar alla event.  
        $("#feed").append("<li><a href='" + länktillevent + "' target='_blank'>" + rubrik + "</a><br><i>" + skapare + "</i><a href='" + länktilldelta + "' class='apply'  target='_blank'>JOIN!</a><div>" + innehåll + "</div></li>");
      
    
    
    }
  });
});
