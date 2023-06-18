<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bebidas</title>
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
                    

                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Información...." data-bs-content="PA COMER" data-bs-trigger="hover"   ><img title="" alt="" class="card-img-top" src="Bebidas/coca.jpg" width="250px" height="230px"></button>


                    <div class="card-body">
                        <span>REFRESCO COCA COLA</span>
                        <h5>$40.00</h5>
                        

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/sprite.jpg">
                    <div class="card-body">
                        <span>SPRITE</span>
                        <h5>$35.00</h5>
                        <p class="card-text">PA PISTEAR</p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/FANTA.jpg">
                    <div class="card-body">
                        <span>REFRESCO FANTA 3L</span>
                        <h5>$19.00</h5>
                        <p class="card-text">PA FRESAS</p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/SEVEN.jpg">
                    <div class="card-body">
                        <span>REFRESCO 7UP 3L</span>
                        <h5>$25.00</h5>
                        <p class="card-text">PAL CAMPO</p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
                <br>
            </div>




            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/MANZANITA.jpg">
                    <div class="card-body">
                        <span>REFRESCO MANZANITA 3L</span>
                        <h5>$30.00</h5>
                        <p class="card-text">PA COTORREAR</p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/señorial.jpg">
                    <div class="card-body">
                        <span>REFRESCO SEÑORIAL 2L</span>
                        <h5>$29.00</h5>
                        <p class="card-text">PAL VINO<br></p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/FRESCA.jpg">
                    <div class="card-body">
                        <span>REFRESCO FRESCA 3L</span>
                        <h5>$40.00</h5>
                        <p class="card-text">PA REFRESCARSE xd<br></p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>




            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/sq.jpg">
                    <div class="card-body">
                        <span>REFRESCO SQIRT 3L</span>
                        <h5>$33.00</h5>
                        <p class="card-text">PA TODO <br><br></p>

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
                    <img title="" alt="" class="card-img-top" src="Bebidas/MIRINDA.jpg">
                    <div class="card-body">
                        <span>REFRESCO MIRINDA 3L</span>
                        <h5>$28.00</h5>
                        <p class="card-text">PA ESO</p>

                        <button class="btn btn-primary" name="btnction" value="Agregar" type="submit">
                            Ordenar
                        </button>
                    </div>
                </div>
            </div>




            <div class="col-3">
                <div class="card">
                    <img title="" alt="" class="card-img-top" src="Bebidas/piña.jpg">
                    <div class="card-body">
                        <span>REFRESCO FANTA PIÑA</span>
                        <h5>$25.00</h5>
                        <p class="card-text">PA LA NIÑA</p>

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

</body>

</html>