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
            </div>

            <br>

            <div>
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
            </div>

            <br>

            <div>
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

            <p><img src="img/test.jpg" alt="image test"></p>
            <p><img src="img/test_280x280.jpg" class="image--rounded" alt="image test"></p>
            <p><img src="img/test_280x280.jpg" class="image--circle" alt="image test"></p>

            <hr>

            <form>
                <div class="form__item">
                    <i class="icon user"></i>
                    <input type="text">
                    <label>Nombre</label>
                </div>

                <br>

                <div class="form__item">
                    <i class="icon lock"></i>
                    <input type="password">
                    <label>Password</label>
                </div>

                <br>

                <div class="form__item">
                    <i class="icon clock"></i>
                    <input type="text">
                    <label>Hora</label>
                </div>

                <br>

                <!-- div ng-app="plunker">
                    <div class="form__item" ng-controller="calendar">
                        <i class="icon calendar"></i>
                        <input type="text" ng-model="date" datepicker>
                        <label>Fecha</label>
                    </div>
                </div-->

                <div>
                    <div class="form__item">
                        <i class="icon calendar"></i>
                        <input type="text" class="datepicker">
                        <label>Fecha</label>
                    </div>
                </div>

                <script>
                    $( ".datepicker" ).datepicker({
                        dateFormat:'dd/mm/yy',
                        changeMonth: true,
                        changeYear: true,
                        yearRange: 'c-80:c+10',
                        prevText: '<i class="icon angle-left"></i>',
                        nextText: '<i class="icon angle-right"></i>',
                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        monthNamesShort: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
                        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                        onSelect: function(dateText){
                            $(this).parent('.form__item').addClass('form__item--fill');
                        }
                    });
                </script>

                <br>

                <div class="form__item">
                    <i class="icon comment"></i>
                    <textarea></textarea>
                    <label>Textarea</label>
                </div>

                <br>

                <div class="form__item">
                    <i class="icon male"></i>
                    <input type="text" class="select">
                    <ul class="selectbox">
                        <li data-option="" class="current">Selecciona una opción</li>
                        <li data-option="Opcion 2">Opcion 2</li>
                        <li data-option="Opcion 3">Opcion 3</li>
                        <li data-option="Opcion 4">Opcion 3</li>
                        <li data-option="Opcion 5">Opcion 3</li>
                        <li data-option="Opcion 6">Opcion 3</li>
                    </ul>
                    <label>Select</label>
                </div>

                <br>

                <button class="button">GUARDAR</button>
            </form>

            <hr>

            <div class="message message--info">
                <p>Puedado puede que algo malo</p>
            </div>

            <pre>
                <code>
                    <span>
                        &lt;div&gt;
                        <span>&lt;p&gt;Puedado puede que algo malo&lt;/p&gt;</span>
                        &lt;/div&gt;
                    </span>
                </code>
            </pre>


            <div class="message message--success">
                <p>Puedado puede que algo malo</p>
            </div>

            <div class="message message--warning">
                <p>Puedado puede que algo malo</p>
            </div>

            <div class="message message--error">
                <p>Puedado puede que algo malo</p>
            </div>



        </main>


        <!-- Footer -->
        <footer>
            <?php include('includes/footer.php') ?>
        </footer>

        <script type="text/javascript" src="js/forms.js"></script>
    </body>

</html>
