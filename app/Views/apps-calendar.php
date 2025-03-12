<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Calendar')); ?>

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

                <div class="grid lg:grid-cols-4 gap-6">
                    <div class="card">
                        <div class="p-6">
                            <button class="px-3 py-2 rounded bg-primary text-white text-base w-full mb-4" id="btn-new-event" data-fc-target="new_event_modal" data-fc-type="modal" type="button"><i class="mgc_add_line"></i> Create New Event</button>
                            <div id="new_event_modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto fc-modal">
                                <div class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                    <div class="flex justify-between items-center py-3 px-6 border-b dark:border-gray-700">
                                        <h3 class="font-medium text-gray-500 dark:text-white text-base">
                                            Add New Event
                                        </h3>
                                        <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss="" type="button">
                                            <i class="mgc_close_line text-lg"></i>
                                        </button>
                                    </div><!-- End Modal Header -->
                                    <div class="py-3 px-6 overflow-y-auto">
                                        <div class="flex-col">
                                            <div class="w-full">
                                                <div class="space-y-1.5 mb-6">
                                                    <label class="font-semibold text-gray-500">Event Name</label>
                                                    <input class="form-input" placeholder="Insert Event Name" type="text" name="title" id="event-title" required="">
                                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <div class="space-y-1.5 mb-6">
                                                    <label class="font-semibold text-gray-500">Category</label>
                                                    <select class="form-select" name="category" id="event-category" required="">
                                                        <option class="dark:bg-gray-700" value="bg-danger" selected="">Danger</option>
                                                        <option class="dark:bg-gray-700" value="bg-success">Success</option>
                                                        <option class="dark:bg-gray-700" value="bg-primary">Primary</option>
                                                        <option class="dark:bg-gray-700" value="bg-info">Info</option>
                                                        <option class="dark:bg-gray-700" value="bg-dark">Dark</option>
                                                        <option class="dark:bg-gray-700" value="bg-warning">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Modal Details -->
                                    <div class="flex justify-end items-center gap-2 py-6 px-6 border-t dark:border-slate-700">
                                        <button class="btn bg-light text-gray-800 transition-all dark:bg-gray-700 dark:text-gray-100" data-fc-dismiss="" type="button">Close</button>
                                        <a class="btn bg-primary text-white" href="javascript:void(0)">Save
                                            Changes</a>
                                    </div><!-- End Modal Footer -->
                                </div>
                            </div><!-- End Modal Content -->

                            <div class="flex flex-col gap-1" id="external-events">
                                <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">Drag and drop your event or click in the calendar</p>
                                <button class="external-event bg-success px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-success">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>New Theme Release
                                </button>
                                <button class="external-event bg-info px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-info">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>My Event
                                </button>
                                <button class="external-event bg-warning px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-warning">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>Meet manager
                                </button>
                                <button class="external-event bg-danger px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-danger">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>Create New theme
                                </button>
                            </div>

                            <div class="mt-5">
                                <h5 class="text-center mb-2">How It Works ?</h5>

                                <ul class="ps-3">
                                    <li class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </li>
                                    <li class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                                    </li>
                                    <li class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3">
                        <div class="card">
                            <div class="p-6">
                                <div id="calendar"></div>
                            </div>
                        </div> <!-- end card -->
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

    <!-- Fullcalendar Plugin Js -->
    <script src="assets/libs/fullcalendar/index.global.min.js"></script>

    <!-- Calendar Js -->
    <script src="assets/js/pages/apps-calendar.js"></script>

</body>

</html>