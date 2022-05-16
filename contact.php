<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Minimal Knowledge Base and Faq HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800%7CWork+Sans:200,300%7CJosefin+Sans:100" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/uikit.min.js" defer></script>
    <script src="js/uikit-icons.min.js" defer></script>
</head>

<body class="uk-background-primary uk-light">


    <div data-uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">

        <nav class="uk-navbar-container uk-margin uk-light">
            <div class="uk-container">
                <div data-uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo uk-text-small" href="index.html">MINIMAL</a>
                    </div>
                    <div class="uk-navbar-center uk-visible@m">

                        <ul class="uk-navbar-nav">
                            <li ><a href="index.html">Support</a></li>
                            <li ><a href="faq.html">Faq</a></li>
                            <li ><a href="changelog.html">Changelog</a></li>
                            <li ><a href="download.html">Download</a></li>
                            <li class="uk-active"><a href="contact.html">Contact</a></li>
                        </ul>

                    </div>
                    <div class="uk-navbar-right">
                        <a class="uk-navbar-toggle " href="#search" data-uk-search-icon data-uk-toggle></a>
                        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-navbar-toggle-icon data-uk-toggle></a>
                    </div>
                </div>
            </div>
        </nav>

    </div>


<section class="tm-margin-large-top">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center">
            <h1 class="uk-margin-medium-bottom uk-heading-hero">Contact Us</h1>
            <p class="tm-subtitle">Support is provided Mon - Fri, we aim to reply within 1 business day, but occasionally it may take longer.</p>
        </div>

        <form class="uk-form-stacked uk-margin-xlarge-top uk-margin-xlarge-bottom tm-form-contact">
            <div class="uk-margin-large-bottom">
                <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-large tm-form-xlarge uk-border-rounded" id="form-name" type="text" placeholder="Enter your name">
                </div>
            </div>
            <div class="uk-margin-large-bottom">
                <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-large tm-form-xlarge uk-border-rounded" id="form-email" type="email" placeholder="Enter your email">
                </div>
            </div>
            <div class="uk-margin-large-bottom">
                <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Subject</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-large tm-form-xlarge uk-border-rounded" id="form-subject" type="text" placeholder="Enter your subject">
                </div>
            </div>

            <div class="uk-margin-large-bottom">
                <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Attachment</label>
                <div class="js-upload uk-placeholder uk-text-center uk-margin-remove uk-border-rounded">
                    <span data-uk-icon="icon: cloud-upload"></span>
                    <span class="uk-text-middle">Attach files by dropping them here or</span>
                    <div data-uk-form-custom>
                        <input type="file" multiple>
                        <span class="uk-link">selecting one</span>
                    </div>
                </div>

                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                <script>
                    var bar = document.getElementById('js-progressbar');

                    UIkit.upload('.js-upload', {

                        url: '',
                        multiple: true,

                        beforeSend: function() {
                            console.log('beforeSend', arguments);
                        },
                        beforeAll: function() {
                            console.log('beforeAll', arguments);
                        },
                        load: function() {
                            console.log('load', arguments);
                        },
                        error: function() {
                            console.log('error', arguments);
                        },
                        complete: function() {
                            console.log('complete', arguments);
                        },

                        loadStart: function(e) {
                            console.log('loadStart', arguments);

                            bar.removeAttribute('hidden');
                            bar.max = e.total;
                            bar.value = e.loaded;
                        },

                        progress: function(e) {
                            console.log('progress', arguments);

                            bar.max = e.total;
                            bar.value = e.loaded;
                        },

                        loadEnd: function(e) {
                            console.log('loadEnd', arguments);

                            bar.max = e.total;
                            bar.value = e.loaded;
                        },

                        completeAll: function() {
                            console.log('completeAll', arguments);

                            setTimeout(function() {
                                bar.setAttribute('hidden', 'hidden');
                            }, 1000);

                            //alert('Upload Completed');
                        }

                    });
                </script>
            </div>

            <div class="uk-margin-large-bottom">
                <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Message</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea uk-form-large tm-form-xlarge uk-border-rounded" id="form-textarea" placeholder="Enter your message"></textarea>
                </div>
            </div>
            <div class="uk-text-center">
                <input class="tm-button tm-button-xlarge" id="form-submit" type="submit" name="send" value="Send">
            </div>
        </form>

    </div>
</section>

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
            <li ><a href="faq.html">Faq</a></li>
            <li ><a href="changelog.html">Changelog</a></li>
            <li ><a href="download.html">Download</a></li>
            <li class="uk-active"><a href="contact.html">Contact</a></li>
        </ul>

    </div>
</div>


</body>

</html>
