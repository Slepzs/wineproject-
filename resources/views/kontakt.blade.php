@extends('layouts.app')


@section('content')

    <!-- CONTACT US INFO -->
    <div class="contact-info-section">
        <div class="info-panel uk-container uk-container--padding">
            <h3>Kontakt info</h3>
            <h1>Vin Klub (navn)</h1>
            <p>Wine Club</p>
            <p>Adresse / vejnavn</p>
            <p>2300 København S</p>
            <p><span>Email:</span> <a href="#">wineclub@business.com</a></p>
            <p><span>Telefon:</span> <a href="#">+45 00 00 02 00</a></p>
        </div>
    </div>

    <!-- CONTACT FORM-->
    <div class="contact-us-section">
        <div class="contact-panel uk-container uk-container--padding">
            <div class="info">
                <h2>Kontakt os</h2>
                <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus.</p>
            </div>

            <form class="contact-form">
                <div class="left-contact-panel">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Navn</label>
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
                        <label class="uk-form-label" for="form-stacked-text">Subjekt</label>
                        <div class="uk-inline uk-width-expand">
                            <span class="uk-form-icon" uk-icon="icon: tag"></span>
                            <input class="uk-input" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="right-contact-panel">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Besked</label>
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
