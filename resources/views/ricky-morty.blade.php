<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Rick & Morty</title>
    <link rel="shortcut icon" href="assets/img/rickMorty.jpg" type="image/x-icon" />
    <!-- CSS LOKALL -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- AOS JS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@200;300;400&display=swap" rel="stylesheet" />

</head>

<body>
    <header>
        <!-- Navbar -->
        <nav>
            <ul class="navbar-list">
                <li class="logo">
                    <a href="#">Rick & Morty</a>
                </li>
                <li class="toggle">
                    <img src="assets/img/icons8-linkedin-circled.svg" height="30" width="30" alt="Bars"/>
                </li>

                <!---->
                <li class="navbar-item">
                    <a href="#" class="navbar-link">Explore</a>
                </li>
                <li class="navbar-item">
                    <a href="https://rickandmorty-api-jpl.netlify.app/index.html" class="navbar-link">Resources</a>
                </li>
                <li class="navbar-item">
                    <a href="#" class="navbar-button">Login</a>
                </li>
                <li class="navbar-item">
                    <a href="#" class="navbar-button">Sign Up</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <!-- Title -->
            <article>
                <section class="title">
                    <div class="title-container">
                        <div class="character">
                            <img src="assets/img/rickMorty.jpg" alt="RickMorty" class="character-img" />
                        </div>

                        <div class="big-heading">
                            <h1>Rick and Morty API</h1>
                            <p style="color: white">
                                The Rick and Morty API is a RESTful and GraphQL API based on
                                the television show Rick and Morty. You will have access to
                                about hundreds of characters, img, locations and episodes.
                            </p>
                            <button class="explore-button">
                                <a href="#">Explore</a>
                            </button>
                        </div>
                    </div>
                </section>
            </article>

            <!-- Collection -->
            <article>
                <section class="collection">
                    <marquee width="100%" direction="right" class="blink" scrollamount="50" behavior="scroll">
                        <h2>
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                            CHARACTERS CHARACTERS CHARACTERS CHARACTERS CHARACTERS
                        </h2>
                    </marquee>

                    <div class="collection-container">

                        <!-- KESATU -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="3000">
                            <div class="image-box">
                                <img src="assets/img/1_Rick_Sanchez.jpeg" alt="Rick Sanchez" width="50" height="50" />
                            </div>
                            <h3>Rick Sanchez</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KEDUA -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2500">
                            <div class="image-box">
                                <img src="assets/img/2_Morty_Smith.jpeg" alt="Morty Smith" />
                            </div>
                            <h3>Morty Smith</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KETIGA -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2000">
                            <div class="image-box">
                                <img src="assets/img/3_Summer_Smith.jpeg" alt="Summer Smith" />
                            </div>
                            <h3>Summer Smith</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KEEMPAT -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="1500">
                            <div class="image-box">
                                <img src="assets/img/4_Ben_Smith.jpeg" alt="Ben Smith" />
                            </div>
                            <h3>Ben Smith</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KELIMA -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="1000">
                            <div class="image-box">
                                <img src="assets/img/5_Jery_Smith.jpeg" alt="Jery Smith" />
                            </div>
                            <h3>Jery Smith</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KEENAM -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2500">
                            <div class="image-box">
                                <img src="assets/img/6_Abadango_Cluster_Princess.jpeg" alt="Abadango Cluster Princess" />
                            </div>
                            <h3>Abadango Cluster Princess</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Alien</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KETUJUH-->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2300">
                            <div class="image-box">
                                <img src="assets/img/7_Abradolf_Lincler.jpeg" alt="Abradolf Lincler" />
                            </div>
                            <h3>Abradolf Lincler</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KEDELAPAN -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2200">
                            <div class="image-box">
                                <img src="assets/img/8_Adjudicator_Rick.jpeg" alt="Adjudicator Rick" />
                            </div>
                            <h3>Adjudicator Rick</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KESEMBILAN -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2100">
                            <div class="image-box">
                                <img src="assets/img/9_Agency_Director.jpeg" alt="Agency Director" />
                            </div>
                            <h3>Agency Director</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>

                        <!-- KESEPULUH -->
                        <div class="collection-card" data-aos="fade-up" data-aos-duration="2000">
                            <div class="image-box">
                                <img src="assets/img/10_Agency_Director.jpeg" alt="Alan Rails" />
                            </div>
                            <h3>Alan Rails</h3>
                            <p class="species">Species</p>
                            <p class="tipe">Human</p>
                            <button class="card-button">Visit Character</button>
                        </div>
                    </div>
                    <a href="https://rickandmorty-api-jpl.netlify.app/index.html">View All Collection</a>
                </section>
            </article>
        </div>

        <aside>
            <article>
                <div class="biography-card">
                    <figure>
                        <img src="assets/img/profile.jpg" height="300" width="250" alt="Profile" class="profile-img" />
                    </figure>
                    <h3>Humam Muasyir</h3>
                    <div class="contact">
                        <a class="social-media" href="#"><img src="assets/img/icons8-github.svg" height="30" width="30" alt="Github" /></a>
                        <a class="social-media" href="#"><img src="assets/img/icons8-instagram.svg" height="30" width="30" alt="Instagram" /></a>
                        <a class="social-media" href="#"><img src="assets/img/icons8-linkedin-circled.svg" height="30" width="30" alt="LinkedIn" /></a>
                    </div>
                </div>
            </article>
        </aside>
    </main>

    <footer>
        <p>Dicoding &copy; 2022.</p>
    </footer>

    <!-- LOCAL JS -->
    <script src="assets/js/index.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>