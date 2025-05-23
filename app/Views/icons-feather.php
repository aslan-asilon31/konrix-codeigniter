<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Feather Icons')); ?>

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

                <?php echo view('partials/page-title', array('subtitle' => 'Icons', 'title' => 'Feather')); ?>

                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-between items-center">
                            <h5 class="card-title">
                                All Icons
                            </h5>

                            <a href="https://feathericons.com/" target="_blank" class="btn-code">
                                <span class="me-2">Documentaion</span>
                                <i class="mgc_link_2_line text-sm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-6 icons-list-demo" id="icons">
                            <div><i data-feather="alert-octagon"></i><span>alert-octagon</span></div>
                            <div><i data-feather="alert-circle"></i><span>alert-circle</span></div>
                            <div><i data-feather="activity"></i><span>activity</span></div>
                            <div><i data-feather="alert-triangle"></i><span>alert-triangle</span></div>
                            <div><i data-feather="align-center"></i><span>align-center</span></div>
                            <div><i data-feather="airplay"></i><span>airplay</span></div>
                            <div><i data-feather="align-justify"></i><span>align-justify</span></div>
                            <div><i data-feather="align-left"></i><span>align-left</span></div>
                            <div><i data-feather="align-right"></i><span>align-right</span></div>
                            <div><i data-feather="arrow-down-left"></i><span>arrow-down-left</span></div>
                            <div><i data-feather="arrow-down-right"></i><span>arrow-down-right</span></div>
                            <div><i data-feather="anchor"></i><span>anchor</span></div>
                            <div><i data-feather="aperture"></i><span>aperture</span></div>
                            <div><i data-feather="arrow-left"></i><span>arrow-left</span></div>
                            <div><i data-feather="arrow-right"></i><span>arrow-right</span></div>
                            <div><i data-feather="arrow-down"></i><span>arrow-down</span></div>
                            <div><i data-feather="arrow-up-left"></i><span>arrow-up-left</span></div>
                            <div><i data-feather="arrow-up-right"></i><span>arrow-up-right</span></div>
                            <div><i data-feather="arrow-up"></i><span>arrow-up</span></div>
                            <div><i data-feather="award"></i><span>award</span></div>
                            <div><i data-feather="bar-chart"></i><span>bar-chart</span></div>
                            <div><i data-feather="at-sign"></i><span>at-sign</span></div>
                            <div><i data-feather="bar-chart-2"></i><span>bar-chart-2</span></div>
                            <div><i data-feather="battery-charging"></i><span>battery-charging</span></div>
                            <div><i data-feather="bell-off"></i><span>bell-off</span></div>
                            <div><i data-feather="battery"></i><span>battery</span></div>
                            <div><i data-feather="bluetooth"></i><span>bluetooth</span></div>
                            <div><i data-feather="bell"></i><span>bell</span></div>
                            <div><i data-feather="book"></i><span>book</span></div>
                            <div><i data-feather="briefcase"></i><span>briefcase</span></div>
                            <div><i data-feather="camera-off"></i><span>camera-off</span></div>
                            <div><i data-feather="calendar"></i><span>calendar</span></div>
                            <div><i data-feather="bookmark"></i><span>bookmark</span></div>
                            <div><i data-feather="box"></i><span>box</span></div>
                            <div><i data-feather="camera"></i><span>camera</span></div>
                            <div><i data-feather="check-circle"></i><span>check-circle</span></div>
                            <div><i data-feather="check"></i><span>check</span></div>
                            <div><i data-feather="check-square"></i><span>check-square</span></div>
                            <div><i data-feather="cast"></i><span>cast</span></div>
                            <div><i data-feather="chevron-down"></i><span>chevron-down</span></div>
                            <div><i data-feather="chevron-left"></i><span>chevron-left</span></div>
                            <div><i data-feather="chevron-right"></i><span>chevron-right</span></div>
                            <div><i data-feather="chevron-up"></i><span>chevron-up</span></div>
                            <div><i data-feather="chevrons-down"></i><span>chevrons-down</span></div>
                            <div><i data-feather="chevrons-right"></i><span>chevrons-right</span></div>
                            <div><i data-feather="chevrons-up"></i><span>chevrons-up</span></div>
                            <div><i data-feather="chevrons-left"></i><span>chevrons-left</span></div>
                            <div><i data-feather="circle"></i><span>circle</span></div>
                            <div><i data-feather="clipboard"></i><span>clipboard</span></div>
                            <div><i data-feather="chrome"></i><span>chrome</span></div>
                            <div><i data-feather="clock"></i><span>clock</span></div>
                            <div><i data-feather="cloud-lightning"></i><span>cloud-lightning</span></div>
                            <div><i data-feather="cloud-drizzle"></i><span>cloud-drizzle</span></div>
                            <div><i data-feather="cloud-rain"></i><span>cloud-rain</span></div>
                            <div><i data-feather="cloud-off"></i><span>cloud-off</span></div>
                            <div><i data-feather="codepen"></i><span>codepen</span></div>
                            <div><i data-feather="cloud-snow"></i><span>cloud-snow</span></div>
                            <div><i data-feather="compass"></i><span>compass</span></div>
                            <div><i data-feather="copy"></i><span>copy</span></div>
                            <div><i data-feather="corner-down-right"></i><span>corner-down-right</span></div>
                            <div><i data-feather="corner-down-left"></i><span>corner-down-left</span></div>
                            <div><i data-feather="corner-left-down"></i><span>corner-left-down</span></div>
                            <div><i data-feather="corner-left-up"></i><span>corner-left-up</span></div>
                            <div><i data-feather="corner-up-left"></i><span>corner-up-left</span></div>
                            <div><i data-feather="corner-up-right"></i><span>corner-up-right</span></div>
                            <div><i data-feather="corner-right-down"></i><span>corner-right-down</span></div>
                            <div><i data-feather="corner-right-up"></i><span>corner-right-up</span></div>
                            <div><i data-feather="cpu"></i><span>cpu</span></div>
                            <div><i data-feather="credit-card"></i><span>credit-card</span></div>
                            <div><i data-feather="crosshair"></i><span>crosshair</span></div>
                            <div><i data-feather="disc"></i><span>disc</span></div>
                            <div><i data-feather="delete"></i><span>delete</span></div>
                            <div><i data-feather="download-cloud"></i><span>download-cloud</span></div>
                            <div><i data-feather="download"></i><span>download</span></div>
                            <div><i data-feather="droplet"></i><span>droplet</span></div>
                            <div><i data-feather="edit-2"></i><span>edit-2</span></div>
                            <div><i data-feather="edit"></i><span>edit</span></div>
                            <div><i data-feather="edit-3"></i><span>edit-3</span></div>
                            <div><i data-feather="external-link"></i><span>external-link</span></div>
                            <div><i data-feather="eye"></i><span>eye</span></div>
                            <div><i data-feather="feather"></i><span>feather</span></div>
                            <div><i data-feather="facebook"></i><span>facebook</span></div>
                            <div><i data-feather="file-minus"></i><span>file-minus</span></div>
                            <div><i data-feather="eye-off"></i><span>eye-off</span></div>
                            <div><i data-feather="fast-forward"></i><span>fast-forward</span></div>
                            <div><i data-feather="file-text"></i><span>file-text</span></div>
                            <div><i data-feather="film"></i><span>film</span></div>
                            <div><i data-feather="file"></i><span>file</span></div>
                            <div><i data-feather="file-plus"></i><span>file-plus</span></div>
                            <div><i data-feather="folder"></i><span>folder</span></div>
                            <div><i data-feather="filter"></i><span>filter</span></div>
                            <div><i data-feather="flag"></i><span>flag</span></div>
                            <div><i data-feather="globe"></i><span>globe</span></div>
                            <div><i data-feather="grid"></i><span>grid</span></div>
                            <div><i data-feather="heart"></i><span>heart</span></div>
                            <div><i data-feather="home"></i><span>home</span></div>
                            <div><i data-feather="github"></i><span>github</span></div>
                            <div><i data-feather="image"></i><span>image</span></div>
                            <div><i data-feather="inbox"></i><span>inbox</span></div>
                            <div><i data-feather="layers"></i><span>layers</span></div>
                            <div><i data-feather="info"></i><span>info</span></div>
                            <div><i data-feather="instagram"></i><span>instagram</span></div>
                            <div><i data-feather="layout"></i><span>layout</span></div>
                            <div><i data-feather="link-2"></i><span>link-2</span></div>
                            <div><i data-feather="life-buoy"></i><span>life-buoy</span></div>
                            <div><i data-feather="link"></i><span>link</span></div>
                            <div><i data-feather="log-in"></i><span>log-in</span></div>
                            <div><i data-feather="list"></i><span>list</span></div>
                            <div><i data-feather="lock"></i><span>lock</span></div>
                            <div><i data-feather="log-out"></i><span>log-out</span></div>
                            <div><i data-feather="loader"></i><span>loader</span></div>
                            <div><i data-feather="mail"></i><span>mail</span></div>
                            <div><i data-feather="maximize-2"></i><span>maximize-2</span></div>
                            <div><i data-feather="map"></i><span>map</span></div>
                            <div><i data-feather="maximize"></i><span>maximize</span></div>
                            <div><i data-feather="map-pin"></i><span>map-pin</span></div>
                            <div><i data-feather="menu"></i><span>menu</span></div>
                            <div><i data-feather="message-circle"></i><span>message-circle</span></div>
                            <div><i data-feather="message-square"></i><span>message-square</span></div>
                            <div><i data-feather="minimize-2"></i><span>minimize-2</span></div>
                            <div><i data-feather="minimize"></i><span>minimize</span></div>
                            <div><i data-feather="mic-off"></i><span>mic-off</span></div>
                            <div><i data-feather="minus-circle"></i><span>minus-circle</span></div>
                            <div><i data-feather="mic"></i><span>mic</span></div>
                            <div><i data-feather="minus-square"></i><span>minus-square</span></div>
                            <div><i data-feather="minus"></i><span>minus</span></div>
                            <div><i data-feather="moon"></i><span>moon</span></div>
                            <div><i data-feather="monitor"></i><span>monitor</span></div>
                            <div><i data-feather="more-vertical"></i><span>more-vertical</span></div>
                            <div><i data-feather="more-horizontal"></i><span>more-horizontal</span></div>
                            <div><i data-feather="move"></i><span>move</span></div>
                            <div><i data-feather="music"></i><span>music</span></div>
                            <div><i data-feather="navigation-2"></i><span>navigation-2</span></div>
                            <div><i data-feather="navigation"></i><span>navigation</span></div>
                            <div><i data-feather="octagon"></i><span>octagon</span></div>
                            <div><i data-feather="package"></i><span>package</span></div>
                            <div><i data-feather="pause-circle"></i><span>pause-circle</span></div>
                            <div><i data-feather="pause"></i><span>pause</span></div>
                            <div><i data-feather="percent"></i><span>percent</span></div>
                            <div><i data-feather="phone-call"></i><span>phone-call</span></div>
                            <div><i data-feather="phone-forwarded"></i><span>phone-forwarded</span></div>
                            <div><i data-feather="phone-missed"></i><span>phone-missed</span></div>
                            <div><i data-feather="phone-off"></i><span>phone-off</span></div>
                            <div><i data-feather="phone-incoming"></i><span>phone-incoming</span></div>
                            <div><i data-feather="phone"></i><span>phone</span></div>
                            <div><i data-feather="phone-outgoing"></i><span>phone-outgoing</span></div>
                            <div><i data-feather="pie-chart"></i><span>pie-chart</span></div>
                            <div><i data-feather="play-circle"></i><span>play-circle</span></div>
                            <div><i data-feather="play"></i><span>play</span></div>
                            <div><i data-feather="plus-square"></i><span>plus-square</span></div>
                            <div><i data-feather="plus-circle"></i><span>plus-circle</span></div>
                            <div><i data-feather="plus"></i><span>plus</span></div>
                            <div><i data-feather="pocket"></i><span>pocket</span></div>
                            <div><i data-feather="printer"></i><span>printer</span></div>
                            <div><i data-feather="power"></i><span>power</span></div>
                            <div><i data-feather="radio"></i><span>radio</span></div>
                            <div><i data-feather="repeat"></i><span>repeat</span></div>
                            <div><i data-feather="refresh-ccw"></i><span>refresh-ccw</span></div>
                            <div><i data-feather="rewind"></i><span>rewind</span></div>
                            <div><i data-feather="rotate-ccw"></i><span>rotate-ccw</span></div>
                            <div><i data-feather="refresh-cw"></i><span>refresh-cw</span></div>
                            <div><i data-feather="rotate-cw"></i><span>rotate-cw</span></div>
                            <div><i data-feather="save"></i><span>save</span></div>
                            <div><i data-feather="search"></i><span>search</span></div>
                            <div><i data-feather="server"></i><span>server</span></div>
                            <div><i data-feather="scissors"></i><span>scissors</span></div>
                            <div><i data-feather="share-2"></i><span>share-2</span></div>
                            <div><i data-feather="share"></i><span>share</span></div>
                            <div><i data-feather="shield"></i><span>shield</span></div>
                            <div><i data-feather="settings"></i><span>settings</span></div>
                            <div><i data-feather="skip-back"></i><span>skip-back</span></div>
                            <div><i data-feather="shuffle"></i><span>shuffle</span></div>
                            <div><i data-feather="sidebar"></i><span>sidebar</span></div>
                            <div><i data-feather="skip-forward"></i><span>skip-forward</span></div>
                            <div><i data-feather="slack"></i><span>slack</span></div>
                            <div><i data-feather="slash"></i><span>slash</span></div>
                            <div><i data-feather="smartphone"></i><span>smartphone</span></div>
                            <div><i data-feather="square"></i><span>square</span></div>
                            <div><i data-feather="speaker"></i><span>speaker</span></div>
                            <div><i data-feather="star"></i><span>star</span></div>
                            <div><i data-feather="stop-circle"></i><span>stop-circle</span></div>
                            <div><i data-feather="sun"></i><span>sun</span></div>
                            <div><i data-feather="sunrise"></i><span>sunrise</span></div>
                            <div><i data-feather="tablet"></i><span>tablet</span></div>
                            <div><i data-feather="tag"></i><span>tag</span></div>
                            <div><i data-feather="sunset"></i><span>sunset</span></div>
                            <div><i data-feather="target"></i><span>target</span></div>
                            <div><i data-feather="thermometer"></i><span>thermometer</span></div>
                            <div><i data-feather="thumbs-up"></i><span>thumbs-up</span></div>
                            <div><i data-feather="thumbs-down"></i><span>thumbs-down</span></div>
                            <div><i data-feather="toggle-left"></i><span>toggle-left</span></div>
                            <div><i data-feather="toggle-right"></i><span>toggle-right</span></div>
                            <div><i data-feather="trash-2"></i><span>trash-2</span></div>
                            <div><i data-feather="trash"></i><span>trash</span></div>
                            <div><i data-feather="trending-up"></i><span>trending-up</span></div>
                            <div><i data-feather="trending-down"></i><span>trending-down</span></div>
                            <div><i data-feather="triangle"></i><span>triangle</span></div>
                            <div><i data-feather="type"></i><span>type</span></div>
                            <div><i data-feather="twitter"></i><span>twitter</span></div>
                            <div><i data-feather="upload"></i><span>upload</span></div>
                            <div><i data-feather="umbrella"></i><span>umbrella</span></div>
                            <div><i data-feather="upload-cloud"></i><span>upload-cloud</span></div>
                            <div><i data-feather="unlock"></i><span>unlock</span></div>
                            <div><i data-feather="user-check"></i><span>user-check</span></div>
                            <div><i data-feather="user-minus"></i><span>user-minus</span></div>
                            <div><i data-feather="user-plus"></i><span>user-plus</span></div>
                            <div><i data-feather="user-x"></i><span>user-x</span></div>
                            <div><i data-feather="user"></i><span>user</span></div>
                            <div><i data-feather="users"></i><span>users</span></div>
                            <div><i data-feather="video-off"></i><span>video-off</span></div>
                            <div><i data-feather="video"></i><span>video</span></div>
                            <div><i data-feather="voicemail"></i><span>voicemail</span></div>
                            <div><i data-feather="volume-x"></i><span>volume-x</span></div>
                            <div><i data-feather="volume-1"></i><span>volume-1</span></div>
                            <div><i data-feather="volume-2"></i><span>volume-2</span></div>
                            <div><i data-feather="volume"></i><span>volume</span></div>
                            <div><i data-feather="watch"></i><span>watch</span></div>
                            <div><i data-feather="wifi"></i><span>wifi</span></div>
                            <div><i data-feather="x-square"></i><span>x-square</span></div>
                            <div><i data-feather="wind"></i><span>wind</span></div>
                            <div><i data-feather="x"></i><span>x</span></div>
                            <div><i data-feather="x-circle"></i><span>x-circle</span></div>
                            <div><i data-feather="zap"></i><span>zap</span></div>
                            <div><i data-feather="zoom-in"></i><span>zoom-in</span></div>
                            <div><i data-feather="zoom-out"></i><span>zoom-out</span></div>
                            <div><i data-feather="command"></i><span>command</span></div>
                            <div><i data-feather="cloud"></i><span>cloud</span></div>
                            <div><i data-feather="hash"></i><span>hash</span></div>
                            <div><i data-feather="headphones"></i><span>headphones</span></div>
                            <div><i data-feather="underline"></i><span>underline</span></div>
                            <div><i data-feather="italic"></i><span>italic</span></div>
                            <div><i data-feather="bold"></i><span>bold</span></div>
                            <div><i data-feather="crop"></i><span>crop</span></div>
                            <div><i data-feather="help-circle"></i><span>help-circle</span></div>
                            <div><i data-feather="paperclip"></i><span>paperclip</span></div>
                            <div><i data-feather="shopping-cart"></i><span>shopping-cart</span></div>
                            <div><i data-feather="tv"></i><span>tv</span></div>
                            <div><i data-feather="wifi-off"></i><span>wifi-off</span></div>
                            <div><i data-feather="gitlab"></i><span>gitlab</span></div>
                            <div><i data-feather="sliders"></i><span>sliders</span></div>
                            <div><i data-feather="star"></i><span>star</span></div>
                            <div><i data-feather="heart"></i><span>heart</span></div>
                            <div><i data-feather="archive"></i><span>archive</span></div>
                            <div><i data-feather="arrow-down-circle"></i><span>arrow-down-circle</span></div>
                            <div><i data-feather="arrow-up-circle"></i><span>arrow-up-circle</span></div>
                            <div><i data-feather="arrow-left-circle"></i><span>arrow-left-circle</span></div>
                            <div><i data-feather="arrow-right-circle"></i><span>arrow-right-circle</span></div>
                            <div><i data-feather="bar-chart"></i><span>bar-chart</span></div>
                            <div><i data-feather="bar-chart-2"></i><span>bar-chart-2</span></div>
                            <div><i data-feather="book-open"></i><span>book-open</span></div>
                            <div><i data-feather="code"></i><span>code</span></div>
                            <div><i data-feather="database"></i><span>database</span></div>
                            <div><i data-feather="dollar-sign"></i><span>dollar-sign</span></div>
                            <div><i data-feather="folder-plus"></i><span>folder-plus</span></div>
                            <div><i data-feather="gift"></i><span>gift</span></div>
                            <div><i data-feather="folder-minus"></i><span>folder-minus</span></div>
                            <div><i data-feather="git-commit"></i><span>git-commit</span></div>
                            <div><i data-feather="git-branch"></i><span>git-branch</span></div>
                            <div><i data-feather="git-pull-request"></i><span>git-pull-request</span></div>
                            <div><i data-feather="git-merge"></i><span>git-merge</span></div>
                            <div><i data-feather="linkedin"></i><span>linkedin</span></div>
                            <div><i data-feather="hard-drive"></i><span>hard-drive</span></div>
                            <div><i data-feather="more-vertical"></i><span>more-vertical</span></div>
                            <div><i data-feather="more-horizontal"></i><span>more-horizontal</span></div>
                            <div><i data-feather="rss"></i><span>rss</span></div>
                            <div><i data-feather="send"></i><span>send</span></div>
                            <div><i data-feather="shield-off"></i><span>shield-off</span></div>
                            <div><i data-feather="shopping-bag"></i><span>shopping-bag</span></div>
                            <div><i data-feather="terminal"></i><span>terminal</span></div>
                            <div><i data-feather="truck"></i><span>truck</span></div>
                            <div><i data-feather="zap-off"></i><span>zap-off</span></div>
                            <div><i data-feather="youtube"></i><span>youtube</span></div>
                        </div>
                    </div>
                </div> <!-- end card -->
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