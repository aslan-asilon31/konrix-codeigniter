<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'MingCute')); ?>

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

                <?php echo view('partials/page-title', array('subtitle' => 'Icons', 'title' => 'MingCute')); ?>

                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-between items-center">
                            <h5 class="card-title">
                                All Icons 
                            </h5>

                            <a href="https://www.mingcute.com/" target="_blank" class="btn-code">
                                <span class="me-2">Documentaion</span>
                                <i class="mgc_link_2_line text-sm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-6 icons-list-demo" id="icons"></div>
                    </div>
                </div> <!-- end card -->

            </main>

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Remixicons Icon Demo Js -->
    <script src="assets/js/pages/icons-mingcute.js"></script>

</body>

</html>