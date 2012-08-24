<? //die( print_r( $vendas['Venda'] ) ); ?>
<? $vendas = $vendas['Venda']; ?>

<div class="container-fluid">
    	<div class="row">
           <div class="span12">
                <h1><?= $vendas['nome_projeto']; ?><small>Descrição breve do projeto em resumo rápido...</small></h1>
        	</div>
            <div class="pull-right">
            	<a href="index.html" class="btn btn-large">Voltar</a>
            </div>
         </div>
            <hr>
        <div class="row">
          <div class="span3">
          	<h2>Dados do Projeto</h2>
            <div class="well">
            	<h4>Criado Por</h4>
            	<p><?= $user['Usuario']['nome']; ?> em <?= date( 'd/m/Y', strtotime( $vendas['data_criacao'] ) ); ?></p>
            	<h4>Valor da Proposta:</h4>
            	<p>R$ <?= str_replace( '.' , ',', $vendas['valor'] ); ?></p>
            	<h4>Nome do Cliente:</h4>
            	<p><?= $vendas['nome_cliente']; ?></p>            	
                <h4>Contato</h4>
            	<p>041 3041-0345</p>
            	<p>041 9998-0345</p>                                  
            	<p><?= $vendas['email']; ?></p>                                  
            	<h4>Status</h4>
            	<p><?= ucfirst( $vendas['status'] ); ?></p>                
            </div>
          </div>
          <div class="span9">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#comentarios" data-toggle="tab">Comentários</a></li>
                  <li><a href="#reunioes" data-toggle="tab">Reuniões</a></li>
                  <li><a href="#arquivos" data-toggle="tab">Arquivos</a></li>
                  <li><a href="#historico" data-toggle="tab">Histórico</a></li>
                </ul>
                
                
                <div class="tab-content">
                  <div class="tab-pane active" id="comentarios">
                  	
                  	<? if( $comentarios ) : ?>
                  	
                  		<?= $comentarios; ?>
                    
                    <? endif; ?>  
                    
                        <div class="controls">
                            <form class="well">
                                  <label>Comentário</label>
                                  <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
                              <p><button type="submit" class="btn btn-large btn-primary">Adicionar Comentário</button></p>
                            </form>
                        </div>
                        
                  </div>
                  <div class="tab-pane" id="reunioes">
                  	<h4>07/08/2012 às 14:00</h4>
                    <p>Descrição do projeto de forma breve…</p>
                    <hr>
                  	<h4>07/08/2012 às 14:00</h4>
                    <p>Descrição do projeto de forma breve…</p>
                    <hr>  
                        <div class="controls">
                            <form class="well">
                                  <label>Data</label>
                                  <input type="text" class="input-xlarge" id="input01">
                                  <label>Hora</label>
                                  <input type="text" class="input-xlarge" id="input01">
                                  <label>Assunto</label>
                                  <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
                              <p><button type="submit" class="btn btn-large btn-primary">Adicionar Reunião</button></p>
                            </form>
                        </div>                    
                  </div>
                  <div class="tab-pane" id="arquivos">
                      <div class="well">
                        <h4 class="pull-left">Escopo do Projeto </h4>
                        <a class="btn pull-right" href=""><i class="icon-download-alt"></i> Download</a>
                   	  </div> 
                      <div class="well">
                        <h4 class="pull-left">MindMap</h4>
                        <a class="btn pull-right" href=""><i class="icon-download-alt"></i> Download</a>
                   	  </div>  
                      <hr>    
                       		<div class="controls">
                            <form class="">
							<div class="control-group">
                                  <label>Nome do Arquivo</label>
                                  <input type="text" class="input-xlarge" id="input01">
                             </div>
                        	<div class="controls">
                                  <label>Selecione o Arquivo</label>
                                  <input class="input-file" id="fileInput" type="file">
                              </div>
                              <div class="form-actions">
                              <p><button type="submit" class="btn btn-large btn-primary">Adicionar Arquivo</button></p>
                              </div>
                            </form>
                        </div>                          
                  </div>
                  <div class="tab-pane" id="historico">
	                      <div class="well">
                        <h4>José Matias em 03/08/2012</h4>
                   		<p>Mudou o status para Briefing</p>
                   	  </div> 
                      <div class="well">
                        <h4>José Matias em 03/08/2012</h4>
                   		<p>Descrição da alteração no projeto de forma breve…</p>
                   	  </div>                     
                  </div>
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
      <div class="modal-body">
            <form class="well">
              <label>Nome do Projeto:</label>
              <input type="text" class="span3" placeholder="Type something…">
              <label>Valor do Projeto:</label>
              <input type="text" class="span3" placeholder="Type something…"> 
              <label>Descrição do Projeto:</label>
              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
              <div class="form-actions">
                <button type="submit" class="btn btn-large btn-primary">Criar Projeto</button>
              </div>
            </form>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js">$('#myModal').modal(options)</script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/application.js"></script>
    

  </body>
</html>
