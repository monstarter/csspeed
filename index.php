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
                <!-- ASIDE -->
                <aside>
                    <?php include('includes/aside.php') ?>
                </aside>

                <columns>
                    <column class="mobile--12 tablet--12 desktop--10 widescreen--10 offset">
                        <div class="content">
                            <!-- Core -->
                            <section>
                                <?php include('core.php') ?>
                            </section>

                            <hr>

                            <!-- Base -->
                            <section>
                                <?php include('base.php') ?>
                            </section>

                            <hr>

                            <!-- Grid system -->
                            <section>
                                <?php include('grid.php') ?>
                            </section>

                            <hr>

                            <!-- Lists -->
                            <section>
                                <?php include('lists.php') ?>
                            </section>

                            <hr>

                            <!-- Images -->
                            <section>
                                <?php include('images.php') ?>
                            </section>

                            <hr>

                            <!-- Buttons -->
                            <section>
                                <?php include('buttons.php') ?>
                            </section>

                            <hr>

                            <!-- Forms -->
                            <section>
                                <?php include('forms.php') ?>
                            </section>

                            <hr>

                            <!-- Message -->
                            <section>
                                <?php include('messages.php') ?>
                            </section>

                            <!-- Ligthbox -->
                            <section>
                                <?php include('ligthbox.php') ?>
                            </section>
                        </div>
                    </column>
                </row>
            </div>
        </main>


        <!-- Footer -->
        <footer>
            <?php include('includes/footer.php') ?>
        </footer>

        <script type="text/javascript" src="js/prism.js"></script>
    </body>

</html>