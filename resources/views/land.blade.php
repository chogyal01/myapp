<html>
    <head>
        <title>my landing page</title>
        
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head> 
    <body>
        <div class="container">
            <div class="navbar">
                <img src="{{ asset('image/jnec.png') }}" class="logo">
                <nav>
                    <ul>
                        <li><a href="">home</a></li>
                        <li><a href="">about</a></li>
                        <li><a href="">contact</a></li>
                        <li><a href="">collecton</a></li>
                    </ul>
                </nav>
                <img src="{{ asset('image/cart.png') }}" class="cart">
                <button type="button">sign up</button>
            </div>
                <div class="content">
                    <a href="" class="btn">@2021 collection</a>
                    <h1>why you are the <br> best</h1>
                    <p>the people around can do nothing to change you.</p>
                </div>
                <div class="arrow-icons">
                    <img src="{{ asset('image/back-arrow.png') }}" >
                    <img src="{{ asset('image/next-arrow.png') }}" >
                   

                </div>
                <img src="image/img.png" class="feature">
            <div class="bubble">
                <img src="image/bubble.png" >
                <img src="image/bubble.png" >
                <img src="image/bubble.png" >
                <img src="image/bubble.png" >
                <img src="image/bubble.png" >
                <img src="image/bubble.png" >
                <img src="image/bubble.png" >
            </div>
        </div>
    </body>
</html>