<!DOCTYPE html>
<html>

    <head>
        <?php include('includes/head.php') ?>
    </head>

    <body>

        <!-- H E A D E R  -->
        <header>
            <?php include('includes/header.php') ?>
        </header>


        <!-- M A I N -->
        <main>

            <!-- ASIDE -->
            <aside>
                <?php include('includes/aside.php') ?>
            </aside>

            <!-- CONTENT -->

            <div class="container">
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
            </div>
        </main>


        <!-- F O O T E R -->
        <footer>
            <?php include('includes/footer.php') ?>
        </footer>
    </body>
</html>