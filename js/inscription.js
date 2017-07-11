$(document).ready(function(){


$("#sub").click(function(e){
 
        var vide = function(val, err){
            if(val.val().length == 0)
            {
                val.css("background-color", "red");
                $(err).html("Champ vide");
            }
        }

        var pseudo = $("#user");
        var mail = $("#mail");
        var verifMail = $("#verMail");
        var password = $("#mdp");
        var verifPass = $("#verMdp");

        var error = $(".errorPseudo");

        var flag1 = false;
        var flag2 = false;
        var flag3 = false;
        var flag4 = false;
        var flag5 = false;


        e.preventDefault();

        if(pseudo.val().length == 0)
            {
                pseudo.css("border", "2px solid red");
                pseudo.prepend("Champ vide").css("color", "red");
            }
        else if(pseudo.val().length < 4)
        {
            $(".errorPseudo").html("Username trop court !").css("color","red");
            pseudo.css("border", "2px solid red");
        }

        else{
            $(".errorPseudo").html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>").css("color","green");
            pseudo.css("border", "2px solid green");
            flag1 = true;
        }

        if(mail.val().length == 0)
            {
                mail.css("border", "2px solid red");
                $(".errorMail").html("Champ vide").css("color", "red");
            }
        else if(mail.val().match("^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$")){ //Regex ici 
            console.log("match");
            mail.css("border", "2px solid green");
            $(".errorMail").html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>").css("color","green");
            flag2 = true;
        }

        else{
            $(".errorMail").html("Email invalide").css("color","red");
        }
        
        
        if(verifMail.val().length == 0)
            {
                verifMail.css("border", "2px solid red");
                $(".erroVeriMail").html("Champ vide").css("color", "red");
            }
        
        else if(verifMail.val() == mail.val())  
        {
            $(".erroVeriMail").html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>").css("color","green");
            $(verifMail).css("border", "2px solid green");
            flag3 = true;

        }else if(verifMail.val() != mail.val()){
            $(".erroVeriMail").html("Emails non correspondants").css("color", "red");
            verifMail.css("border", "2px solid red");
        }

        
        
        if(password.val().length == 0)
            {
                password.css("border", "2px solid red");
                $(".errorPassword").html("Champ vide").css("color", "red");
            }
        else if(password.val().length < 8)
        {
            password.css("border", "2px solid red");
            $(".errorPassword").html("Password trop court").css("color", "red");
        }else{
            password.css("border", "2px solid green");
            $(".errorPassword").html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>").css("color", "green");
            flag4 = true;
        }
        
        if(verifPass.val().length == 0)
        {
            verifPass.css("border", "2px solid red");
            $(".errorVeriPass").html("Champ vide").css("color", "red");
        }
        
        else if(verifPass.val() != password.val())
        {
            $(".errorVeriPass").html("Passwords Non correspondants").css("color", "red");
            verifPass.css("border", "2px solid red");
        }

        else if(password.val() == verifPass.val())
        {
            $(".errorVeriPass").html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>").css("color", "green");
            $(password, verifPass).css("border", "2px solid green");
            flag5 = true;
        }

        if(flag1 == true && flag2 == true && flag3 == true && flag4 == true && flag5 == true)
        {
            $("#formulaire").submit();
        }
        

        

        
});



});