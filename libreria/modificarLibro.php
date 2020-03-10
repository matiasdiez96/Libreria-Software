<?php
    include("layout.php");
?>

		<div class="titulo">
            <h1>Modificar libro</h1>
            <img src="imagenes/book.png" alt="logo">
        </div>
        <div class="container" style="margin-top: 5px;margin-bottom: -15px">
	        <form>
	        	<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Ingrese código del libro..">
				  <div class="input-group-append">
				    <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#myModal">Buscar</button>
				  </div>
				</div>
	        </form>
        </div>
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
                <!--
                <div class="row">
                  <div class="col-25">
                    <label for="ed">Ed</label>
                  </div>
                  <div class="col-75">
                    <select id="ed" name="ed">
                      <option value="">VM</option>
                      <option value="">LP</option>
                      <option value="">FEP</option>
                      <option value="">UNS</option>
                      <option value="">R.IV</option>
                      <option value="">ER</option>
                      <option value="">Ros</option>
                      <option value="">SM</option>
                      <option value="">Cuy</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="auto">Autor</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="autor" name="autor" placeholder="Autor del libro..">
                  </div>
                </div>
            	-->
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
                    <label for="departamento">Departamento</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="departamento" name="departamento">
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
                  <input type="submit" value="Agregar" style="background: #e86a04;" >
                </div>
            </div>
        </form>
        <br><br>
    </body>
</html>
