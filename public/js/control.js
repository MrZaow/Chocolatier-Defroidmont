
$(document).ready(function(data){

   $.getJSON("http://freegeoip.net/json/", function(data){
      console.log(data.country_code);
   });

   //Initialisation des events pour les text input

   $(".qty > input").each(function(){
      $(this).change(qtyChange);
   });
});

function qtyChange(event){
  console.log("Hello");
  name = $(this).attr("id");
  prix = parseFloat($("#" + name + "_p").text());
  old_prix = parseFloat($("#" + name + "_s").text())
  new_prix = prix * $(this).val();

  $("#" + name +"_h").val($(this).val());
  $("#" + name + "_s").text(prix * $(this).val());

  //Mise à jour du prix  total
  old_tot = parseFloat($("#total").text());
  $("#total").text(old_tot + new_prix - old_prix);

}

