
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
       <a class="nav-item nav-link" href="{{ route('Index.display') }}">Home</a>
       <a class="nav-item nav-link" href="{{ route('Collectionindex.display') }}">Collection</a>
       <a class="nav-item nav-link" href="{{ route('Shoes.display') }}">Shoes</a>
       <a class="nav-item nav-link" href="{{ route('Racingboot.display') }}">Racing Boots</a>
       <a class="nav-item nav-link" href="{{ route('Contact.display') }}">Contact</a>
       <a class="nav-item nav-link last" href="#"><img src="{{asset('resources/Admin/layouts/images/search_icon.png')}}"></a>
       <a class="nav-item nav-link last" href="#"><img src="{{asset('resources/Admin/layouts/images/shop_icon.png')}}"></a>
    </div>
</div>
</nav>
