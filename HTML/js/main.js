
$(function () {

    //Ajax para Login
    $("#form-login").submit(function () {

        var dados = $("#form-login").serialize();
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: dados,
            success: function (data) {
                data = JSON.parse(data);
                $(".resposta-login").html(data.mensagem);
                if (data.status) {
                    location.href = "../HTML/Main_Cliente.html";
                } else {

                }
            }
        });
        return false;
    });


});

$(function () {

    //Ajax para Login
    $("#FormCadastro").submit(function () {
        var dados = $("#FormCadastro").serialize();
        $.ajax({
            url: 'cadastro.php',
            type: 'POST',
            data: dados,
            success: function (data) {
                data = JSON.parse(data);
                $(".resposta-FormCadastro").html(data.mensagem);
                if (data.status) {
                 
                } else {

                }
            }
        });
        return false;
    });


});


