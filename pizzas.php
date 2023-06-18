<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilospizzas.css">
    <title>Pizzas</title>
</head>

<body>
    <?php
    include("cabecera.html");
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">

                   
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La combinación perfecta entre Pepperoni y Champiñones, con un gran sabor y horneado al momento.
                            Ingredientes: Pepperoni, Champiñones Frescos y Extra Queso" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/PeperoniEspecial.png" width="250px" height="230px"></button>

                    <div class="card-body">
                        <span>PEPERONI ESPECIAL</span>
                        <h5> $150.00</h5>
                        

                        <button id="conf" class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card">
                   
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza con los sabores auténticos de nuestro país. Chorizo, carne molida, jalapeño, cebolla.
                            Ingredientes: Chorizo, Carne Molida, Cebolla y Jalapeño" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/MEX.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>MEXICANA</span>
                        <h5>$110.00</h5>
                      

                        <button id="conf" class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card">
                   
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza para los amantes de la carne. Salami, pepperoni, jamón, finas hierbas.
                            Ingredientes: Pepperoni, Salami, Jamón y Finas Hierbas" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/CF.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>CARNES FRÍAS</span>
                        <h5>$175.00</h5>
                       

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="card">
                    
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza pensada en los amantes del queso. Queso mozzarella, queso crema, queso cheddar, queso parmesano.
                            Ingredientes: Queso Crema, Mozzarella, Parmesano" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/4Q.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>CUATRO QUESOS</span>
                        <h5>$185.00</h5>
                      

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
                <br>
            </div>




            <div class="col-3">
                <div class="card">
                    
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="¡Sólo vegetales! Nuestra opción sin carne. Pimiento, champiñones, aceitunas, cebolla.
                            Ingredientes: Pimiento, Cebolla, Champiñones Frescos y Aceitunas" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/4Q.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>VEGGIE</span>
                        <h5>$120.00</h5>
    

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza que unos cuestionan pero todos aman. Jamón, piña.
                            Ingredientes: Jamón y Piña" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/HNC.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>HAWAIANA</span>
                        <h5>$205.00</h5>
                        

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card">
                    
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza con la perfecta combinación dulce-salado. Jamón, tocino, piña, jalapeño.
                            Ingredientes: Jamón, Piña, Tocino y Jalapeño" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/HONOL.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>HONOLULU</span>
                        <h5>$170.00</h5>
                        

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>




            <div class="col-3">
                <div class="card">
                   
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza más tropical que tenemos. Pollo, tocino, piña, salsa mango habanero.
                            Ingredientes: Pollo, Tocino, Piña y Salsa de Mango Habanero" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/CHIHNC.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>CHICKEN HAWAIANA</span>
                        <h5>$230.00</h5>
                       

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
                <br>
                <br>
            </div>




            <div class="col-3">
                <div class="card">
                   
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="La pizza más incluyente de nuestras especialidades. Pepperoni, carne molida, jamón, chorizo, pimiento, cebolla, champiñones, aceitunas, extra queso.
                            Ingredientes: Pepperoni, Carne Molida, Jamón" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/EXV.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>EXTRAVAGANZZA</span>
                        <h5>$210.00</h5>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>




            <div class="col-3">
                <div class="card">
                    
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="Disfrutar esta pizza es todo un lujo. Pepperoni, carne molida, champiñones, pimiento, cebolla.
                            Ingredientes: Pepperoni, Carne Molida, Champiñones Frescos, Pimiento y Cebolla" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Pizzas/DLX.png" width="250px" height="230px"></button>
                    <div class="card-body">
                        <span>DELUXE</span>
                        <h5>$250.00</h5>
                        

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
