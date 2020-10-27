$("#sendmail").click( function (){
    let data = {};
    data.nome = document.getElementById('name').value;
    data.email = document.getElementById('email').value;
    data.texto = document.getElementById('message').value;

    $.ajax({
        url: '/email.php',
        method: 'POST',
        data: data,
        success:function (data) {
            console.log(data)
        }
    })

    swal('Enviado com sucesso','Aguarde nosso retorno','success');
})