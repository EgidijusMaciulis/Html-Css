<!DOCTYPE html>
<html>
    <head>
        <title>Nike</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,700&amp;subset=latin-ext" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    </head>
        <body>
        <ul class="mobileMenu" id=mobileMenu>
            <li>FOOTWEAR</li>
            <li>CLOTHING</li>
            <li>ACCESSORIES</li>
            <li>BRANDS</li>
            <li>EXCLUSIVE</li>
        </ul>
        
        <header>
            <nav>
                <div class="leftSide">
                    <img class="logo" src="images/logo.jpg">
                    <ul>
                        <li class="active">FOOTWEAR</li>
                        <li>CLOTHING</li>
                        <li class="scroll">ACCESSORIES</li>
                        <li>
                            BRANDS
                            <div class="dropdown">
                                <div class="option">NIKE</div>
                                <div class="option">ADIDAS</div>
                                <div class="option">PUMA</div>
                                <div class="option">UMBRO</div>
                            </div>
                        </li>
                        <li>EXCLUSIVE</li>
                    </ul>
                </div>
                
                <div class="rightSide">
                    <ul>
                        <li>
                            <img class="icon" src="images/icon1.png"> SEARCH
                        </li>
                        <li>
                            <img class="icon cart" src="images/icon2.png"> CART 
                            <span class="cartSize">(2)</span>
                        </li>
                        <li>
                            <img class="icon" src="images/icon3.png"> SIGN IN
                        </li>
                    </ul>
                    <img class="sandwich" src="images/menu.svg" id="sandwich">
                </div>
                <div class="clearfix"></div>
                
            </nav>
            
            <div class="container">
                <img class="shoe" src="images/shoe.png">
                
                <div class="rightSide">
                    <div class="like">
                        <img src="images/heart.png">
                    </div>
                    
                    <h5>NIKE</h5>
                    <h4>AIR MAX TAVAS SD</h4>
                    <div class="price">$160.00</div>
                    <div class="colors">Colors - <span>Black/Pink Pow/Tour Yellow/White</span></div>
                    
                    <div class="box active">
                        <img src="images/shoe.png">
                    </div>
                    <div class="box">
                        <img src="images/shoe.png">
                    </div>
                    
                    <div class="size">Size charts</div>
                    
                    <select>
                        <option disabled>SIZE</option>
                        <option>40</option>
                        <option>41</option>
                        <option>43</option>
                    </select>
                    
                    <button>ADD TO CART</button>
                </div>
                
            </div>
        </header>
        
        <section class="feat1">
            <h5>CLASSIC CUSHIONING. MODERN COMFORT.</h5>
            <p>The Nike Air Max Tavas SD Men's Shoe recalls the profile of the iconic running original with a Max Air unit in the heel and multi-surface Waffle outsole. A lightweight upper and gradient detail offer a comfortable fit and dynamic look.</p>
        </section>
        
        <section class="feat2">
            <div class="third one">
                <div class="story">STORY</div>
                <h2>NIKE AIR MAX ORIGINS</h2>
                <p>Nike's revolutionary Air-Sole unit made its way into Nike footwear in the late '70s. In 1987, the Nike Air Max 1 debuted with visible air in its heel, allowing fans more than just the feel of Air-Sole comfort</p>
                
                <div class="benefits">BENEFITS</div>
                
                <h5>Layered textile/synthetic upper</h5>
                <h4>for lightweight durability and comfort</h4>
                <h5>Injected Phylon midsole doubles</h5>
                <h4>Outsole to reduce the overall weight of the shoe</h4>
                <h5>Max Air heel unit</h5>
                <h4>delivers maximum lightweight cushioning</h4>
                <h5>Rubber Waffle outsole</h5>
                <h4>Durable, multi-surface traction</h4>
            </div>
            
            <img src="images/shoes.png" class="third two">
            
            <div class="third three">
                <h3>NIKE</h3>
                <h4>Air max Tavas SD</h4>
                <div class="colors">Black/Pink Pow/Tour</div>
                <img class="shoe" src="images/shoe.png">
                <div class="leftPrice">EN STOCK</div>
                <div class="rightPrice">$160.00</div>
                <div class="clearfix"></div>
                <select>
                    <option disabled>SIZE</option>
                    <option>40</option>
                    <option>41</option>
                    <option>43</option>
                </select>

                <button>ADD TO CART</button>
            </div>
            
        </section>
        
        <div class="fotorama" data-nav="thumbs" data-width="80%">
            <img src="images/11.jpg">
            <img src="images/12.jpg">
            <img src="images/13.jpg">
        </div>
            
        <script src="script.js"></script>
    </body>
</html>













