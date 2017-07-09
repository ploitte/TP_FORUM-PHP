$(document).ready(function(){

    
    $("input").change(function(){

        var pseudo = $("#user");
        var mail = $("#mail");
        var verifMail = $("#verMail");
        var password = $("#mdp");
        var verifPass = $("#verMdp");

    if(pseudo.val().length < 4)
    {
        $(".errorPseudo").html("Username trop court").css("color","red");
        pseudo.css("border", "1px solid red");
    }else{
        $(".errorPseudo").html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>").css("color","green");
    }

   }); 
});