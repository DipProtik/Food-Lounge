<div id="navigation">
    <div class="dark-mask"></div>

    <div class="nav-open">
         <a href="{{route('home')}}"> <img class="logo-light logo" src="{{URL::to('img/logo.png')}}" alt="Logo"> </a>

        <div class="menu-bar">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>      
        </div>
        <img src="{{URL::to('img/close.png')}}" alt="" class="close-menu">
        <div class="bottom-icons">
       
            <a href="{{route('cart')}}">
                <img class="light" src="{{URL::to('img/icons/cart-light.png')}}" alt="">
                <span class="cartQty" id="cartQty">{{Session::has('cartQty')? Session::get('cartQty') : 0}}</span>
            </a>   
        </div>
        
    </div>
    <div class="nav-wrapper">
        <ul class="nav-ul">
            <li class=""><a href="{{route('home')}}">Home</a></li>
            <li class=""><a href="{{route('menu')}}">Menu</a></li>
            <li class=""><a href="{{route('reservation')}}" >Reservation</a></li>
            <li class=""><a href="{{route('galleries')}}" >Gallery</a></li>
            <li class=""><a href="{{route('contact')}}" >Contact</a></li>
            @guest
            <li class=""><a href="{{route('login')}}">Login</a></li>  
            <li class=""><a href="{{route('register')}}">Register</a></li>
            @else

            <li class=""><a href="{{route('user.orders')}}">My Orders</a></li>
            <li class=""><a href="{{route('user.profile')}}">Profile</a></li>  
            
            <li class=""><a href="{{route('user.logout')}}">Logout</a></li>
            @endguest       
        </ul>
        <ul class="socials-ul">
            <li><a href="https://www.google.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://www.google.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="https://www.google.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

        </ul>    
    </div>
   
    
</div>
