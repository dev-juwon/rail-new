<nav>   
    <div class="sidebar" id="sidebar">
        <div class="cancel-button1">
            <img class="cancel-button" src="/images/Cancel.png" alt="">
        </div>
        <div class="side-content container">
           <ul class="menu-content">
            <li><a href="{{ route('home') }}"><img class="menu-arrow" src="images/Arrow.png" alt="">Home</a></li>
            <li><a href="{{ url('products') }}"> <img class="menu-arrow" src="images/Arrow.png" alt=""> Products</a>
            <ul>
                <li><a href=""><img class="menu-arrow" src="images/Arrow.png" alt="">Digital Products</a></li>
                <li><a href=""><img class="menu-arrow" src="images/Arrow.png" alt="">Physical Products</a></li>
            </ul></li>
            <li><a href="{{ url('pages/affiliate') }}"><img class="menu-arrow" src="images/Arrow.png" alt="">Affiliates</a></li>
            <li><a href="{{ url('pages/creator') }}"><img class="menu-arrow" src="images/Arrow.png" alt="">Creators</a></li>
           </ul>
    </div>
</nav>
