
<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <main>
        <div class="journey">
            <p class="the-journey">The journey of a <br> thousands mile to the land of wealth begins with a step</p>
            <a class="here" href="<?php echo e(route('register')); ?>">HERE</a>
        </div>
    
        <div class="journey1">
            <p class="the-journey1">The journey of a thousands mile to the land <br> of wealth begins with a step</p>
            <a class="here" href="<?php echo e(route('register')); ?>">HERE</a>  
        </div>
        
        <div class="image-container-desktop">
            <div class="image-container1">
                <img class="image12" src="/images/IMG-20221209-WA0000.jpg" alt="image">
            </div>
    
            <div class="who-we-are-desktop">
                <div class="who-we-are-container1">
                    <p class="who-we-are1">THIS IS WHO WE ARE</p>
                    <div class="bottom-border3"></div>
                </div>
                <div>
                    <p class="a-place1">
                        A PLACE TO FIND THE BETTER LIFE YOU HAVE BEEN DESIRE
                    </p>
            
                    <p class="pitch-message1">
                        It's highly risky to depend on one source of income in this harsh economy, and the most terrible thing that can happen to any human living in this economy is not making enough money that can help them survive the harshness economy of this economy. Which is where will enter the scene.<br><br>
            
                        We know that you won't be able to comfortably achieve a whole lot of things if there is no stable and consistent inflow of cash that can make th process easier, and that is the main reason we are here <br><br>
            
                        We are presenting to you an opportunity that will help you earn the amount money you have always desired by presenting to you a three-way opportunity to achieve that, you can choose one, and you can decide to  choose all three. The most important aspect of this opportunity is that, you are never left alone to figure things out yourself, you will be supplied with adequate knowledge that wil guide you to the path of that financial breakthrough. <br><br>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="image-container">
            <img class="image1" src="/images/IMG-20221209-WA0000.jpg" alt="image">
        </div>
    
        <div class="who-we-are-container">
            <p class="who-we-are">THIS IS WHO WE ARE</p>
            <div class="bottom-border"></div>
        </div>
    
        <p class="a-place">
            A PLACE TO FIND THE BETTER LIFE YOU HAVE BEEN DESIRE
        </p>
    
        <p class="pitch-message">
            It's highly risky to depend on one source of income in this harsh economy, and the most terrible thing that can happen to any human living in this economy is not making enough money that can help them survive the harshness economy of this economy. Which is where will enter the scene.<br><br>
    
            We know that you won't be able to comfortably achieve a whole lot of things if there is no stable and consistent inflow of cash that can make th process easier, and that is the main reason we are here <br><br>
    
            We are presenting to you an opportunity that will help you earn the amount money you have always desired by presenting to you a three-way opportunity to achieve that, you can choose one, and you can decide to  choose all three. The most important aspect of this opportunity is that, you are never left alone to figure things out yourself, you will be supplied with adequate knowledge that wil guide you to the path of that financial breakthrough. <br><br>
        </p>
    
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
                <a class="affiliate" href="<?php echo e(url('pages/affiliate')); ?>">AFFILIATE</a>
                <a class="affiliate-content" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
                We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
            </div>
            <div class="affiliate-container">
                <a class="affiliate" href="<?php echo e(url('pages/creator')); ?>">CREATOR</a>
                <a class="affiliate-content" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
                We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
            </div>
        </div>
    
        <div class="ways-to-earn-desktop">
            <div class="affiliate-container1">
                <a class="affiliate1" href="<?php echo e(url('pages/affiliate')); ?>">AFFILIATE</a>
                <a class="affiliate-content1" href="">It's no more doubt that one of the fastest ways to achieve financial goal is to launch into what other people has finished building. <br><br>
                We present you the opportunity to choose any product of your choice, promote it and get paid when there is a successful transaction</a>
            </div>
            <div class="affiliate-container2">
                <a class="affiliate2" href<?php echo e(url('pages/creator')); ?>CREATOR</a>
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
    
        <div class="benefit-container">
            <p>BENEFITS OF BEING PART OF US</p>
            <ul>
                <li>We offer 24/7 support to our members</li> <br>
                <li>Daily coaching on our telegram group and on our site</li> <br>
                <li>We also pay up to third level commission</li> <br>
                <li>Payment day usually Saturday and Sunday</li> <br>
                <li>No minimum withdrawal but we payout on request</li> 
            </ul>
        </div>
    
        <div class="benefit-container1">
            <p>BENEFITS OF BEING PART OF US</p>
            <ul>
                <li>We offer 24/7 support to our members</li> <br>
                <li>Daily coaching on our telegram group and on our site</li> <br>
                <li>We also pay up to third level commission</li> <br>
                <li>Payment day usually Saturday and Sunday</li> <br>
                <li>No minimum withdrawal but we payout on request</li> 
            </ul>
        </div>
        
        <div class="link-containers">
            <a class="visit-shop" href="<?php echo e(route('register')); ?>">GET STARTED NOW!</a>
        </div>
    
        <div class="link-containers1">
            <a class="visit-shop" href="<?php echo e(route('register')); ?>">GET STARTED NOW!</a>
        </div>
        
    </main>
    
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\xampp\aff\resources\views/welcome.blade.php ENDPATH**/ ?>