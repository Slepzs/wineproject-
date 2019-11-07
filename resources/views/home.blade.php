@extends('layouts.app')


@section('content')

   <!-- Header Hero -->
   <div class="hero-section uk-margin">
       <div class="hero-content uk-container">
           <h1>WineClub tagline</h1>
           <h2>Sub tagline</h2>
           <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus.</p>
       </div>
       <div class="hero-image uk-cover-container">
           <img src="/images/wineclub-hero.jpg" alt="Wine club hero" uk-cover>
       </div>
   </div>

   <!-- Introduction -->
   <div class="intro-section uk-margin">
       <div class="uk-container">
           <div class="">
               <h2>Koncept Headline</h2>
               <p class="hightlight">Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
           <div class="">
               <div class="wine-icon"></div>
               <h3>Koncept sub-headline</h3>
               <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
           <div class="">
               <div class="wine-icon"></div>
               <h3>Koncept sub-headline</h3>
               <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
           </div>
           <div class="">
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
   <div class="topwine-section uk-margin">
       <div class="uk-container">
           <h2>Månedens vin</h2>
           <div class="wine">
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

                       <div class="wine-image">
                           <img src="/images/wineclub-hero.jpg" alt="Top wine">
                       </div>
                   </div>
           </div>
       </div>
   </div>

   <!-- CTA -->
   <div class="cta-section uk-margin">
       <div class="cta-bg">
           <h2>Tilmeld dig vores Vin Klub</h2>
           <div class="primary-btn">
               <a href="#">Tilmeld</a>
           </div>
       </div>
   </div>

   <!-- EVENT -->
   <div class="event-section uk-margin" uk-slider>
       <!--<h2>Kommende events</h2>-->



           <div class="uk-slider-container">
               <ul class="uk-slider-items uk-child-width-1-1">
                   <li>
                       <div class="uk-card uk-card-default">
                           <div class="uk-card-media-top">
                               <img src="/images/wineclub-hero.jpg" alt="">
                           </div>
                           <div class="uk-card-body">
                               <h3 class="uk-card-title">Headline</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                           </div>
                       </div>
                   </li>

               </ul>
           </div>

       <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>



       <!--<div class="event-card">
           <img src="" alt="">
           <h3>Event headline</h3>
           <div class="event-desc">
               <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus.</p>
           </div>
           <div class="primary-btn">
               <a href="#">Læs mere</a>
           </div>
       </div>
       <div class="primary-btn">
           <a href="#">Se alle events</a>
       </div>-->
   </div>

@endsection
