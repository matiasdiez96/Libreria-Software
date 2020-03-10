<?php
    include("layout.php");
?>
	<div class="titulo">
        <h1>Nueva venta</h1>
        <img src="imagenes/book-account.png" alt="logo">
    </div>
	<div class="container">
		<div class="container p-0 m-0">
	  		<div class="row">
	    		<div class="col-6">
	    			<form class="form-inline">
  							<div style="display: flex;">
  								<input class="form-control mr-2" type="search" placeholder="Libro a vender.." size="46" aria-label="Search">
    						<button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
  							</div>
  						</form>
					<ul class="list-group mt-3">
					  	<li class="list-group-item">El Principito - Antoine de Saint-Exupéry 
					  		<button class="btn btn-dark float-right"><i class="fa fa-arrow-right"></i></button>
					  	</li>
					  	<li class="list-group-item">Harry Potter - J. K. Rowling
					  		<button class="btn btn-dark float-right"><i class="fa fa-arrow-right"></i></button>
					  	</li>
					  	<li class="list-group-item">Don Quijote de la Mancha - Miguel de Cervantes Saavedra
					  		<button class="btn btn-dark float-right"><i class="fa fa-arrow-right"></i></button>
					  	</li>
					  	<li class="list-group-item">El código Da Vinci - Dan Brown
					  		<button class="btn btn-dark float-right"><i class="fa fa-arrow-right"></i></button>
					  	</li>
					  	<li class="list-group-item">El alquimista - Paulo Coelho
					  		<button class="btn btn-dark float-right"><i class="fa fa-arrow-right"></i></button>
					  	</li>
					</ul>
	    		</div>
				<div class="col-6">
	      			<h4 class="mb-4">Libros seleccionados</h4>
	      			<table class="table">
					  	<thead>
					    	<tr>
					      		<th scope="col">Titulo</th>
					      		<th scope="col">Autor</th>
					      		<th scope="col">Cantidad</th>
					      		<th scope="col">Precio</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td>Cien años de soledad</td>
					      		<td>Gabriel García Márquez</td>
					      		<td>
							      	<div class="border border-secondary">
		                            	<div class="input-group">
			                                <span class="input-group-btn">
			                                    <button type="button" class="btn btn-default btn-number">
			                                        <i class="fa fa-minus"></i>
			                                    </button>
			                                </span>
			                                <input type="text" size="2" class="form-control input-number border-top-0 border-bottom-0 border border-secondary text-center p-0" value="1" min="1" max="19">
			                                <span class="input-group-btn">
			                                    <button type="button" class="btn btn-default btn-number">
			                                        <i class="fa fa-plus"></i>
			                                    </button>
			                                </span>
		                            	</div>
		                        	</div>
					      		</td>
					      		<td class="text-center">450</td>
					    	</tr>
					    	<tr>
					    		<th scope="row" colspan="3" class="text-right">TOTAL</th>
					    		<td>1000</td>
					    	</tr>
					  	</tbody>
					</table>
	    		</div>
	  		</div>
  		</div>
  		<div align="right" style="margin-top: 10px;">
            <input type="submit" value="Confirmar venta" style="background: #e86a04;" >
        </div>
        <br><br>
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>