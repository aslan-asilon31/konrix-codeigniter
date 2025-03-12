<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Introducation')); ?>

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

                <?php echo view('partials/page-title', array('subtitle' => 'Documentation', 'title' => 'Introduction')); ?>

                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="p-6">
                            <p>
                                Konrix is a premium admin template built on <code class="text-danger">Tailwind
                                    v3.3.3 and CodeIgniter v4</code> with utilizing cutting-edge web technologies
                                like HTML5, CSS3, PHP, and JavaScript. It offers a beautiful
                                dashboard, pre-built components, widgets, and pages that are
                                highly versatile and easily integrated into any webpage.
                                With a fully responsive and highly customizable design,
                                Konrix is a powerful and flexible choice for developing web
                                applications like CRM, CMS, and dashboards. The
                                documentation provides clear instructions for users of all
                                skill levels to make the most of the template's features and
                                functionalities.
                            </p>
                            <p>
                                It is extremely powerful and adaptable, making it ideal for
                                web development. applications including CRM, CMS, admin
                                panels, dashboards, etc. It is fully responsive and has a
                                perfect look and feel on mobiles and tablets. Also, we tried
                                to implement this by Keeping the concept of modularity in
                                mind, this enables you to reduce the development time and
                                cost.
                            </p>
                            <p>
                                This documentation is guidelines for all users who can even
                                be a beginner or experienced web developer.
                            </p>
                            <p>
                                We really care for our buyers, so in case you are having any
                                question or feedback, please feel free to get back to us via
                                email <code>support@coderthemes.com</code> or by filling out
                                the contact form on our
                                <a href="http://coderthemes.com/#contact" class="text-primary" target="_blank">website</a>.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="p-6">
                            <h4 class="card-title mb-4">Structure</h4>
                            <p>
                                When you extract the zip file you received after purchasing,
                                you will find the following files and folders:
                            </p>
                            <div class="mt-4 rounded p-1">
                                <pre class="language-html">
                                    <code>
├── Documentation
└── Konrix
    ├── app
    |   ├── Config
    |   ├── Controller
    |   |   ├── Auth.php
    |   |   ├── BaseController.php
    |   |   └── Home.php
    |   ├── Database
    |   |   ├── Migrations
    |   |   ├── Seeds
    |   |   └── database.db
    |   ├── Filters
    |   |   ├── Auth.php
    |   |   └── NoAuth.php
    |   ├── Helpers
    |   ├── Language
    |   ├── Libraries
    |   ├── Models
    |   |   └── Users.php
    |   ├── ThirdParty
    |   └── Views
    |       ├── auth
    |       |   └── login.php
    |       ├── partials
    |       └── all the PHP files
    ├── public
    |   └── assets
    |       └── source
    |          ├── data
    |          ├── fonts
    |          ├── images
    |          ├── js
    |          └── scss
    ├── tests
    ├── writable
    ├── composer.json
    ├── gulpfile.js - containing gulp tasks
    └── package.json
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="p-6">
                            <h4 class="card-title mb-2 font-bold">Credits/Plugins</h4>
                            <p>
                                We are incredibly grateful to the creators of the following
                                plugins, without which the development of Konrix would not
                                have been possible. Each of these plugins comes with its own
                                official documentation, and we highly recommend that you
                                refer to them while building your project with Konrix.
                            </p>
                            <div class="grid md:grid-cols-2 gap-6 mt-5">
                                <div class="col-md-6">
                                    <div class="overflow-hidden ring-1 ring-gray-200 dark:ring-gray-700 md:rounded-lg mb-6">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                            <tr>
                                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Plugins</th>
                                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Url</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Tailwindcss</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://tailwindcss.com/" target="_blank">https://tailwindcss.com/</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Frostui</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://frost.getappui.com/" target="_blank">https://frost.getappui.com/</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Remixicon</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://remixicon.com/" target="_blank">https://remixicon.com/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">lucide Icons</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://lucide.dev" target="_blank">https://lucide.dev</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Swiper</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://swiperjs.com/" target="_blank">https://swiperjs.com/</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Input Mask</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://github.com/RobinHerbots/Inputmask" target="_blank">https://github.com/RobinHerbots/Inputmask</a>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Flatpickr</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://flatpickr.js.org/" target="_blank">https://flatpickr.js.org/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Chartjs</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="http://www.chartjs.org/" target="_blank">http://www.chartjs.org/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Tippy Tooltip</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://atomiks.github.io/tippyjs/" target="_blank">https://atomiks.github.io/tippyjs/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Sortablejs</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://github.com/SortableJS/Sortable#readme" target="_blank">https://github.com/SortableJS/Sortable#readme</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Calendar</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://fullcalendar.io/" target="_blank">https://fullcalendar.io/</a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="overflow-hidden ring-1 ring-gray-200 dark:ring-gray-700 md:rounded-lg mb-6">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                            <tr>
                                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Plugins</th>
                                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Url</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Google Maps</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://hpneo.github.io/gmaps/examples.html" target="_blank">https://hpneo.github.io/gmaps/examples.html</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Jvectormap</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://jvm-docs.vercel.app/" target="_blank">https://jvm-docs.vercel.app/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Gridjs Data Table</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://gridjs.io" target="_blank">https://gridjs.io</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Simplebar</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://github.com/Grsmto/simplebar" target="_blank">https://github.com/Grsmto/simplebar</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Dropzone js</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://www.dropzonejs.com/" target="_blank">https://www.dropzonejs.com/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Video Player</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://plyr.io" target="_blank">https://plyr.io</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Form Editor (Quill js)</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="http://quilljs.com" target="_blank">http://quilljs.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Apex Charts</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://apexcharts.com/" target="_blank">https://apexcharts.com/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">choices js (Select)</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://github.com/jshjohnson/Choices#readme" target="_blank">https://github.com/jshjohnson/Choices#readme</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Color Picker</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://github.com/Simonwep/pickr#readme" target="_blank">https://github.com/Simonwep/pickr#readme</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">rater-js</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <a href="https://fredolss.github.io/rater-js" target="_blank">https://fredolss.github.io/rater-js</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

</body>

</html>