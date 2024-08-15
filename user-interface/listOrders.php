<style>
    .row{
        text-align: center;
    }
    table{
        width: 100%;
        margin-bottom : .5em;
        table-layout: fixed;
        text-align: center;
    }
    body{
        background: rgb(254,255,13);
        background: linear-gradient(90deg, rgba(254,255,13,1) 0%, rgba(230,208,0,1) 35%, rgba(255,132,0,1) 100%);
    }
   
</style>
<body>
    <div class="row">
        <div class="container col-sm-6">
            <h1 style="color: #bb1111; font-family: Arial;" class="display-4 text-center">Consulta de Registro</h1>
            <table class="table-table-hover">
                <thead>
                    <tr>
                        <th style="color: #bb1111; font-family: Arial;">ID</th>
                        <th style="color: #bb1111; font-family: Arial;">Nome</th>
                        <th style="color: #bb1111; font-family: Arial;">Endereço</th>
                        <th style="color: #bb1111; font-family: Arial;">Pedido</th>
                    </tr>
                </thead>

                <tbody>
                                
                    <?php include_once 'consultar.php' ?>
                    <tr>
                        <a href="form_cadastro.php" style="box-shadow:inset 0px 1px 0px 0px #cf866c;
                        background:linear-gradient(to bottom, #bb1111 5%, #bc3315 100%);
                        background-color:#bb1111;
                        border-radius:9px;
                        border:1px solid #942911;
                        display:inline-block;
                        cursor:pointer;
                        color:#ffffff;
                        font-family:Arial;
                        font-size:13px;
                        padding:9px 24px;
                        text-decoration:none;
                        text-shadow:0px 1px 0px #854629;" class="btn">Tela Cadastro</a>
                    </tr>

                </tbody>

            </table>
        </div>		
    </div>	
</body>
