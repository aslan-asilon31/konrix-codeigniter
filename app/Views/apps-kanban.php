<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Kanban')); ?>

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
                <!-- Page Title Start -->
                <div class="flex justify-between items-center mb-6">
                    <div class="flex gap-3">
                        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Kanban</h4>
                        <div>
                            <button class="btn btn-sm bg-primary text-white" data-fc-target="create_task_modal" data-fc-type="modal" type="button"> Add Task </button>

                            <div id="create_task_modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 overflow-y-auto fc-modal hidden">
                                <div class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-3xl sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                    <div class="flex justify-between items-center py-3 px-6 border-b dark:border-gray-700">
                                        <h3 class="font-medium text-gray-600 dark:text-white text-base">
                                            Create New Task
                                        </h3>
                                        <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss="" type="button">
                                            <i class="mgc_close_line text-lg"></i>
                                        </button>
                                    </div><!-- End Modal Header -->
                                    <div class="py-3 px-6 overflow-y-auto">
                                        <form class="">
                                            <div class="grid sm:grid-cols-2 grid-cols-1 gap-6">
                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label class="font-semibold text-gray-500">Title</label>
                                                    <select class="form-select">
                                                        <option selected>Select</option>
                                                        <option> Konrix - Admin Dashboard</option>
                                                        <option>CRM - Design &amp; Development</option>
                                                        <option>Topnav layout design</option>
                                                        <option>Invite user to a project</option>
                                                        <option>Write a release note</option>
                                                        <option>Create a Graph of Sketch</option>
                                                        <option>Enable analytics tracking</option>
                                                        <option>iOS - App Design</option>
                                                    </select>
                                                </div>
                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label class="font-semibold text-gray-500">Categories</label>
                                                    <select class="form-select">
                                                        <option>Design</option>
                                                        <option>Web</option>
                                                        <option>Backend</option>
                                                        <option>Product</option>
                                                        <option>Checking</option>
                                                        <option>Shopify</option>
                                                        <option>Wordpress</option>
                                                        <option>App</option>
                                                        <option>Testing</option>
                                                        <option>Q&A</option>
                                                    </select>
                                                </div>
                                            </div>
                    
                                            <div class="grid sm:grid-cols-3 grid-cols-1 gap-6">
                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label for="task-title" class="font-semibold text-gray-500">Components</label>
                                                    <select class="form-select">
                                                        <option selected>Select</option>
                                                        <option>Design</option>
                                                        <option>Web</option>
                                                        <option>Backend</option>
                                                        <option>Product</option>
                                                        <option>Checking</option>
                                                        <option>Shopify</option>
                                                        <option>Wordpress</option>
                                                        <option>App</option>
                                                        <option>Testing</option>
                                                        <option>Q&A</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label for="task-title" class="font-semibold text-gray-500">Attachment</label>
                                                    <select class="form-select">
                                                        <option selected>Select</option>
                                                        <option>Design</option>
                                                        <option>Web</option>
                                                        <option>Backend</option>
                                                        <option>Product</option>
                                                        <option>Checking</option>
                                                        <option>Shopify</option>
                                                        <option>Wordpress</option>
                                                        <option>App</option>
                                                        <option>Testing</option>
                                                        <option>Q&A</option>
                                                    </select>
                                                </div>

                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label for="task-priority2" class="font-semibold text-gray-500">Priority</label>
                                                    <select class="form-select" id="task-priority2">
                                                        <option>Low</option>
                                                        <option>Medium</option>
                                                        <option>High</option>
                                                    </select>
                                                </div>
                                            </div>
                    
                                            <div class="grid sm:grid-cols-2 grid-cols-1 gap-6">
                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label for="task-title" class="form-label">Assign To</label>
                                                    <select class="form-select" id="task-priority">
                                                        <option>Coderthemes</option>
                                                        <option>Robert Carlile</option>
                                                        <option>Louis Allen</option>
                                                        <option>Sean White</option>
                                                        <option>Riley Steele</option>
                                                        <option>Zak Turnbull</option>
                                                    </select>
                                                </div>
                
                                                <div class="space-y-1.5 mb-6 w-full">
                                                    <label for="task-priority" class="form-label">Due Date</label>
                                                    <input type="text" class="form-input" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- End Modal Details -->
                                    <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                        <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss="" type="button">Close</button>
                                        <a class="btn bg-success text-white" href="javascript:void(0)">Creat</a>
                                    </div><!-- End Modal Footer -->
                                </div>
                            </div><!-- End Modal Content -->
                        </div>
                    </div>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Konrix</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Apps</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Kanban</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="grid h-full w-full">
                    <div class="overflow-hidden text-gray-700 dark:text-slate-400">
                        <div class="flex overflow-x-auto custom-scroll gap-6 pb-4">
                            <div class="flex flex-col flex-shrink-0 w-72 border rounded-md overflow-hidden border-gray-200 dark:border-gray-700">
                                <div class="flex items-center flex-shrink-0 h-10 p-4 bg-white dark:bg-slate-800">
                                    <span class="block text-sm font-semibold uppercase">In progress (6)</span>
                                </div>
                                <div class="flex flex-col gap-4 overflow-auto p-4 h-[calc(100vh-300px)] kanban-board custom-scroll" id="kanbanborad-two">
                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-danger bg-danger/25 rounded-full">Design</h4>
                                            <div class="text-xs">13 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">iOS App home page</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">12</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">12</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-8.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-gray-400 bg-gray-400/25 rounded-full">Web</h4>

                                            <div class="text-xs">15 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Topnav layout design</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">4</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">1</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-4.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-success bg-success/25 rounded-full">Backend</h4>

                                            <div class="text-xs">12 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Invite user to a project</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">8</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">6</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-2.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 border rounded-md overflow-hidden border-gray-200 dark:border-gray-700">
                                <div class="flex items-center flex-shrink-0 h-10 p-4 bg-white dark:bg-slate-800">
                                    <span class="block text-sm font-semibold uppercase">Todo (6)</span>
                                </div>
                                <div class="flex flex-col gap-4 overflow-auto p-4 h-[calc(100vh-300px)] kanban-board custom-scroll" id="kanbanborad-one">
                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-info bg-info/25 rounded-full">Product</h4>

                                            <div class="text-xs">14 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Write a release note</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">6</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">7</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-4.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-cyan-500 bg-cyan-500/25 rounded-full">Checking</h4>

                                            <div class="text-xs">18 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Create a Graph of Sketch</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">8</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">10</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-5.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-warning bg-warning/25 rounded-full">Shopify</h4>

                                            <div class="text-xs">15 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Enable analytics tracking</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">5</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">14</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-7.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 border rounded-md overflow-hidden border-gray-200 dark:border-gray-700">
                                <div class="flex items-center flex-shrink-0 h-10 p-4 bg-white dark:bg-slate-800">
                                    <span class="block text-sm font-semibold uppercase">Review (6)</span>
                                </div>
                                <div class="flex flex-col gap-4 overflow-auto p-4 h-[calc(100vh-300px)] kanban-board custom-scroll" id="kanbanborad-three">
                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-success bg-success/25 rounded-full">Wordpress</h4>

                                            <div class="text-xs">14 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Kanban board design</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">46</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">17</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-3.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-danger bg-danger/25 rounded-full">Design</h4>

                                            <div class="text-xs">15 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Code HTML email template</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">24</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">15</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-4.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 border rounded-md overflow-hidden border-gray-200 dark:border-gray-700">
                                <div class="flex items-center flex-shrink-0 h-10 p-4 bg-white dark:bg-slate-800">
                                    <span class="block text-sm font-semibold uppercase">Done (1)</span>
                                </div>
                                <div class="flex flex-col gap-4 overflow-auto p-4 h-[calc(100vh-300px)] kanban-board custom-scroll" id="kanbanborad-four">
                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-sky-500 bg-sky-500/25 rounded-full">App</h4>

                                            <div class="text-xs">16 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Brand logo design</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">34</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">16</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-6.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-danger bg-danger/25 rounded-full">Design</h4>

                                            <div class="text-xs">15 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Improve animation loader</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">2</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">15</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-9.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 border rounded-md overflow-hidden border-gray-200 dark:border-gray-700">
                                <div class="flex items-center flex-shrink-0 h-10 p-4 bg-white dark:bg-slate-800">
                                    <span class="block text-sm font-semibold uppercase">Unassigned (1)</span>
                                </div>
                                <div class="flex flex-col gap-4 overflow-auto p-4 h-[calc(100vh-300px)] kanban-board custom-scroll" id="kanbanborad-five">
                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-success bg-success/25 rounded-full">Web</h4>

                                            <div class="text-xs">16 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Dashboard design</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">14</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">5</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-2.jpg">
                                        </div>
                                    </div>

                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-amber-500 bg-amber-500/25 rounded-full">Testing</h4>

                                            <div class="text-xs">17 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Banner Design for FB & Twitter</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">9</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">41</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-7.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col flex-shrink-0 w-72 border rounded-md overflow-hidden border-gray-200 dark:border-gray-700">
                                <div class="flex items-center flex-shrink-0 h-10 p-4 bg-white dark:bg-slate-800">
                                    <span class="block text-sm font-semibold uppercase">New (1)</span>
                                </div>
                                <div class="flex flex-col gap-4 overflow-auto p-4 h-[calc(100vh-300px)] kanban-board custom-scroll" id="kanbanborad-six">
                                    <div class="card p-4 cursor-pointer">
                                        <div class="flex justify-between items-center">
                                            <h4 class="flex justify-between items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-500/25 rounded-full">Q&A</h4>

                                            <div class="text-xs">17 Jul 2023</div>
                                        </div>

                                        <h4 class="mt-3 text-sm">Create a Blog Template UI</h4>
                                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <i class="mgc_chat_3_line text-base"></i>
                                                <span class="ms-1 leading-none">14</span>
                                            </div>
                                            <div class="flex items-center ms-4">
                                                <i class="mgc_attachment_line rotate-45 text-base"></i>
                                                <span class="ms-1 leading-none">5</span>
                                            </div>
                                            <img class="w-6 h-6 ms-auto rounded-full" src="assets/images/users/avatar-4.jpg">
                                        </div>
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

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Sortablejs -->
    <script src="assets/libs/sortablejs/Sortable.min.js"></script>

    <!-- Dragula Demo Component js -->
    <script src="assets/js/pages/apps-kanban.js"></script>


</body>

</html>