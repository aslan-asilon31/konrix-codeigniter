<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Installation')); ?>

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

                <?php echo view('partials/page-title', array('subtitle' => 'Documentation', 'title' => 'Installation')); ?>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Setup</h6>
                    </div>
                    <div class="p-6">

                        <div class="p-6 max-w-full">

                            <p class="">We are using <a href="https://gulpjs.com/" target="_blank"
                                                        class="text-primary">gulp</a>
                                which allows to have complete automatation for
                                build flow. In case if you don't know - Gulp is a toolkit for automating
                                painful or time-consuming tasks in development workflow, so you can stop
                                messing around and build something. You can read it more about it <a
                                        href="https://gulpjs.com/" target="_blank" class="text-primary">here</a>. Please
                                follow below
                                steps to install and setup all prerequisites:</p>

                            <h6 class="mt-9 mb-2.5 text-base font-semibold">Prerequisites</h6>

                            <p class="mb-4">Please follow below steps to install and setup all prerequisites:</p>

                            <ul class="ps-8">
                                <li class="list-disc">
                                    <p class="my-2.5">Node.js</p>
                                    <p class="mb-3.5">In order to use build tools you will need to download
                                        and install Node.js. If you do not have Node.js installed already,
                                        you can get it by downloading the package installer from the
                                        official website. Please download the stable version of Node.js
                                        (LTS).</p><a href="https://nodejs.org/" target="_blank"
                                                     class="text-primary">Download
                                        Node.js</a>
                                </li>
                                <li class="pt-2 list-disc">
                                    <p class="my-2.5">Gulp &amp; Gulp CLI</p>
                                    <p>Make sure to have the <a href="https://gulpjs.com/" target="_blank"
                                                                class="text-primary">Gulp</a>
                                        installed &amp; running in your
                                        computer. If you already have installed gulp on your computer, you
                                        can skip this step. In order to install, just run command <code>npm
                                            install -g gulp@4.0.1</code> from your terminal.</p>
                                </li>
                                <li class="list-disc">
                                    <p class="my-2.5">Yarn</p>
                                    <p>Make sure to have the <a href="https://yarnpkg.com/lang/en/" target="_blank"
                                                                class="text-primary">Yarn</a> installed &amp; running in your
                                        computer. If you already have installed yarn on your computer, you
                                        can skip this step.</p>
                                </li>
                                <li class="list-disc">
                                    <p class="my-2.5">Git</p>
                                    <p>Make sure to have the <a href="https://git-scm.com/" target="_blank"
                                                                class="text-primary">Git</a>
                                        installed &amp; running in your
                                        computer. If you already have installed git on your computer, you
                                        can skip this step</p>
                                </li>
                                <li class="list-disc">
                                    <p class="my-2.5">Sqlite3 (For Windows)</p>
                                    <p> Open the download page
                                        <a href="https://www.sqlite.org/download.html" target="_blank"
                                           class="text-primary">https://www.sqlite.org/download.html</a>
                                        and download command-line tools file for your operating
                                        system.
                                    </p>
                                </li>
                                <li class="list-disc">
                                    <p class="my-2.5">PHP 7.4</p>
                                    <p> Make sure to have
                                        <a class="text-primary" href="https://www.php.net/" target="_blank">PHP-7.4 or latest version</a>
                                        installed &amp; running on your computer. If you already
                                        have installed PHP on your computer, you can skip this
                                        step.
                                    </p>
                                </li>
                                <li class="list-disc">
                                    <p class="my-2.5">Composer</p>
                                    <p>
                                        Make sure to have the <a class="text-primary" href="https://getcomposer.org/" target="_blank">Composer</a> installed &amp; running
                                        on your computer.
                                        If you already have installed Composer on your computer, you
                                        can skip this step.
                                    </p>
                                </li>
                                <li class="list-disc">
                                    <p class="my-2.5">Xampp (For Windows)</p>
                                    <p>
                                        Make sure to have
                                        <a class="text-primary" href="https://www.apachefriends.org/" target="_blank">the latest version of xampp</a>
                                        or installed &amp; running on your computer. If you
                                        already have installed Xampp on your computer, you can
                                        skip this step.
                                    </p>
                                </li>
                            </ul>

                            <h6 class="mt-9 mb-2.5 font-normal">Installation</h6>
                            <p class="mb-4">You can run the following commands to run project locally or
                                build for production use:</p>

                            <div class="shadow-sm overflow-hidden ring-1 ring-gray-200 dark:ring-gray-700 rounded-md">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                            Command</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                            Description</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap font-medium">
                                            <code>yarn install</code></td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                           This will install all required dependencies in node_modules folder.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap font-medium">
                                            <code>gulp</code></td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            It will compiles source files and monitor changes to your demo code, including JavaScript, Sass, and PHP files. Use <code>gulp build</code> for production.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap font-medium">
                                            <code>composer install</code></td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            It will install all dependencies in vendor folder.</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap font-medium">
                                            <code>php spark migrate</code></td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            It will migrate all the migrations to the database.</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap font-medium">
                                            <code>php spark db:seed UserSeeder</code></td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            It will fill your database with data after it's created.</td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap font-medium">
                                            <code>php spark serve</code></td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            It will start the development server.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="bg-success/20 text-sm text-success rounded-md p-4">If you are having
                            any question or
                            difficulty during setup, don't hesitate to contact us. We would be glad
                            to assist you.</div>

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