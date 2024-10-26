<header>
    <div class='container'>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src='pictures/brandlogo.png' width='155'></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('booking') }}">Booking Session</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>            
                </ul>
            </div>
        </nav>
    </div>
</header>
