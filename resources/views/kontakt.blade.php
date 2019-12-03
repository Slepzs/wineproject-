@extends('layouts.app')


@section('content')

    <!-- CONTACT US INFO -->
    <div class="contact-info-section">
        <div class="info-panel uk-container uk-container--padding">
            <h3>Contact info</h3>
            <h1>Wine CluB (name)</h1>
            <p>Wine Club</p>
            <p>Address / streetname</p>
            <p>2300 København S</p>
            <p><span>Email:</span> <a href="#">wineclub@business.com</a></p>
            <p><span>Telephone:</span> <a href="#">+45 00 00 02 00</a></p>
        </div>
    </div>

    <!-- CONTACT FORM-->
    <div class="contact-us-section">
        <div class="contact-panel uk-container uk-container--padding">
            <div class="info">
                <h2>Contact us</h2>
                <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus.</p>
            </div>

            <form class="contact-form">
                <div class="left-contact-panel">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Name</label>
                        <div class="uk-inline uk-width-expand">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-inline uk-width-expand">
                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                            <input class="uk-input" type="email" placeholder="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Subject</label>
                        <div class="uk-inline uk-width-expand">
                            <span class="uk-form-icon" uk-icon="icon: tag"></span>
                            <input class="uk-input" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="right-contact-panel">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Message</label>
                        <div class="uk-inline uk-width-expand">
                            <span class="uk-form-icon" uk-icon="icon: comment"></span>
                            <textarea class="uk-textarea" rows="5" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="uk-margin" uk-margin>
                        <button class="uk-button uk-button-default primary-btn">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- End of content -->
@endsection
