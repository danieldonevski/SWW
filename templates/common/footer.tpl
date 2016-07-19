<div class="footer-container">

<footer class="details">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img alt="logo" class="logo" src="/css/img/logo-dark.png">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </p>
            </div>

            <div class="col-sm-4">
                <h1>Contact</h1>
                <p>
                    hello@pivot.net<br>
                    +61 3827 9284<br>
                    <br>
                    Suite 2A Humbolt Plaza<br>
                    300 Collins St<br>
                    Melbourne 3000
                </p>
            </div>

            <div class="col-sm-4">
                <h1>Social Profiles</h1>
                <ul class="social-icons">
                    <li>
                        <a href="#">
                            <i class="icon social_twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_dribbble"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_tumblr"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <span class="sub">© Copright 2014 <a href="#">Medium Rare</a> - All Rights Reserved</span>
            </div>
        </div>

    </div>
</footer>
</div>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="/css//js/jquery.min.js"></script>
<script src="/css//js/jquery.plugin.min.js"></script>
<script src="/css//js/bootstrap.min.js"></script>
<script src="/css//js/jquery.flexslider-min.js"></script>
<script src="/css//js/smooth-scroll.min.js"></script>
<script src="/css//js/skrollr.min.js"></script>
<script src="/css//js/spectragram.min.js"></script>
<script src="/css//js/scrollReveal.min.js"></script>
<script src="/css//js/isotope.min.js"></script>
<script src="/css//js/twitterFetcher_v10_min.js"></script>
<script src="/css//js/lightbox.min.js"></script>
<script src="/css//js/jquery.countdown.min.js"></script>
<script src="/css//js/scripts.js"></script>
{% for js in javascript %}
<script src="{{js}}"></script>
{% endfor %}

</body>
</html>
