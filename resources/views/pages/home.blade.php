
<x-app-layout>

<main>

    <div style="padding:20px;margin:20px;color:#fff;font-size:30px">
        <div class="user-name-content">
            <p>Welcome, <span>{{ Auth::user()->firstname }}</span></p>
        </div>
    </div>




    <br>
        <br>

    <div class="how-to-earn-container">
        <p class="how-to-earn">HOW TO EARN WITH US</p>
        <div class="bottom-border2"></div>
    </div>

    <div class="how-to-earn-container1">
        <p class="how-to-earn1">HOW TO EARN WITH US</p>
        <div class="bottom-border4"></div>
    </div>

    <div class="ways-to-earn">
        <div class="affiliate-container">
            <a class="affiliate" href="{{ url('pages/affiliate') }}">AFFILIATE</a>
            <a class="affiliate-content" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
            We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
        </div>
        <div class="affiliate-container">
            <a class="affiliate" href="{{ url('pages/creator') }}">CREATOR</a>
            <a class="affiliate-content" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
            We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
        </div>
    </div>

    <div class="ways-to-earn-desktop">
        <div class="affiliate-container1">
            <a class="affiliate1" href="{{ url('pages/affiliate') }}">AFFILIATE</a>
            <a class="affiliate-content1" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
            We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
        </div>
        <div class="affiliate-container2">
            <a class="affiliate2" href{{ url('pages/creator') }}CREATOR</a>
            <a class="affiliate-content2" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
            We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
        </div>
    </div>

    
    <div class="recent-product-container">
        <div class="guide-line"></div>
        <p>OUR RECENT PRODUCTS</p>
        <div class="guide-line"></div>
    </div>

    <div class="recent-product-container-desktop">
        <div class="guide-line1"></div>
        <p>OUR RECENT PRODUCTS</p>
        <div class="guide-line1"></div>
    </div>

    <div class="products-pics-container">
        <div class="im-container">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="pic">
        </div>
        <div class="im-container">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="pic">
        </div>
        
        
    </div>

    <div class="products-pics-container-desktop">
        <div class="im-container1">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="pic">
        </div>
        <div class="image-container2">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="">
            <img class="product-image" src="/images/IMG-20221209-WA0000.jpg" alt="pic">
        </div>
        
        
    </div>

    <div class="link-containers">
        <a class="visit-shop" href="">CLICK TO VIEW OUR PRODUCTS>>></a>
    </div>

    <div class="link-containers1">
        <a class="visit-shop" href="">CLICK TO VIEW OUR PRODUCTS >>></a>
    </div>

    
    <div class="link-containers">
        <a class="visit-shop" href="{{ url('pages/affiliate') }}">Become an Affiliate</a>
    </div>
    <div class="link-containers1">
        <a class="visit-shop" href="{{ url('pages/affiliate') }}">Become an Affiliate</a>
    </div>

    <div class="link-containers">
        <a class="visit-shop" href="{{ url('pages/creator') }}">Become a Creator</a>
    </div>
    <div class="link-containers1">
        <a class="visit-shop" href="{{ url('pages/creator') }}">Become a Creator</a>
    </div>
    
    
</main>

</x-app-layout>