<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" >

    <?= $this->include('partials/head-css') ?>
</head>

<body>

    <div class="flex wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">

            <?= $this->include('partials/topbar') ?>

            <main class="flex-grow p-6">

                <?php echo view('partials/page-title', array('subtitle' => 'Maps', 'title' => 'Vector')); ?>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                    <div class="lg:col-span-2">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title">World Vector Map</h4>
                                    <div class="flex items-center gap-2">
                                        <a href="https://jvm-docs.vercel.app/" target="_blank" class="btn-code">
                                            <i class="mgc_link_2_line text-sm"></i>
                                            <span class="ms-2">Documentaion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="mb-3">
                                    <div id="world-map-markers" style="height: 360px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Canada Vector Map</h4>
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <div id="canada-vector-map" style="height: 360px"></div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Russia Vector Map</h4>
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <div id="russia-vector-map" style="height: 360px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Italy Vector Map</h4>
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <div id="italy-vector-map" style="height: 360px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Iraq Vector Map</h4>
                        </div>

                        <div class="p-6">
                            <div class="mb-3">
                                <div id="iraq-vector-map" style="height: 360px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Spain Vector Map</h4>
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <div id="spain-vector-map" style="height: 360px"></div>
                            </div>
                        </div>
                    </div> <!-- end card body -->

                </div><!-- end grid-->

            </main>

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/highlight-scripts') ?>

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Vector Map Js -->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/canada.js"></script>
    <script src="assets/libs/jsvectormap/maps/iraq.js"></script>
    <script src="assets/libs/jsvectormap/maps/italy.js"></script>
    <script src="assets/libs/jsvectormap/maps/russia.js"></script>
    <script src="assets/libs/jsvectormap/maps/spain.js"></script>
    <script src="assets/libs/jsvectormap/maps/us-aea-en.js"></script>
    <script src="assets/libs/jsvectormap/maps/us-lcc-en.js"></script>
    <script src="assets/libs/jsvectormap/maps/us-mill-en.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="assets/libs/jsvectormap/maps/world.js"></script>

    <!-- Vector Map Demo js-->
    <script src="assets/js/pages/maps-vector.js"></script>

</body>

</html>