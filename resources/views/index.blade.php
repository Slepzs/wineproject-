@extends('layouts.app')


@section('content')

   <!-- Header Hero -->
   <div class="hero-section">
       <div class="hero-image"></div>
       <div class="hero-content uk-container uk-container--expand">
           <h1>Community</h1>
           <h2>for wine lovers</h2>
           <p>Wine club connects you to a world of wine lovers and lets you start your own personalized wine club</p>
       </div>
   </div>




   <!-- Introduction -->
   <div class="intro-section">
       <div class="main-intro-panel uk-container uk-container--padding">
           <div class="intro-panel">
               <h2>How it works</h2>
               <p class="hightlight">We have gathered a large amount of different wine labels for you to explore. Take part of as many different wine clubs you like or create your own and build a community for your fellow wine-lover-friends, family, group societies or organizations.
                   <br/><br/>
                   Wine Club lets you explore and share your passion for wine by making rating events within your wine club. Our membership is totally free of charge - The only thing you have to pay for yourself is the wine.
               </p>
           </div>
       </div>
       <div class="sub-intro-panel">
           <div class="uk-container uk-container--padding">
               <div class="intro-panel intro-panel--one">
                   <div class="wine-icon"></div>
                   <h3>Create or join your own club</h3>
                   <p>Start by signing up to Wine Club and create your own personalized club or take part of and join others club.
                       Personalize the club to your preferences by choosing which kind of wine type that describes your specific club.
                   </p>
               </div>
               <div class="intro-panel intro-panel--two">
                   <div class="wine-icon"></div>
                   <h3>Rate wines with your club members</h3>
                   <p>Build your community with your friends, family or co-workers. Come together, enjoy different kind of wine types and rate them.
                       Or look up future wines to drink and taste for your next wine club meeting.
                   </p>
               </div>
               <div class="intro-panel intro-panel--three">
                   <div class="wine-icon"></div>
                   <h3>Join events!</h3>
                   <p>View our event page to see future wine tastings.</p>
               </div>
           </div>
       </div>
   </div>


   @include('partials/monthly')

   <!-- CTA -->
   <div class="cta-section">
       <div class="cta-bg uk-container uk-container--padding">
           <h2>Sign up and<br/>create your own wine club</h2>
           <div class="primary-btn primary-btn--center">
               <a href="#">Your wine club</a>
           </div>
       </div>
   </div>

   <!-- EVENT -->
   <div class="event-section uk-container uk-container--padding">
       <h2>Upcomming events</h2>

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
                                   <a href="#">Read more</a>
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
                                   <a href="#">Read more</a>
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
                                   <a href="#">Read more</a>
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
                                   <a href="#">Read more</a>
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
                                   <a href="#">Read more</a>
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
           <a href="#">See all of our events</a>
       </div>
   </div>

<!-- End of content -->
@endsection
