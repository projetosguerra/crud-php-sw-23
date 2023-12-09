<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

?>
<?php
    include_once('cabecalho.php');
?>

            <!--/.col-->
            <div class="col-sm-8">
                <div class="card">
                    <form action="cadastra_usuario.php" method="POST">
                        <h2 style="margin: 10px;">INSERIR NOVO USUÁRIO DO SISTEMA</h2>
                        <div class="mb-3">
                            <label style="margin: 10px;" for="nome_usuario" class="form-label">Nome do Usuário</label>
                            <input style="margin-left: 5px;" type="text" class="form-control" id="nome_usuario" name="nome_usuario">                            
                        </div>
                        <div class="mb-3">
                            <label style="margin: 10px;" for="email_usuario" class="form-label">Email do Usuário</label>
                            <input style="margin-left: 5px;" type="email" class="form-control" id="email_usuario" name="email_usuario">
                        </div>
                        <div class="mb-3">
                            <label style="margin: 10px;" for="senha" class="form-label">Senha</label>
                            <input style="margin-left: 5px;" type="password" class="form-control" id="senha" name="senha">
                        </div>                        
                        <button style="margin-left: 5px; margin-bottom: 10px; border-radius: 10px;" type="submit" class="btn btn-primary">Cadastrar Novo Usuário</button>
                    </form>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>