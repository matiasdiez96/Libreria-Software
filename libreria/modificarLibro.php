@include('layout')

		<div class="titulo">
            <h1>Modificar libro</h1>
            <img src="{{asset('storage/book.png')}}" alt="logo">
        </div>
        <div class="container" style="margin-top: 5px;margin-bottom: -15px">
	        <form>
	        	<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Ingrese código del libro..">
				  <div class="input-group-append">
				    <button class="btn btn-success" type="submit">Buscar</button>
				  </div>
				</div>
	        </form>
        </div>

        <div id="ele-1" name="ele-1" style="display: none;">
        	<form>
	        	<!--
					Una vez encontrado el libro, por ajax, se desplegarian los input que se muestran debajo pre-cargados
				-->
	            <div class="container">
	                <form action="/action_page.php">
	                <div class="row">
	                  <div class="col-25">
	                    <label for="id">ISBN - ISSN</label>
	                  </div>
	                  <div class="col-75">
	                    <input type="text" id="id" name="id">
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-25">
	                    <label for="titulo">Titulo</label>
	                  </div>
	                  <div class="col-75">
	                    <input type="text" id="titulo" name="titulo">
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-25">
	                    <label for="editorial">Editorial</label>
	                  </div>
	                  <div class="col-75">
	                    <input type="text" id="editorial" name="editorial">
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-25">
	                    <label for="Deposito">Depósito</label>
	                  </div>
	                  <div class="col-75">
	                    <input type="text" id="deposito" name="deposito">
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-25">
	                    <label for="general">Precio general</label>
	                  </div>
	                  <div class="col-75" style="display: flex;">
	                    <h1>$</h1><input type="text" id="general" name="general">
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-25">
	                    <label for="estudiante">Precio estudiante</label>
	                  </div>
	                  <div class="col-75" style="display: flex;">
	                    <h1>$</h1><input type="text" id="estudiante" name="estudiante">
	                  </div>
	                </div>
	                <div align="right" style="margin-top: 10px;">
	                  <input type="submit" value="Guardar" style="background: #e86a04;" >
	                </div>
	            </div>
	        </form>
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
        
        <br><br>
    </body>
</html>
