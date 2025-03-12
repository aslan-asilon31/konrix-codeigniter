<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

    <!-- Plugin Css -->
    <link href="assets/libs/plyr/plyr.css" rel="stylesheet" type="text/css" >

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

                <?php echo view('partials/page-title', array('subtitle' => 'Components', 'title' => 'Aspect Ratio')); ?>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Youtube Player</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="videoPlayerYoutube">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="rounded-xl overflow-hidden">
                                <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY" allowfullscreen></div>
                            </div>

                            <div id="videoPlayerYoutube" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;player-youtube&quot; data-plyr-provider=&quot;youtube&quot; data-plyr-embed-id=&quot;bTqVqk7FSmY&quot;&gt;&lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Vimeo Player</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="videoPlayerVimeo">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="rounded-xl overflow-hidden">
                                <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
                            </div>

                            <div id="videoPlayerVimeo" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;player-charlotte&quot; data-plyr-provider=&quot;vimeo&quot; data-plyr-embed-id=&quot;707012696&quot;&gt;&lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
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

    <?= $this->include('partials/highlight-scripts') ?>
    
    <?= $this->include('partials/footer-scripts') ?>

    <!-- Plyr Plugin JS -->
    <script src="assets/libs/plyr/plyr.min.js"></script>

    <!-- Plyr Demo Component js -->
    <script src="assets/js/pages/extended-plyr.js"></script>

</body>

</html>