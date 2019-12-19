@extends('layouts.app')


@section('content')

    <!-- ABOUT US -->
    <div class="about-us-section">
        <div class="uk-container uk-container--padding">
            <div class="image-panel">
            </div>
            <div class="info-panel">
                <h3>About us</h3>
                <h1>The Wine Club 41</h1>
                <p>The original Wine Club was founded by Anders Ravn back in 2017 at the Kampsax kitchen 41, hence then name Wine club 41.
                    The original concept was: "Come together, drink wines and rate them, and share their passion for drinking wine". <br/><br/>
                    Back then we were using excel to keep track of our ratings. At each meeting a member would bring a wine and a powerpoint.
                    The goal was to learn more about red wines and their tastings.
                    Today we would like to share our passion for wines, and have therefore made a website for everyone to use.
                    So they can take part of our community.  </p>
                <div class="primary-btn">
                    <a href="#">Sign up & create your own club</a>
                </div>
            </div>
        </div>
    </div>

    <!--  FAQ INFO -->
    <div class="faq-section">
        <div class="uk-container uk-container--padding">
            <div class="info-panel">
                <h3>FAQ</h3>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="questions-panel">
                <div class="faq-card">
                    <div class="icon-box">
                        <span uk-icon="icon: info"></span>
                    </div>
                    <div class="faq-info">
                        <h3>Are the membership free?</h3>
                        <p>Yes it is completely free.</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="icon-box">
                        <span uk-icon="icon: info"></span>
                    </div>
                    <div class="faq-info">
                        <h3>How can I take part of the community?</h3>
                        <p>Find the club on the club overview page and apply for membership in the upper right corner.</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="icon-box">
                        <span uk-icon="icon: info"></span>
                    </div>
                    <div class="faq-info">
                        <h3>How can I invite people to my club?</h3>
                        <p>This feature will be implementet later.</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="icon-box">
                        <span uk-icon="icon: info"></span>
                    </div>
                    <div class="faq-info">
                        <h3>Can I join more than one club?</h3>
                        <p>Yes. You can join as many clubs you wan to. But you can only create three clubs of your own.</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="icon-box">
                        <span uk-icon="icon: info"></span>
                    </div>
                    <div class="faq-info">
                        <h3>Who can I contact in case of a bug?</h3>
                        <p>Use the contact page and sent us a message via the contact formula.</p>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="icon-box">
                        <span uk-icon="icon: info"></span>
                    </div>
                    <div class="faq-info">
                        <h3>How can I change my password?</h3>
                        <p>You can change your password on your profile page by using the navigation on the upper right corner.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  WRIGHT US -->
    <div class="wright-us-section">
        <div class="uk-container uk-container--padding">
            <div class="info-panel">
                <h3>Contact</h3>
                <h2>Do you have any further questions?</h2>
                <p>We will gladly answer All of your questions. Send them to us and we will return as soon as possible within the next 24 hours with a response (except on weekends). <span uk-icon="icon: happy; ratio: 0.5"></span>
                </p>
                <div class="primary-btn">
                    <a href="#">Got a question?</a>
                </div>
            </div>
        </div>
    </div>

@endsection
