$(document).ready(function() {
    var bacano = Math.floor(Math.random() * 100) + 1;
    
    $("#btBacana").click(function() {
        var numuser = parseInt($("#txtRoleta").val());

        if (numuser > bacano){
            alert("O número é menor!");
        } else if (numuser < bacano){
            alert("O número é maior!");
        } else {
            alert("Você acertou e ganhou o esquema!");
        }
    });
});