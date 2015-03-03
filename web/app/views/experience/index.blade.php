@section('content')

    <div class="container marketing">

        <hr class="divider">

        <div class="jumbotron">
            <h1>{{$pageTitle}}</h1>
            <p class="lead">
                Little bear Production was founded by myself, Patricia Heywood, a well-organised and personable individual
                with excellent interpersonal skills, allied with a wealth of experience gained in varied employment.
            </p>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="holder.js/500x500/auto" alt="500x500"/>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Example Project One <span class="text-muted">This one was a doozy.</span>
                </h2>
                <p class="lead">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Example Project Two <span class="text-muted">This was a great example of my work.</span>
                </h2>
                <p class="lead">You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="holder.js/500x500/auto" alt="500x500"/>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="holder.js/500x500/auto" alt="500x500"/>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Example Project Three <span class="text-muted">Yet another great piece of work by me.</span>
                </h2>
                <p class="lead">Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        @include('shared.footer')

    </div>

@stop
