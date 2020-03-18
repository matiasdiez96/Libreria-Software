<!DOCTYPE html>
<!--
ALTA, BAJA Y MANTENIMIENTO DE LIBROS
-->
<html>
    <head>
        <title>UNLPam - Biblioteca</title>
        <!--
          .menu se utilizó para el logo UNLPam y su menu debajo
          .titulo se utilizó para los titulos debajo del menu con fines de ayudar al usuario a identificar dónde se encuentra
          .container/.co-25/.col-75/.row y demás los utiliza Bootstrap
        -->
        <style>
            .menu {
                width: 96%;
                margin: auto;
                background-color: white;
            }
            
            .titulo {
                margin-top: 10px;
                background-color:#dfdcdd;
                margin-left: 50px;
                display: flex;
            }
            
            * {
                box-sizing: border-box;
              }

              input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
              }

              label {
                padding: 12px 12px 12px 0;
                display: inline-block;
              }

              input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
              }

              input[type=submit]:hover {
                background-color: #45a049;
              }

              .container {
                border-rad
                //background-color: #f2f2f2;
                padding: 20px;
              }

              .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
              }

              .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
              }

              /* Clear floats after the columns */
              .row:after {
                content: "";
                display: table;
                clear: both;
              }

              /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
              @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                  width: 100%;
                  margin-top: 0;
                }
              }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ventas.css">
    </head>
    <body style="background-color:#dfdcdd;">
        <div class="menu" style="margin-top: 10px;">
            <a class="navbar-brand" href="layout.php">
              <img src="{{ asset('storage/UNLPam.png') }}" alt="logo">
            </a>
        </div>
        <div class="menu">
            <!--
                El menu todavía no es la version final se pueden realizar cambios para mejorar la interacción del usuario con el mismo
            -->
            <nav class="navbar navbar-expand-sm navbar-dark justify-content-center" style="background: #848484;">
                <ul class="navbar-nav" style="margin: -5px;">
                    <!-- Dropdown -->
                    <li class="nav-item dropdown" >
                      <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="librodrop" data-toggle="dropdown" style="width: 125px">
                        Libros
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="agregarLibro.php">Agregar libro</a>
                        <a class="dropdown-item" href="eliminarLibro.php">Borrar libro</a>
                        <a class="dropdown-item" href="modificarLibro.php">Modificar libro</a>
                      </div>
                    </li>
                    
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="ventadrop" data-toggle="dropdown" style="width: 125px">
                        Ventas
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mensuales</a>
                        <a class="dropdown-item" href="#">Anuales</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="AltaVentas.php">Confirmar venta</a>
                        <a class="dropdown-item" href="#">Cancelar venta</a>
                        <a class="dropdown-item" href="#">Modificar venta</a>
                      </div>
                    </li>
                    
                    <li>
                      <a class="nav-link font-weight-bold" href="#"style="width: 125px">
                        Stock
                      </a>
                    </li>
                </ul>
            </nav>
        </div>
