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

        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Cadastro fácil</span> Comece registrando-se em minutos. Basta preencher algumas informações básicas e você estará pronto para começar a aproveitar todos os benefícios do nosso gerenciador de clientes.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-8" style="width: 980px;">
                <div class="card">
                    <form action="insere_cliente.php" method="POST">
                        <div class="mb-3">
                            <label style="margin: 10px;" for="nome_cliente" class="form-label">Nome do Cliente</label>
                            <input style="margin-left: 5px;" type="text" class="form-control" id="nome_cliente" name="nome_cliente">                            
                        </div>
                        <div class="mb-3">
                            <label style="margin: 10px;" for="email_cliente" class="form-label">Email do cliente</label>
                            <input style="margin-left: 5px;" type="email" class="form-control" id="email_cliente" name="email_cliente">
                        </div>
                        <div class="mb-3">
                            <label style="margin: 10px;" for="cidade" class="form-label">Cidade do cliente</label>
                            <input style="margin-left: 5px;" type="text" class="form-control" id="cidade" name="cidade">
                        </div>                        
                        <button style="margin-left: 5px; margin-bottom: 10px; border-radius: 10px;" type="submit" class="btn btn-primary">Cadastrar</button>
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
