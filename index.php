<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede social</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>

        <div class='header'>
        <button id="loginButton" class="botao">Fazer Login</button>

        </div>

        <div class='main'>
            
        </div>

        <div class='footer'>
            
        </div>

        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span id="closeModal" class="close">&times;</span>
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <label for="username">Nome de usuário</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
    const loginModal = document.getElementById('loginModal');
    const loginButton = document.getElementById('loginButton');
    const closeModal = document.getElementById('closeModal');

    // Função para mostrar o modal
    function showModal() {
        loginModal.style.display = 'flex';
    }

    // Função para esconder o modal
    function hideModal() {
        loginModal.style.display = 'none';
    }

    // Função para verificar a URL
    function checkURL() {
        const params = new URLSearchParams(window.location.search);
        if (params.has('login')) {
            showModal(); // Mostrar o modal se "login=true" estiver na URL
        } else {
            hideModal(); // Esconder o modal se não estiver
        }
    }

    // Função para adicionar o parâmetro "login" na URL sem recarregar a página
    function addLoginParam() {
        const url = new URL(window.location);
        url.searchParams.set('login', 'true');
        window.history.pushState({}, '', url); // Atualizar a URL sem recarregar
        showModal(); // Mostrar o modal
    }

    // Função para remover o parâmetro "login" da URL
    function removeLoginParam() {
        const url = new URL(window.location);
        url.searchParams.delete('login');
        window.history.pushState({}, '', url); // Atualizar a URL sem recarregar
        hideModal(); // Esconder o modal
    }

    // Verificar a URL ao carregar a página
    checkURL();

    // Evento de clique no botão de login
    loginButton.addEventListener('click', addLoginParam);

    // Evento de clique no botão de fechar o modal
    closeModal.addEventListener('click', removeLoginParam);

    // Fechar o modal ao clicar fora do conteúdo
    window.addEventListener('click', function(event) {
        if (event.target === loginModal) {
            removeLoginParam();
        }
    });
});

        </script>

    </div>
    
</body>
</html>