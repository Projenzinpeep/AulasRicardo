$(document).ready(function() {

    var numeror = "";
    //var bacano = 1 + Math.floor(Math.ramdom() * 100);

    $("#btBacana").on("click", function() {
        numeror = $("#txtRoleta").val();
        alert(numeror);
    });
}); 