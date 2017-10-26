<!DOCTYPE html>
<html>

    <head>
        <title>CSSpeed</title>
        <?php include('includes/head.php') ?>
    </head>

    <body>

        <!-- Header  -->
        <header>
            <?php include('includes/header.php') ?>
        </header>


        <!-- Main -->
        <main>
            <div class="container">

                <div class="row">
                    <!-- ASIDE -->
                    <div class="col large--4 medium--12 small--12">
                        Menu del aside
                    </div>

                    <div class="col large--4 medium--12 small--12">

                    </div>
                </div>

                <h3>Breackpoints</h3>
                <p>CS-SPEED incluye diferentes breackpoints para cada tamaño de la pantalla del dispositivo, la siguiente tabla muestra los tamaños disponibles y sus equivalencias, mismas que pueden ser editadas en el archivo “css/base/config.less”.</p>

                <hr>

                <h3>Arquitectura CSS</h3>
                <p>CS-SPEED está construido bajo el modelo BEM (bloque, elemento, modificador) ya que este modelo mantiene un estándar de nomenclatura de selectores para un mejor mantenimiento y lectura del código.</p>

                <table class="table table--rows">
                    <thead>
                        <tr>
                            <td>Objeto</td>
                            <td>Descripción</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Bloque</td>
                            <td>Algo algo algo</td>
                        </tr>
                        <tr>
                            <td>Elemento</td>
                            <td>Algo algo algo</td>
                        </tr>
                        <tr>
                            <td>Modificador</td>
                            <td>Algo algo algo</td>
                        </tr>
                    </tbody>
                </table>

                <h1>Titulo h1</h1>
                <h2>Titulo h2</h2>
                <h3>Titulo h3</h3>
                <h4>Titulo h4</h4>
                <h5>Titulo h5</h5>
                <h6>Titulo h6</h6>
                <hr>

                <blockquote>
                    <p>Un ejemplo de blockquote que son usados para "citar" texto.</p>
                    <small>Source</small>
                </blockquote>

                <hr>

                <!-- Grid system -->
                <div class="grid-example">
                    <?php include('grid.php') ?>
                </div>


                <hr>

                <!-- Lists -->
                <div>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2
                                    <ul>
                                        <li>Item 1</li>
                                        <li>Item 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>

                    <ul class="list">
                        <li>Item 1</li>
                        <li>Item 2
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2
                                    <ul>
                                        <li>Item 1</li>
                                        <li>Item 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>

                    <ul class="list list--line">
                        <li>Item 1</li>
                        <li>Item 2
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2
                                    <ul>
                                        <li>Item 1</li>
                                        <li>Item 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                </div>


                <hr>


                <!-- Images -->
                <div>
                    <p><img src="img/test.jpg" alt="image test"></p>
                    <p><img src="img/test_280x280.jpg" class="image--rounded" alt="image test"></p>
                    <p><img src="img/test_280x280.jpg" class="image--circle" alt="image test"></p>
                </div>


                <hr>


                <!-- Forms -->
                <form>
                    <div class="form__field">
                        <label><i class="icon user"></i> Nombre</label>
                        <input type="text">
                    </div>


                    <div class="form__field">
                        <label class="toggle-password">
                            <i class="icon eye-off"></i>
                            <span>Password</span>
                        </label>

                        <input type="password" class="input--password">

                        <div class="validate">La contraseá debe de tener entre 8 y 16 caracteres, incluir 1 mayuscula y 1 caracter especial</div>
                    </div>


                    <div class="form__field form__field--error">
                        <label>
                            <i class="icon clock"></i>
                            <span>Hora</span>
                        </label>

                        <input type="time">

                        <div class="validate">Este es un mensaje de error chingón</div>
                    </div>


                    <div class="form__field date">
                        <label>
                            <i class="icon calendar"></i>
                            <span>Fecha</span>
                        </label>

                        <input type="date">
                    </div>


                    <div class="form__field textarea">
                        <label>
                            <i class="icon comment"></i>
                            <span>Mensaje</span>
                        </label>

                        <textarea></textarea>
                    </div>


                    <div class="form__field select">
                        <label>
                            <i class="icon menu"></i>
                            <span>Opciones</span>
                        </label>

                        <select>
                            <option value="">Selecciona una opción</option>
                            <option value="">Opción 1</option>
                            <option value="">Opción 1</option>
                            <option value="">Opción 1</option>
                            <option value="">Opción 1</option>
                            <option value="">Opción 1</option>
                        </select>
                    </div>


                    <button class="button">GUARDAR</button>
                </form>


                <hr>

                <!-- Message -->
                <div>
                    <div class="message message--info">
                        <p>Usa <b>message--info</b> para indicar información adicional</p>
                    </div>

                    <div class="message message--success">
                        <p>Usa <b>message--success</b> es para mostrar un mensaje positivo</p>
                    </div>

                    <div class="message message--warning">
                        <p>Usa <b>message--warning</b> para mostrar una advertencia</p>
                    </div>

                    <div class="message message--error">
                        <p>usa <b>message--error</b> para mostrar un mensaje de error</p>
                    </div>
                </div>


            </div>
        </main>


        <!-- Footer -->
        <footer>
            <?php include('includes/footer.php') ?>
        </footer>

        <script type="text/javascript" src="js/forms.js"></script>
    </body>

</html>
