<!-- Header
================================================== -->
<header class="transparent sticky-header">
    <div class="container">
        <div class="sixteen columns">
        
            <!-- Logo -->
            <div id="logo">
                <h1><a href="index-2.html"><img src="{{ asset('bower_components/bower-firstjob/frontend/images/logo2.png') }}" alt="Work Scout" /></a></h1>
            </div>
    
            <!-- Menu -->
            <nav id="navigation" class="menu">
                <ul id="responsive">
    
                    <li><a href="index-2.html" id="current">Home</a>
                        <ul>
                            <li><a href="index-2.html">Home #1</a></li>
                            <li><a href="index-3.html">Home #2</a></li>
                            <li><a href="index-4.html">Home #3</a></li>
                            <li><a href="index-5.html">Home #4</a></li>
                            <li><a href="index-6.html">Home #5</a></li>
                        </ul>
                    </li>
    
                    <li><a href="blog.html">Blog</a></li>
                </ul>
    
    
                <ul class="float-right">
                    <li><a href="{{ route('register') }}#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Log In</a></li>
                </ul>
    
            </nav>
    
            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
            </div>
    
        </div>
    </div>
</header>
<div class="clearfix"></div>