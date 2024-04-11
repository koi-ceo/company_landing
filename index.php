<?php
include_once('./_common.php');
include_once "./head.php";
?>
    <div id="fullpage">
        <section class="hero is-halfheight is-flex is-align-items-center is-justify-content-center" id="section1">
            <div class="hero-head">
                <div class="container has-text-centered">
                    <h2 class="title">Your Title Here</h2>
                    <p class="subtitle">Your subtitle here</p>
                </div>
            </div>
        </section>
        <section class="hero is-halfheight is-flex is-align-items-center is-justify-content-center" id="section2">
            <div class="hero-head">
                <div class="container has-text-centered">
                    <h2 class="title">Your Title Here</h2>
                    <p class="subtitle">Your subtitle here</p>
                </div>
            </div>
        </section>
        <section class="hero is-halfheight is-flex is-align-items-center is-justify-content-center" id="section3">
            <div class="hero-head">
                <div class="container has-text-centered">
                    <h2 class="title">Your Title Here</h2>
                    <p class="subtitle">Your subtitle here</p>
                </div>
            </div>
        </section>
        <section class="hero is-halfheight is-flex is-align-items-center is-justify-content-center" id="section4">
            <div class="hero-head">
                <div class="container has-text-centered">
                    <h2 class="title">Your Title Here</h2>
                    <p class="subtitle">Your subtitle here</p>
                </div>
            </div>
        </section>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/onepage-scroll/1.3.1/jquery.onepage-scroll.min.js"></script>
    <script>
        $("#fullpage").onepage_scroll({
            sectionContainer: "section",
            responsiveFallback: 600,
            loop: true
        });
    </script>
    </script>
<?php
include_once "./tail.php";
?>