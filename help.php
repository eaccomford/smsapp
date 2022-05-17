<?php include('includes/head.php') ?>




<section class="tm-margin-large-top" id="elementID">
    <div class="uk-container">

        <div id="canHide">
            <h1 class="uk-margin-medium-bottom uk-heading-hero">Help and Support</h1>
            <hr class="uk-margin-remove">

        </div>

        <div
            style="padding: 1rem; background: #fffx; box-shadow: 2px 10px 20px #2183dd; margin-top: 1rem; text-align:center; color: white">
            <h5 style="color: #fff; font-size:30px">Contact us on</h5>
            <div style="display: flex; flex-direction: column;justify-content: center; align-items: center"
                id="statusbox">
                <div
                    style="display: flex; justify-content: space-between; width: 80%;  xbackground: #ebebeb; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Email</b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="customername">info@stakcloud.com</b></div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 80%;  padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Contact Number</b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="contact_no">0240112912</b></div>
                </div>
                <div
                    style="display: flex; justify-content: space-between; width: 80%; xbackground: #ebebeb; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Website</b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="policynumber">www.stakcloud.com</b></div>
                </div>
            </div>
            <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
                style="display: flex; justify-content: center;">
                <div style="text-align:center;margin-bottom: 3rem" id="mainmenu">
                    <a href="index" class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                        <span class="uk-icon-forder uk-border-rounded"><span
                                data-uk-icon="icon: home; ratio: 2"></span></span>
                        <p>Return to Main Mainu</p>
                    </a>
                </div>
            </div>
        </div>


    </div>
</section>

<div class="uk-margin-large-top uk-section-primary">
    <div class="uk-container">
        <hr class="uk-margin-remove">
        <div class="uk-grid-large uk-flex-middle uk-margin-xlarge-top uk-margin-xlarge-bottom" data-uk-grid
            data-uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <!-- <div class="uk-width-auto@m">
                <p class="uk-text-large">Didn't find an answer to your question?</p>
            </div>
            <div class="uk-width-expand@m">
                <a class="tm-button tm-button-xlarge" href="contact.html">Contact Us</a>
            </div> -->
        </div>
    </div>
</div>


<footer class="uk-section tm-primary-color-dark uk-light uk-text-center">
    <div class="uk-container">

        <div>

        </div>
        <div class="uk-margin-medium">
            <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center uk-grid">
                <div class="uk-first-column">
                    <a href="https://github.com/" data-uk-icon="icon: github" class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/" data-uk-icon="icon: instagram"
                        class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"></a>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium tm-text-xsmall uk-text-meta copyright">Made by <a
                href="https://unbound.studio/">Unbound Studio</a> in Basel, Switzerland.</div>

    </div>
</footer>


<div id="search" class="uk-flex-top uk-background-primary uk-modal-search" data-uk-modal>

    <button class="uk-modal-close-full uk-close-large" type="button" data-uk-close></button>
    <div class="uk-modal-dialog uk-text-center uk-margin-auto-vertical uk-padding-large">

        <form class="uk-search uk-search-large uk-margin-auto">
            <input class="uk-search-input uk-text-center" type="search" placeholder="Search...">
        </form>

    </div>
</div>


<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" data-uk-close></button>

        <ul class="uk-nav uk-nav-default">
            <li class="uk-nav-header uk-logo">Minimal</li>
            <li class="uk-parent">
                <a href="index.html">Support</a>
                <ul class="uk-nav-sub">
                    <li><a href="index.html">Subnav</a></li>
                    <li><a href="index.html">Subnav</a></li>
                    <li><a href="index.html">Subnav</a></li>
                    <li><a href="index.html">Subnav</a></li>
                </ul>
            </li>
            <li><a href="faq.html">Faq</a></li>
            <li><a href="changelog.html">Changelog</a></li>
            <li><a href="download.html">Download</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="assets/jquery-3.3.1.min.js"></script>

</body>

</html>