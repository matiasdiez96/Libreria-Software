@include('layout')

        <div class="titulo">
            <h1>Borrar libro</h1>
            <img src="{{asset('storage/book-remove.png')}}" alt="logo">
        </div>
        <div class="container" style="margin-top: 5px">
	        <form>
	        	<!--
					Al buscar se debe abrir un modal enseñando los datos encontrados (o no) pero ocurre un error 
					debido al form y se cierra por lo que aún no se sabe si será el diseño final
				-->
	        	<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Ingrese código del libro..">
				  <div class="input-group-append">
				    <button class="btn btn-success" type="submit">Buscar</button>
				  </div>
				</div>
	        </form>
        </div>

        <div id="ele-1" name="ele-1" style="display: none;">
        	<div class="titulo">
	        	<h1>¿Está seguro de borrar este libro?</h1>
	        </div>

	        <div class="container">
			    <div class="row">
			        <div class="col-25">
			            <label for="id">ISBN - ISSN</label>
			        </div>
			        <div class="col-75">
			            <input type="text" id="id" name="id" readonly>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-25">
			            <label for="titulo">Titulo</label>
			        </div>
			        <div class="col-75">
			            <input type="text" id="titulo" name="titulo" readonly>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-25">
			            <label for="editorial">Editorial</label>
			        </div>
			    	<div class="col-75">
			        	<input type="text" id="editorial" name="editorial" readonly>
			    	</div>
				</div>
			    <div class="row">
			        <div class="col-25">
			            <label for="deposito">Depósito</label>
			        </div>
			        <div class="col-75">
			            <input type="text" id="deposito" name="deposito" readonly>
			        </div>
			    </div>
			    <div align="right" style="margin-top: 10px;">
		    		<button type="button" class="btn btn-danger" data-dismiss="modal">Borrar</button>	
		    	</div>
		    </div>
        </div>

        <div id="ele-0" name="ele-0" style="display: none;">
        	<div class="container">
        		<div align="center">
        			<div class="alert alert-danger">
					  <strong> El libro que intenta buscar no se encuentra en la Base de Datos</strong>
					</div>
        		</div>
        	</div>
        </div>

        <div class="container">
        	<!--
				Dejo otro button para enseñar lo que el usuario veria al encontrar el libro
			
        	<button class="btn btn-success" type="submit" data-toggle="modal" data-target="#myModal">Prueba resutado busqueda</button>
        	-->
		  <!-- The Modal -->
		  <div class="modal fade" id="myModal">
		    <div class="modal-dialog modal-dialog-centered">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">¿Está seguro de borrar este libro?</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		          	<div class="container">
		                <div class="row">
		                  <div class="col-25">
		                    <label for="id">ISBN - ISSN</label>
		                  </div>
		                  <div class="col-75">
		                    <input type="text" id="id" name="id" readonly>
		                  </div>
		                </div>
		                <div class="row">
		                  <div class="col-25">
		                    <label for="titulo">Titulo</label>
		                  </div>
		                  <div class="col-75">
		                    <input type="text" id="titulo" name="titulo" readonly>
		                  </div>
		                </div>
		                <div class="row">
		                  <div class="col-25">
		                    <label for="editorial">Editorial</label>
		                  </div>
		                  <div class="col-75">
		                    <input type="text" id="editorial" name="editorial" readonly>
		                  </div>
		                </div>
		                <div class="row">
		                  <div class="col-25">
		                    <label for="departamento">Departamento</label>
		                  </div>
		                  <div class="col-75">
		                    <input type="text" id="departamento" name="departamento" readonly>
		                  </div>
		                </div>
	           		</div>
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Borrar</button>
		        </div>
		        
		      </div>
		    </div>
		  </div>
		  
		</div>


    </body>
</html>
