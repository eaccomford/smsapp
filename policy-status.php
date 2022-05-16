<?php include('includes/head.php') ?>


<section class="tm-margin-large-top">
    <div class="uk-container">

        <h1 class="uk-margin-medium-bottom uk-heading-hero">Check Policy Status</h1>

        <hr class="uk-margin-remove">
        <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center" data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80">

            <h3>Enter Policy Status</h3>
        </div>
        <div class="uk-margin-large-bottom">
            <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Name</label>
            <div class="uk-form-controls" style="display: flex;">
                <input class="uk-input uk-form-large tm-form-xlarge uk-border-rounded" id="form-name" type="text" placeholder="Enter status code" style="width:80%">
                <a class="tm-button tm-button-xlarge" href="#" onclick="$('#statusCode').toggle()" style="padding-top:.5rem">Check</a>
            </div>
        </div>

        <div id="statusCode" style="display:none; padding: 1rem; background: #2196f3; box-shadow: 2px 10px 20px #2183dd; margin-top: 1rem; text-align:center">
            <h5>Policy Status</h5>
            Your Insurance policy is 38393992929 <br>
            your are not supposed to be here <br>
            your are not supposed to be here <br>
            your are not supposed to be here <br>
            your are not supposed to be here <br>
            your are not supposed to be here <br>
            your are not supposed to be here <br>
            <h5>Welcome hahah</h5>
        </div>


    </div>
</section>

<div class="uk-margin-large-top uk-section-primary">
    <div class="uk-container">
        <hr class="uk-margin-remove">
        <div class="uk-grid-large uk-flex-middle uk-margin-xlarge-top uk-margin-xlarge-bottom" data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <div class="uk-width-auto@m">
                <p class="uk-text-large">Didn't find an answer to your question?</p>
            </div>
            <div class="uk-width-expand@m">
                <a class="tm-button tm-button-xlarge" href="contact.html">Contact Us</a>
            </div>
        </div>
    </div>
</div>


<footer class="uk-section tm-primary-color-dark uk-light uk-text-center">
    <div class="uk-container">

        <div>
            <ul class="uk-subnav uk-flex-center">
                <li class="uk-first-column"><a href="support.html">Support</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="changelog.html">Changelog</a></li>
                <li><a href="download.html">Download</a></li>
            </ul>
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
                    <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"></a>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium tm-text-xsmall uk-text-meta copyright">Made by <a href="https://unbound.studio/">Unbound Studio</a> in Basel, Switzerland.</div>

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


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>

</html>