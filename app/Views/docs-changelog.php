<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

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

                <?php echo view('partials/page-title', array('subtitle' => 'Documentation', 'title' => 'Changelog')); ?>

                <div class="card">
                    <div class="p-6">
                        <h4 class="card-title mb-3">v1.0.0  <code class="text-primary text-sm"> - 9 September, 2023</code></h4>

                        <ul class="list-inside">
                            <li class="text-sm text-slate-700 dark:text-slate-400 list-disc">Initial released </li>
                        </ul>
                    </div>
                </div>

            </main>

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/footer-scripts') ?>

</body>

</html>