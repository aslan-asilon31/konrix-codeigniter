<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" >

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

                <?php echo view('partials/page-title', array('subtitle' => 'Apps', 'title' => 'Calendar')); ?>

                <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                    <div class="lg:col-span-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Swiper</h4>
                            </div>

                            <div class="p-6">

                                <h5 class="fw-semibold">Overview <a href="https://swiperjs.com/get-started" target="_blank" class="float-end badge badge-soft-success">Official Website <i class="mgc_attachment_line"></i></a></h5>
                                <p class="text-muted mb-4">Swiper is the most modern slider with hardware accelerated
                                    transitions and amazing native behavior.</p>

                                <h6>CSS</h6>
                                <pre>
                                    <code class="language-html">
                                        &lt;!--Swiper slider css--&gt;
                                        &lt;link href=&quot;assets/libs/swiper/swiper-bundle.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
                                    </code>
                                </pre>

                                <h6 class="mt-3">Javascript</h6>
                                <pre>
                                    <code class="language-html">
                                        &lt;!--Swiper slider js--&gt;
                                        &lt;script src=&quot;assets/libs/swiper/swiper-bundle.min.js&quot;&gt;&lt;/script&gt;
                                    </code>
                                </pre>

                                <h6 class="mt-3">Custom js</h6>
                                <pre>
                                    <code class="language-html">
                                        &lt;!-- swiper js --&gt;
                                        &lt;script src=&quot;assets/js/pages/extended-swiper.js&quot;&gt;&lt;/script&gt;
                                    </code>
                                </pre>
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Default Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="defaultSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper default-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-1.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-2.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-3.jpg" alt="" >
                                    </div>
                                </div>
                            </div>

                            <div id="defaultSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper default-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-1.jpg&quot; alt=&quot;&quot; &gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-2.jpg&quot; alt=&quot;&quot; &gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-3.jpg&quot; alt=&quot;&quot; &gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Navigation & Pagination Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="navigationSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper navigation-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-4.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-5.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-6.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="navigationSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper navigation-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-4.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-6.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Pagination Dynamic Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="paginationDyanmicSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper pagination-dynamic-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-7.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-8.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-9.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination dynamic-pagination"></div>
                            </div>

                            <div id="paginationDyanmicSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper pagination-dynamic-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-7.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-8.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-9.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination dynamic-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Pagination Fraction Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="paginationFractionSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper pagination-fraction-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-10.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-11.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-12.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="paginationFractionSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper pagination-fraction-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-10.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-11.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-12.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Pagination Custom Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="paginationCustomSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper pagination-custom-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-2.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-3.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-4.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination pagination-custom"></div>
                            </div>

                            <div id="paginationCustomSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper pagination-custom-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-2.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-3.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-4.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination pagination-custom&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Pagination Progress Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="paginationProgressSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper pagination-progress-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-5.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-6.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-7.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="paginationProgressSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper pagination-progress-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-6.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-7.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Scrollbar Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="paginationScrollbarSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper pagination-scrollbar-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-8.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-9.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-10.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-scrollbar"></div>
                            </div>

                            <div id="paginationScrollbarSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper pagination-scrollbar-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-8.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-9.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-10.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;swiper-scrollbar&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Vertical Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="verticalSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper vertical-swiper rounded" style="height: 324px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-11.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-12.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-1.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="verticalSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper vertical-swiper rounded&quot; style=&quot;height: 324px;&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-11.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-12.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-1.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Mousewheel Control Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="mousewheelControlSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper mousewheel-control-swiper rounded" style="height: 324px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-3.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-4.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-5.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="mousewheelControlSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper mousewheel-control-swiper rounded&quot; style=&quot;height: 324px;&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-3.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-4.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Effect Fade Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="effectFadeSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper effect-fade-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-6.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-7.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-8.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="effectFadeSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;swiper effect-fade-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-6.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-7.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-8.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Effect Creative Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="effectCreativeSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper effect-creative-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-9.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-10.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-11.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="effectCreativeSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;!-- Swiper --&gt;
                                        &lt;div class=&quot;swiper effect-creative-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-9.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-10.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-11.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Effect Flip Swiper</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="effectFlipSwiper">
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

                            <!-- Swiper -->
                            <div class="swiper effect-flip-swiper rounded">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-12.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-1.jpg" alt="" >
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/small/img-2.jpg" alt="" >
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div id="effectFlipSwiper" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;!-- Swiper --&gt;
                                        &lt;div class=&quot;swiper effect-flip-swiper rounded&quot;&gt;
                                            &lt;div class=&quot;swiper-wrapper&quot;&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-12.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-1.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;swiper-slide&quot;&gt;
                                                    &lt;img src=&quot;assets/images/small/img-2.jpg&quot; alt=&quot;&quot; /&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div><!-- end p-6 -->
                    </div><!-- end card -->
                </div>
                <!--end row-->

            </main>

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/footer-scripts') ?>
    
    <?= $this->include('partials/highlight-scripts') ?>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pages/extended-swiper.js"></script>

</body>

</html>