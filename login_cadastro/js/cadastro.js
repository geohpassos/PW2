function cadastro(){

    
    var senha = document.getElementById('senha').value;
    var email = document.getElementById('email')
    var telefone = document.getElementById('telefone') 
    var novousuario = {senha, email,telefone}
    
   
        Swal.fire({
            title: 'Cadastrado Realizado!',
            text: 'Vamos Logar!',
            icon: 'success',
            confirmButtonText: 'OK'

        }).then(()  => {
            setTimeout(() => {
                location.href = "../index/index.html";
            },100);
        });
    }
    
    
        Swal.fire({
            title: 'Erro!',
            text: 'Erro na finalização',
            icon: 'error',
            confirmButtonText: 'Tente Novamente'

        })
    
    
