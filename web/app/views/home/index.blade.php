@section('content')

    <div class="container marketing">

        <hr class="divider">

        <div class="jumbotron">
            <h1>{{$pageTitle}}</h1>
            <p class="lead">Bacon ipsum dolor amet venison doner rump landjaeger pancetta, spare ribs flank shankle beef ribs strip steak.
                Shoulder strip steak prosciutto swine bresaola andouille tri-tip ground round.</p>
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="holder.js/140x140/auto" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Project Management</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="holder.js/140x140/auto" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Production</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur
                    purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="holder.js/140x140/auto" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Cakes!</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        @include('shared.footer')
    </div>

@stop