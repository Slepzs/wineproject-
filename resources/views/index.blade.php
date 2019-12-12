@extends('layouts.app')


@section('content')

   <!-- Header Hero -->
   <div class="hero-section">
       <div class="hero-image"></div>
       <div class="hero-content uk-container uk-container--expand">
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
       <div class="sub-intro-panel">
           <div class="uk-container uk-container--padding">
               <div class="intro-panel intro-panel--one">
                   <div class="wine-icon"></div>
                   <h3>Koncept sub-headline</h3>
                   <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
               </div>
               <div class="intro-panel intro-panel--two">
                   <div class="wine-icon"></div>
                   <h3>Koncept sub-headline</h3>
                   <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
               </div>
               <div class="intro-panel intro-panel--three">
                   <div class="wine-icon"></div>
                   <h3>Koncept sub-headline</h3>
                   <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
               </div>
           </div>
       </div>
   </div>


   @include('partials/monthly')

   <!-- CTA -->
   <div class="cta-section">
       <div class="cta-bg uk-container uk-container--padding">
           <h2>Tilmeld dig og<br/>opret din egen Vin Klub</h2>
           <div class="primary-btn primary-btn--center">
               <a href="#">Din Vin Klub</a>
           </div>
       </div>
   </div>

   <!-- EVENT -->
   <div class="event-section uk-container uk-container--padding">
       <h2>Kommende events</h2>

       <div uk-slider="center: true">
           <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
               <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
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

       <div class="primary-btn primary-btn--center">
           <a href="#">Se alle vores events</a>
       </div>
   </div>

<!-- End of content -->
@endsection
