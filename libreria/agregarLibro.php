@include('layout')

<div class="titulo">
            <h1>Agregar libro</h1>
            <img src="{{ asset ('storage/book-plus.png') }}" alt="logo">
        </div>
        <form>
            <div class="container">
                <!--
                    Ingreso provisorio de los posibles datos necesarios para agregar un libro
                -->
               
                <div class="row">
                  <div class="col-25">
                    <label for="id">ISBN - ISSN</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="id" name="id" placeholder="Código del libro..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="titulo">Titulo</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="titulo" name="titulo" placeholder="Título del libro..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="editorial">Editorial</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="editorial" name="editorial" placeholder="Editorial del libro..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="ventas">Ventas</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="ventas" name="ventas" value="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="Deposito">Deposito</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="deposito" name="deposito" placeholder="En deposito..">
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
