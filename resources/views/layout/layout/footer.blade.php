<section id="footer">
    <div class="container">
        <div class="row text-center text-center text-sm-left text-md-left">

            <div class="col-sm-12 col-sm-4 col-md-4 mt-3">
                <h5 class="text-center">Redes Sociales</h5>
                <ul class="list-unstyled text-center">
                    <li class="mt-3"><a class="descripcion" target="_blank"
                            href="https://www.facebook.com/Carcochita"><img class="" width="60px"
                                src="{{ asset('assets/img/footer/icono-fb.png') }}" alt=""><br>Siguenos en
                            Facebook</a>
                    </li>
                    <li class="mt-3"><a class="descripcion" target="_blank"
                            href="https://www.instagram.com/micarcochita/"><img class="" width="60px"
                                src="{{ asset('assets/img/footer/icono-instagram.png') }}" alt=""><br>Siguenos
                            en Instagram</a>
                    </li>


                </ul>
            </div>
            <div class="col-sm-12 col-sm-4 col-md-4 mt-3">
                <h5 class="text-center">Contacto</h5>
                <ul class="list-unstyled text-center">
                    <li class="mt-3">
                        <a class="descripcion" target="_blank" href="https://goo.gl/maps/iBBvecNiP26EJSRz9">
                            <!-- <i class="fa fa-4x fa-map-marker" aria-hidden="true"></i> -->
                            <img width="60px" src="{{ asset('assets/img/icons/ubicacion_mapa.png') }}" alt="">
                            <br>Av. Julio César Tello 898, Lince, Lima - Perú
                            <br>Av. Aviación 2739, San Borja, Lima - Perú
                        </a>
                    </li>
                    <li class="mt-3">
                        <a class="descripcion" target="_blank" href="tel:+017895285">
                            <!-- <i class="fa fa-4x fa-phone" aria-hidden="true"></i> -->
                            <img width="60px" src="{{ asset('assets/img/icons/icono_telefono.png') }}" alt="">
                            <br>Delivery Lince: 017775912 / 923289681
                        </a>
                        <a class="descripcion" target="_blank" href="tel:+017858536">

                            <br>Delivery San Borja: 017895285 / 922684862</a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-12 col-sm-4 col-md-4 mt-3">
                <h5 class="text-center">Herramientas</h5>
                <ul class="list-unstyled text-center">
                    <li class="mt-3">
                        <a class="descripcion" target="_blank" href="#">
                            <img width="60px" src="{{ asset('assets/img/icons/libro.png') }}" alt=""><br>Libro
                            de
                            Reclamaciones
                        </a>
                    </li>
                    <li class="mt-3">
                        <a class="descripcion" target="_blank" href="#">
                            <img width="60px" src="{{ asset('assets/img/icons/covid-19.png') }}" alt="">
                            <br>
                            Protocolos de Bioseguridad Covid-19
                        </a>
                    </li>


                </ul>
            </div>


        </div>
        <div class="row mt-0 mt-xl-3 mt-lg-3">
            <div class="col mt-2 text-center">
                <h6 class="text-white descripcion">Desarrollado por Enfocus Soluciones</h6>
                <img style="width: 150px" src="{{ asset('assets/img/footer/logoEnfocus.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p>
                    <!-- <a style="font-size: 18px; color: #FFFFFF;" href="cv.php">Bolsa de Trabajo </a>|<a style="font-size: 18px; color: #FFFFFF;" href="blog.php"> BLOG </a>|  --><a
                        class="descripcion" href="#">
                        Terminos y Condiciones</a>
                </p>
                <p class="h6 descripcion">&copy Todos los Derechos Reservados.<a class="text-green ml-2 descripcion"
                        href="https://enfocussoluciones.com" target="_blank">Mi Carcochita - Enfocus</a></p>
            </div>
            <hr>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" data-backdrop="static" id="modalStoreSelector">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="text-center m-auto">CAMBIAR DIRECCIÓN <img class="mb-2"
                        src="{{ asset('assets/img/egypt.png') }}" alt="" style="width: 35px"></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="col" id="formStoreSelector">

                        <input type="hidden" id="hiddenLatInput">
                        <input type="hidden" id="hiddenLngInput">
                        <div class="row justify-content-center">
                            <div class="col-12">




                                <div class="row">
                                    <div class="col">
                                        <h5>Tipo de pedido</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input onclick="selectShippinMethodClick(this)" value="DELIVERY"
                                            name="tipoReparto" checked class="d-none" type="radio"
                                            id="storeSelectorDelivery">
                                        <label for="storeSelectorDelivery"
                                            class="ingrediente-button w-100 align-self-end mt-auto text-center">Delivery
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input onclick="selectShippinMethodClick(this)" value="RECOJO"
                                            name="tipoReparto" class="d-none" type="radio"
                                            id="storeSelectorRecojo">
                                        <label for="storeSelectorRecojo"
                                            class="ingrediente-button w-100 align-self-end mt-auto text-center">Recojo
                                            en tienda
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row justify-content-center d-none" id="deliveryInputContainer">
                            <div class="col-12">
                                <h5>Tu dirección</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control text-center" id="storeSelectorInput">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center d-none" id="recojoInputContainer">
                            <div class="col-12">
                                <h5>Selecciona un Local</h5>
                                <div class="form-group">
                                    <select name="selectStoreSelector" id="selectStoreSelector"
                                        class="form-control text-center">
                                        <option disabled selected>Selecciona un Local</option>
                                        <option value="1">Av. Julio César Tello 898, Lince</option>
                                        <option value="2">Av. Aviación 2739, San Borja</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5 id="map-titleStore" class="d-none">Precisa tu ubicación</h5>
                                <div id="mapStoreSelector"></div>
                            </div>
                        </div>


                        <div class="text-center mt-5">
                            <button id="saveAddressInformationBtn" type="submit"
                                class="btn btn-primary btn-block btn-lg">Guardar
                            </button>
                            <a id="btnCloseAddressSelectorModal" data-dismiss="modal"
                                class="btn btn-outline-primary btn-block btn-lg">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Spinner de carga-->
<div style="display: none" id="loading" class="loading">Loading&#8230;</div>
