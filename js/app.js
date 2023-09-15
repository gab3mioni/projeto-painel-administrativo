function Enviar() {
    let key = parseInt(document.getElementById("chave").value);
    let pwd = parseInt(document.getElementById("password").value);
    
    if(key == 1234 && pwd == 1234){
        alert(`Logado com sucesso!`)
        } else{
            alert(`Usuário ou senha incorretos!`)
        }
    }