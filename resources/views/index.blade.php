@extends('layouts.app')


@section('content')

   <!-- Header Hero -->
   <div class="hero-section">
       <div class="hero-image">
           <img src="/images/wineclub-hero.jpg" alt="Wine club hero">
       </div>
       <div class="hero-content uk-container uk-container--padding">
           <h1>Wine Club</h1>
           <h2>Sub tagline</h2>
           <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus.</p>
       </div>
   </div>


   <!-- Introduction -->
   <div class="intro-section">
       <div class="main-intro-panel uk-container uk-container--padding">
           <div class="intro-panel">
               <h2>Koncept Headline</h2>
               <p class="hightlight">Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
       </div>
       <div class="sub-intro-panel uk-container uk-container--padding">
           <div class="intro-panel">
               <div class="wine-icon"></div>
               <h3>Koncept sub-headline</h3>
               <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
           <div class="intro-panel">
               <div class="wine-icon"></div>
               <h3>Koncept sub-headline</h3>
               <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
           <div class="intro-panel">
               <div class="wine-icon"></div>
               <h3>Koncept sub-headline</h3>
               <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
       </div>
   </div>

    <!-- Seperator -->
    <div class="seperator-section">
        <div class="image-bg"></div>
        <!--<img class="" src="/images/wineclub-hero.jpg" alt="">-->
    </div>

   <!-- Monthly wine -->
   <div class="topwine-section">
       <div class="uk-container uk-container--padding">
           <h2>Månedens vin</h2>
           <div class="wine-panel">
               <h3>Vin-titel. Sherwood, Stone Range</h3>

                   <div class="wine-info">
                       <div class="info-box">
                           <span class="wine-title">Region</span>
                           <p class="region">New Zealand</p>
                           <span class="wine-title">Wine Grape(s)</span>
                           <p class="grapes">Pinot Noir</p>
                           <span class="wine-title">År</span>
                           <p class="year">2018</p>
                           <div class="wine-type">
                               <span class="wine-title">Type</span>
                               <div class="type"></div>
                           </div>
                       </div>

                       <div class="rating-sum">
                           <p class="rating">3.24</p>
                           <span class="wine-title">Rate the wine</span>
                           <div class="rating-btn">
                               <div class="rating-star"></div>
                               <div class="rating-star"></div>
                               <div class="rating-star"></div>
                               <div class="rating-star"></div>
                               <div class="rating-star"></div>
                           </div>
                       </div>

                       <div class="desc">
                           <p class="description">Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus.</p>
                       </div>
                   </div>
           </div>
           <div class="wine-image-panel">
               <img src="/images/wineclub-hero.jpg" alt="Top wine">
           </div>
       </div>
   </div>

   <!-- CTA -->
   <div class="cta-section">
       <div class="cta-bg uk-container uk-container--padding">
           <h2>Tilmeld dig vores Vin Klub</h2>
           <div class="primary-btn">
               <a href="#">Tilmeld</a>
           </div>
       </div>
   </div>

   <!-- EVENT -->
   <div class="event-section uk-container uk-container--padding">
       <h2>Kommende events</h2>

       <div uk-slider="center: true">
           <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
               <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                   <li>
                       <div class="uk-card uk-card-default">
                           <div class="uk-card-media-top">
                               <img src="/images/wineclub-hero.jpg" alt="">
                           </div>
                           <div class="uk-card-body">
                               <h3 class="uk-card-title">Headline</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                               <div class="primary-btn">
                                   <a href="#">Læs mere</a>
                               </div>
                           </div>
                       </div>
                   </li>
                   <li>
                       <div class="uk-card uk-card-default">
                           <div class="uk-card-media-top">
                               <img src="/images/wineclub-hero.jpg" alt="">
                           </div>
                           <div class="uk-card-body">
                               <h3 class="uk-card-title">Headline</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                               <div class="primary-btn">
                                   <a href="#">Læs mere</a>
                               </div>
                           </div>
                       </div>
                   </li>
                   <li>
                       <div class="uk-card uk-card-default">
                           <div class="uk-card-media-top">
                               <img src="/images/wineclub-hero.jpg" alt="">
                           </div>
                           <div class="uk-card-body">
                               <h3 class="uk-card-title">Headline</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                               <div class="primary-btn">
                                   <a href="#">Læs mere</a>
                               </div>
                           </div>
                       </div>
                   </li>
                   <li>
                       <div class="uk-card uk-card-default">
                           <div class="uk-card-media-top">
                               <img src="/images/wineclub-hero.jpg" alt="">
                           </div>
                           <div class="uk-card-body">
                               <h3 class="uk-card-title">Headline</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                               <div class="primary-btn">
                                   <a href="#">Læs mere</a>
                               </div>
                           </div>
                       </div>
                   </li>
               </ul>
               <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
               <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
           </div>
           <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
       </div>

       <div class="primary-btn">
           <a href="#">Se alle vores events</a>
       </div>
   </div>

<!-- End of content -->
@endsection
