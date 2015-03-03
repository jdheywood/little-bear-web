@section('content')

    <div class="container marketing">

        <hr class="divider">

        <div class="jumbotron">
            <h1>Welcome to Little Bear Production</h1>
            <p class="lead">Started in 2015 we are a small company providing project management
                and production services to the media, entertainment, e-learning and digital industries.
            </p>
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="img/icon_experience.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Project Management & Production</h2>
                <p>
                    Please have a read through my extensive <a href="/experience">experience</a> to see the skills and knowledge
                    I can offer you to help make your next project a success.
                </p>
                <p><a class="btn btn-default" href="/experience" role="button">My experience »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/icon_portfolio.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Portfolio</h2>
                <p> Take a look at my
                    <a href="/portfolio">portfolio</a> for some examples of my work and to see some of the great brands
                    I've had the pleasure of working with.
                </p>
                <p><a class="btn btn-default" href="/portfolio" role="button">My portfolio »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/icon_contact.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Contact</h2>
                <p>If you like what you see and want to inquire about my availability then please do not hesitate
                    to <a href="/contact">get in touch</a>, I'd love to hear about the interesting projects you have in mind
                    and discuss how I can help you realise the success that your great ideas deserve.
                </p>
                <p><a class="btn btn-default" href="/contact" role="button">Get in touch »</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        @include('shared.footer')
    </div>

@stop