@include('header')

<body>


    <div class="container my-5">
        <!--Section: Content-->
        <section class="dark-grey-text text-center">
        @include('flash::message')
        <!-- Section heading -->
            <h3 class="font-weight-bold black-text mb-4 pb-2">Bonjour !</h3>
            <hr class="w-header">
            <!-- Section description -->
            <p class="lead text-muted mx-auto mt-4 pt-2 mb-5">Que voulez vous faire ?</p>

            <!--First row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Card -->
                    <a href="/editInfo" class="card hoverable">
                        
                        <!-- Card content -->
                        <div class="card-body my-4">

                        <h2><i class="cogs icon text-muted"></i></h2>
                        <h5 class="black-text mb-0">Éditer vos informations</h5>
                        
                        </div>

                    </a>
                    <!-- Card -->

                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Card -->
                    <a href="reservations.php" class="card hoverable">
                        
                        <!-- Card content -->
                        <div class="card-body my-4">

                            <h2><i class="calendar icon text-muted"></i></h2>
                            <h5 class="black-text mb-0">Vos commandes</h5>
                            
                        </div>

                    </a>
                    <!-- Card -->

                </div>
                <!--Grid column-->
                
                <div class="col-md-4 mb-4">

                    <!-- Card -->
                    <a href="/deconnexion" class="card hoverable">
                        
                        <!-- Card content -->
                        <div class="card-body my-4">

                            <h2><i class="power off icon text-muted"></i></h2>
                            <h5 class="black-text mb-0">Se déconnecter</h5>
                            
                        </div>

                    </a>
                </div>
            </div>

            </a>

        </section>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
</body>