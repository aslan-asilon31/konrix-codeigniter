<?= $this->include('partials/main') ?>

<head>
     <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

     <?= $this->include('partials/head-css') ?>
</head>

<body>

     <!-- Begin page -->
     <div class="flex wrapper">

          <?= $this->include('partials/menu') ?>

          <!-- ============================================================== -->
          <!-- Start Page Content here -->
          <!-- ============================================================== -->

          <div class="page-content">

               <?= $this->include('partials/topbar') ?>

               <main class="flex-grow p-6">

                    <?php echo view('partials/page-title', array('subtitle' => 'Maps', 'title' => 'Google')); ?>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Basic Example</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="gmaps-basic" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Markers Google Map</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="gmaps-markers" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Street View Panoramas Google Map</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="panorama" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Google Map Types</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="gmaps-types" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">Ultra Light With Labels</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="ultra-light" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Dark</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="dark" class="gmaps"></div>
                                   </div>
                              </div>
                         </div> <!-- end card -->

                    </div><!-- end grid-->

               </main>

               <?= $this->include('partials/footer') ?>

          </div>

          <!-- ============================================================== -->
          <!-- End Page content -->
          <!-- ============================================================== -->

     </div>
     <!-- END wrapper -->

     <?= $this->include('partials/customizer') ?>

     <?= $this->include('partials/highlight-scripts') ?>

     <?= $this->include('partials/footer-scripts') ?>

     <!-- Code Highlight Plugin Js -->
     <script src="assets/js/pages/highlight.js"></script>

     <!-- Google Maps API -->
     <script src="http://maps.google.com/maps/api/js"></script>

     <!-- Google Map Js -->
     <script src="assets/libs/gmaps/gmaps.min.js"></script>

     <!-- Google Map Demo js-->
     <script src="assets/js/pages/maps-google.js"></script>

</body>

</html>