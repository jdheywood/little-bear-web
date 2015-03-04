@section('content')

    <div class="container marketing">

        <hr class="divider">

        <div class="jumbotron">
            <h1>{{$pageTitle}}</h1>
            <p class="lead">
                During my career I have managed the production of high profile console games, online games and applications,
                e-learning software, multi-format music releases and a variety of DVD releases.
            </p>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    <a href="http://uk.playstation.com/psn/games/detail/item75520/Uncharted-Drakes-Fortune%E2%84%A2/" target="_blank">Uncharted: Drake's Fortune</a>
                    <span class="text-muted">Award winning AAA Playstation 3 title.</span>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="img/uncharted_montage_transparent.png" alt="uncharted"/>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="img/buzz_montage_transparent.png" alt="buzz"/>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    <a href="http://uk.playstation.com/psp/games/detail/item296190/Buzz%21%E2%84%A2-The-Ultimate-Music-Quiz/" target="_blank">Buzz! The Music Quiz</a>
                    <span class="text-muted">Genre defining social quiz for PS3.</span>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Numerous Album Productions <span class="text-muted">Production &amp; distribution of top selling albums.</span>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet,
                    <a href="http://www.allmusic.com/album/hed-kandi-twisted-disco-2003-mw0000402417">Twisted Disco</a> consectetur adipiscing elit,
                    <a href="http://www.allmusic.com/album/hed-kandi-disco-heaven-2003-mw0000402411" target="_blank">Disco Angel</a> do eiusmod tempor incididunt
                    <a href="http://www.allmusic.com/album/behind-the-sun-mw0000066802" target="_blank">Behind the Sun</a> ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="img/albums_montage_transparent.png" alt="albums"/>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="img/ludus_montage_transparent.png" alt="ludus"/>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    <a href="http://www.bbc.co.uk/cbbc/shows/ludus" target="_blank">Ludus</a>
                    <span class="text-muted">Multiple interactive touchscreen games for the CBBC television show.</span>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>

        <hr class="featurette-divider">

        @include('shared.footer')

    </div>

@stop
