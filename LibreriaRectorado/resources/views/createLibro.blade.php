@include('layout')

<div class="titulo">
            <h1>Agregar libro</h1>
            <img src="imagenes/book-plus.png" alt="logo">
        </div>
            <div class="container">
                <!--
                    Ingreso provisorio de los posibles datos necesarios para agregar un libro
                -->

                <form action="{{url('/libro')}}" method="post">

                {{ csrf_field() }}

                    <div class="row">
                        <div class="col-25">
                            <label for="id">ISBN - ISSN</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="ISBN" name="ISBN" placeholder="Código del libro..">
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
                        <label for="autor">Autor</label>
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
                        <input type="text" id="editorial" name="editorial" placeholder="Editorial del libro..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="cant_venta">Ventas</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="cant_venta" name="cant_venta" value="0">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="cant_deposito">Deposito</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="cant_deposito" name="cant_deposito" placeholder="En deposito..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="precio_general">Precio general</label>
                    </div>
                    <div class="col-75" style="display: flex;">
                        <h1>$</h1><input type="text" id="precio_general" name="precio_general">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="precio_estudiante">Precio estudiante</label>
                    </div>
                    <div class="col-75" style="display: flex;">
                        <h1>$</h1><input type="text" id="precio_estudiante" name="precio_estudiante">
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