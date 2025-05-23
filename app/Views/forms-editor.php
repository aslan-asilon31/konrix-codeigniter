<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Form Editor')); ?>

    <!-- quill css -->
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" >
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" >
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" >

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

                <?php echo view('partials/page-title', array('subtitle' => 'Form', 'title' => 'Editor')); ?>

                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Snow Editor</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="SnowEditorHtml">
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
                            <!-- Quill Editors -->
                            <div id="snow-editor" style="height: 300px;">
                                <h3><span class="ql-size-large">Hello World!</span></h3>
                                <p><br></p>
                                <h3>This is a simple editable area.</h3>
                                <p><br></p>
                                <ul>
                                    <li>Select a text to reveal the toolbar.</li>
                                    <li>Edit rich document on-the-fly, so elastic!</li>
                                </ul>
                                <p><br></p>
                                <p>End of simple area</p>
                            </div>

                            <div id="SnowEditorHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div id=&quot;snow-editor&quot; style=&quot;height: 300px;&quot;&gt;
                                            &lt;h3&gt;&lt;span class=&quot;ql-size-large&quot;&gt;Hello World!&lt;/span&gt;&lt;/h3&gt;
                                            &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                            &lt;h3&gt;This is a simple editable area.&lt;/h3&gt;
                                            &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;Select a text to reveal the toolbar.&lt;/li&gt;
                                                &lt;li&gt;Edit rich document on-the-fly, so elastic!&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                            &lt;p&gt;End of simple area&lt;/p&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Bubble Editor</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="BubbleEditorHtml">
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
                            <!-- Bubble Editors -->
                            <div id="bubble-editor" style="height: 300px;">
                                <h3><span class="ql-size-large">Hello World!</span></h3>
                                <p><br></p>
                                <h3>This is a simple editable area.</h3>
                                <p><br></p>
                                <ul>
                                    <li>Select a text to reveal the toolbar.</li>
                                    <li>Edit rich document on-the-fly, so elastic!</li>
                                </ul>
                                <p><br></p>
                                <p>End of simple area</p>
                            </div>
                            <div id="BubbleEditorHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div id=&quot;snow-editor&quot; style=&quot;height: 300px;&quot;&gt;
                                            &lt;h3&gt;&lt;span class=&quot;ql-size-large&quot;&gt;Hello World!&lt;/span&gt;&lt;/h3&gt;
                                            &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                            &lt;h3&gt;This is a simple editable area.&lt;/h3&gt;
                                            &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;Select a text to reveal the toolbar.&lt;/li&gt;
                                                &lt;li&gt;Edit rich document on-the-fly, so elastic!&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                            &lt;p&gt;End of simple area&lt;/p&gt;
                                        &lt;/div&gt;
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

    <!-- quill js -->
    <script src="assets/libs/quill/quill.min.js"></script>

    <script src="assets/js/pages/form-editor.js"></script>

</body>

</html>