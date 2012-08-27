
    <!-- Le styles -->
    <link href="vendas/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  .box {background-color:#f5f5f5; box-shadow:2px 2px 3px #ccc; padding:10px; cursor:move; margin-bottom:10px}	  
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    
    <script>$('#myModal').modal(options)</script>

    

    <div class="container-fluid">
    	<div class="row">
           <div class="span6">
                <a class="btn btn-large btn-primary" data-toggle="modal" href="#projetos">Criar Projeto</a></div>
        	</div>
            <hr>
        <div class="row">
          <div class="span3">
          	<h2>Lead</h2>
           
          	<div class="drag" id="lead">
          	&nbsp;
           		<?= @$lead; ?>
            </div>
            
          </div>
          <div class="span3">
          	<h2>Contactado</h2>
            <div class="drag" id="contactado">
            &nbsp;
           		 <?= @$contactado; ?>
            </div>                   
          </div>
          <div class="span3">
          	<h2>Briefing</h2>
            
            <div class="drag" id="briefing">
            &nbsp;
            	<?= @$briefing; ?>
            </div>
            
          </div>
          <div class="span3">
          	<h2>Proposta Enviada</h2>
            
            <div class="drag" id="enviado">
            &nbsp;
            	<?= @$enviada; ?>
            </div>
                   
          </div>
        </div>

    </div> <!-- /container -->
   
    
    <!--MODAL DE CRIAR DE PROJETOS-->
      <div class="modal hide fade in" id="projetos">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Criar Projeto</h3>
      </div>
      
       <form class="well" action="<?= $this->webroot; ?>vendas/salvar" method="post">
      
      <div class="modal-body">
              <label>Nome do Projeto:</label>
              <input name="nome_projeto" type="text" class="span3" placeholder="Type something…">
              <label>Valor do Projeto:</label>
              <input name="valor" type="text" class="span3" placeholder="Type something…"> 
              <label>Nome do Cliente:</label>
              <input name="nome_cliente" type="text" class="span3" placeholder="Type something…">
              <label>Telefone:</label>
              <input name="telefone" type="text" class="span3" placeholder="Type something…">                            
              <label>Celular:</label>
              <input name="celular" type="text" class="span3" placeholder="Type something…">
              <label>Email:</label>
              <input name="email" type="text" class="span3" placeholder="Type something…">                            
              <label>Descrição do Projeto:</label>
              <textarea name="descricao" class="input-xlarge" id="textarea" rows="3"></textarea>
            
      </div>
              <div class="modal-footer">
                <input type="submit"class="btn btn-large btn-primary" value="Salvar">
              </div>
      </form>      
    </div>

   
    

  </body>
</html>
