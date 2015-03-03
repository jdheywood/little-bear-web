<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Little Bear Production</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li @if($navigationActive == 'home') class="active" @endif>
                    <a href="/home">Home</a>
                </li>
                <li @if($navigationActive == 'experience') class="active" @endif>
                    <a href="/experience">Experience</a>
                </li>
                <li @if($navigationActive == 'portfolio') class="active" @endif>
                    <a href="/portfolio">Portfolio</a>
                </li>
                <li @if($navigationActive == 'contact') class="active" @endif>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
