<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'File Upload')); ?>

    <!-- Dropzone Plugin Css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">

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

                <?php echo view('partials/page-title', array('subtitle' => 'Forms', 'title' => 'File Upload')); ?>

                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-between items-center">
                            <h4 class="card-title">Dropzone</h4>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="formDropzone">
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
                        <form action="#" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick w-full">
                                <div class="mb-3">
                                    <i class="mgc_upload_3_line text-4xl text-gray-300 dark:text-gray-200"></i>
                                </div>

                                <h5 class="text-xl text-gray-600 dark:text-gray-200">Drop files here or click to upload.</h5>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <button type="button" class="btn bg-violet-500 border-violet-500 text-white">Send Files</button>
                        </div>

                        <div id="formDropzone" class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <pre class="language-html h-56">
                                <code>
                                    &lt;form action=&quot;#&quot; class=&quot;dropzone&quot;&gt;
                                        &lt;div class=&quot;fallback&quot;&gt;
                                            &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple=&quot;multiple&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;dz-message needsclick w-full&quot;&gt;
                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                &lt;i class=&quot;mgc_upload_3_line text-4xl text-gray-300 dark:text-gray-200&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
            
                                            &lt;h5 class=&quot;text-xl text-gray-600 dark:text-gray-200&quot;&gt;Drop files here or click to upload.&lt;/h5&gt;
                                        &lt;/div&gt;
                                    &lt;/form&gt;
            
                                    &lt;div class=&quot;text-center mt-4&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-violet-500 border-violet-500 text-white&quot;&gt;Send Files&lt;/button&gt;
                                    &lt;/div&gt;
                                </code>
                            </pre>
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

    <!-- Dropzone js -->
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

</body>

</html>