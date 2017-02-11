
$(document).ready(function(data){
   console.log("coucou");
   $.getJSON("http://freegeoip.net/json/", function(data){
      console.log(data.country_code);
   });
});


