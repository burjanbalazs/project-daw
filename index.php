<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering UI Design</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/style.css?3">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="js/app.js"></script>
</head>

<body>
    <div class="nav-bar">
        <div class="logo">
            <a href="#">mastering ui design</a>
        </div>
        <div class="nav-about">
            <a href="#" id="about">About</a>
        </div>
        <div class="nav-chapters">
            <a href="#" id="chapters">Chapters</a>
        </div>
        <div class="nav-author">
            <a href="#" id="author">Author</a>
        </div>
        <div class="buy">
            <a href="login.php">Buy a copy</a>
        </div>
    </div>
    <div class="landing">
        <div class="landing-left">
            <img src="img/book.jpg">
        </div>
        <div class="landing-right">
            <div class="landing-title">
                <h1>Mastering UI Design</h1>
            </div>
            <div class="landing-author">
                <p>By Henry Reyes</p>
                <br>
            </div>
            <div class="landing-lorem">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <p>Sint quos molestias reprehenderit.</p>
                    <p>Sint fuga cumque vel numquam quo hic reprehenderit mollitia aliquam </p>
                    <p>laudantium quia, voluptatem aperiam aut? Id, tempore?</p>
                </p>
                <br>
            </div>
            <div class="landing-buy">
                <h4>Get the first chapter free or,</h4>
                <a href="login.php" class="btn-buy">Buy a copy</a>
            </div>
        </div>
    </div>
    <div class="logos">
        <div class="verge">
            <img src="img/the-verge.JPG">
        </div>
        <div class="blacka">
            <img src="img/a.JPG">
        </div>
        <div class="creative-bloq">
            <img src="img/creative.JPG">
        </div>
        <div class="tnw">
            <img src="img/tnw.JPG">
        </div>
        <div class="creative-market">
            <img src="img/creative-market.JPG">
        </div>
    </div>
    <div class="about" id="#about">
        <div class="about-left">
            <h1>About the book</h1>
            <i>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do euiusmod tempor incididunt."</p>
                <p>-</p>
                <h4>Net Magazine</h4>
            </i>
            <img src="img/quote.JPG">
            <br><br><br>
            <p class="asd">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <p class="asd"> Inventore hic minima magnam quisquam, harum repellendus</p>
            <p class="asd"> beatae blanditiis reiciendis, ullam autem sint? Sit dolores</p>
            <p class="asd"> incidunt architecto aliquid facere, sed quo totam!</p>
            <br>
            <p class="asd">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <p class="asd"> Inventore hic minima magnam quisquam, harum repellendus</p>
            <p class="asd"> beatae blanditiis reiciendis, ullam autem sint? Sit dolores</p>
            <p class="asd"> incidunt architecto aliquid facere, sed quo totam!</p>
        </div>
        <div class="about-right">
            <img src="img/tablet.JPG">
        </div>
    </div>
    <div class="chapters">
        <div class="filler">
        </div>
        <div class="chapter-title">
            <h1>Chapters</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="filler">
        </div>
        <div class="chapter1">
            <h2>Visual Hierarchy</h2>
            Chapter 1
            <p class="hide1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="chapter2">
            <h2>Color Theory</h2>
            Chapter 2
            <p class="hide2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="chapter3">
            <h2>Typography</h2>
            Chapter 3
            <p class="hide3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="chapter4">
            <h2>Texture</h2>
            Chapter 4
            <p class="hide4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="chapter5">
            <h2>Imagery</h2>
            Chapter 5
            <p class="hide5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="chapter6">
            <h2>White Space</h2>
            Chapter 6
            <p class="hide6">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
    </div>
    <div class="author" id="author">
        <div class="author-pic"><img src="img/author-pic.JPG"></div>
        <div class="about-me">
            <p class="author-name">Henry Reyes</p>
            <p class="author-subtitle">Best Selling author of another book</p>
            <p class="author-about-me">A little about me</p>
            <p class="lorem">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptate, error obcaecati esse deserunt illo assumenda commodi veniam, adipisci beatae repudiandae aliquid culpa reiciendis cum eum nobis enim, ipsa similique.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam repellendus commodi sed velit voluptates fuga rerum temporibus minima, blanditiis illo est officiis dolores? Reiciendis ipsa nostrum optio deleniti eaque!
            </p>
        </div>
        <div class="why">
            <p class="author-why">
                Why did i write this book?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ab sit necessitatibus harum delectus iusto quasi velit minima deserunt quod voluptate et hic, nihil eaque, perspiciatis quia? Architecto, ex ullam?</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat illo qui nobis sequi repellat iure maxime eveniet ea voluptatum nam laborum, harum ipsa! Praesentium optio laboriosam ex minus blanditiis?</p>
        </div>
        <div class="empty"></div>
    </div>
    <div class="ready">
        <div class="empty"></div>
        <div class="footer-ready">
            <h1>Ready to buy the book?</h1>
            <p class="ready-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <br>
            <br>
            <a href="login.php" class="btn-buy">Buy a copy</a>
        </div>
        <div class="empty"></div>
    </div>
    <div class="footer">
        <div class="master">Ⓒ Mastering UI Design: The book, 2016</div>
        <div class="privacy">Privacy</div>
        <div class="terms">Terms of Use</div>
        <div class="links">
            <img src="img/footer-links.JPG"> </div>
    </div>
</body>

</html>
