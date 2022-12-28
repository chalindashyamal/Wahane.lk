<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="index.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap"
            rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer" />
        <title>Wahane</title>
        <script
            src="https://kit.fontawesome.com/20ccd3235c.js"
            crossorigin="anonymous"></script>
        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-E9679N0H6C"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-E9679N0H6C");
        </script>
    </head>
    <body id="top">
        <!-- Top Navbar -->
        <div id="topNav"></div>

        <!-- Mobile Navbar -->
        <div id="mobileNav"></div>

        <!-- Navbar Script -->
        <script src="/js/navbars.js"></script>

        <!--1 img sec-->
        <div class="container" id="container01">
            <div class="hero rellax" data-rellax-speed="5">
                <h1>Brand New Mk1 & Mk2</h1>
                <h3>Road, Track or Rally</h3>
                <h5>A true classic with a modern twist</h5>
            </div>
        </div>
        <!--2 img sec-->
        <div class="container" id="container02">
            <div class="hero rellax" data-rellax-speed="2.5">
                <h1>Brand New Mk1 & Mk2</h1>
                <h3>Road, Track or Rally</h3>
                <h5>A true classic with a modern twist</h5>
                <a href="/cars.html" class="btn">More Information</a>
            </div>
        </div>
        <!--3 img sec-->
        <div class="container" id="container05">
            <div class="hero rellax" data-rellax-speed="2.5">
                <h1>Brand New Mk1 & Mk2</h1>
                <h3>Road, Track or Rally</h3>
                <h5>A true classic with a modern twist</h5>
                <a href="/Classic.html" class="btn">More Information</a>
            </div>
        </div>
        <!--4 img sec-->
        <div class="container" id="container03">
            <div class="hero rellax" data-rellax-speed="1.25">
                <h1>Brand New Mk1 & Mk2</h1>
                <h3>Road, Track or Rally</h3>
                <h5>A true classic with a modern twist</h5>
                <a href="/Luxury.html" class="btn">More Information</a>
            </div>
        </div>
        <!--5 img sec-->
        <div class="container" id="contact">
            <div id="top">
                <div class="hero">
                    <h1>Brand New Mk1 & Mk2</h1>
                    <h3>Road, Track or Rally</h3>
                    <h5>A true classic with a modern twist</h5>
                </div>
                <div class="card">
                    <form action="submitForm.php" method="post">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            required
                            placeholder="Enter your Vehicle Model" />
                        <input
                            type="email"
                            name="email"
                            id="email"
                            required
                            placeholder="Enter your email" />
                        <input
                            type="text"
                            name="subject"
                            id="subject"
                            required
                            placeholder="What is this query about" />
                        <input
                            type="text"
                            name="message"
                            id="v"
                            required
                            placeholder="Enter your message" />
                        <input type="submit" id="submit-btn" />
                    </form>
                </div>
            </div>
            <div id="bottom">
                <div id="smcontainer">
                    <a href="#" target="_blank" title="facebook"
                        ><i class="fa-brands fa-facebook"></i
                    ></a>
                    <a href="#" target="_blank" title="email"
                        ><i class="fa-solid fa-envelope"></i
                    ></a>
                    <a href="#" target="_blank" title="instagram"
                        ><i class="fa-brands fa-instagram"></i
                    ></a>
                </div>
            </div>
        </div>

        <!-- footer -->
        <section class="footer">
            <div class="text">
                <h4>© Wahane.net | All Right Reserved 2022</h4>
            </div>
        </section>
        <!--scroll-container-->

        <div class="scroll-container">
            <a href="#top">
                <img src="./img/up.svg" />
            </a>
        </div>

        <!-- Added Rellax Library -->
        <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
        <script>
            // Accepts any class name
            var rellax = new Rellax(".rellax");
        </script>
    </body>
</html>