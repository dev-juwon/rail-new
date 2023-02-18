<header class="header">
    <a href="{{ route('home') }}"><img class="logo" src="images/IMG-20221209-WA0000.jpg" alt="logo"></a>
    <img id="menu" class="menu" src="/images/Hamburger Menu.png" alt="Menu">
</header>

<header class="desktop-header-section">
    <a href="{{ route('home') }}"><img class="logo1" src="images/IMG-20221209-WA0000.jpg" alt="logo"></a>

    <div class="sidebar1">
        <div class="cancel-button1">
            <img class="cancel-button" src="/images/Cancel.png" alt="">
        </div>
        <div class="side-content container">
           <ul class="menu-content1">
            <li><a href="{{ route('home') }}"><img class="menu-arrow" src="images/Arrow.png" alt="">Home</a></li>
            <li><a class="pro-arrow" href="{{ route('products.index') }}">Products <img class="menu-arrow1" src="images/Arrow 2.png" alt=""></a>
            <ul class="drop-down-content">
                <li><a href=""><img class="menu-arrow" src="images/Arrow.png" alt="">Digital Products</a></li>
                <li><a href=""><img class="menu-arrow" src="images/Arrow.png" alt="">Physical Products</a></li>
            </ul></li>
            <li><a href="{{ url('pages/affiliate') }}"><img class="menu-arrow" src="images/Arrow.png" alt="">Affiliates</a></li>
            <li><a href="{{ url('pages/creator') }}"><img class="menu-arrow" src="images/Arrow.png" alt="">Creators</a></li>
           </ul>
    </div>
</header>