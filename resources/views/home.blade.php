<x-layouts.app>
    <x-slot name="title">
        {{ __('Growmefy - Boost Your Online Reputation') }}
    </x-slot>

    <x-section.hero class="w-full mb-8 md:mb-80">

        <div class="mx-auto text-center h-160 md:h-180 px-4">
            <x-pill class="text-primary-500 bg-primary-50">{{ __('Boost Your Online Reputation') }}</x-pill>
            <x-heading.h1 class="mt-4 text-primary-50 font-bold">
                {{ __('Get More Reviews for your Local Business') }}
                <br class="hidden sm:block">
                {{ __('and Shine Online') }}

            </x-heading.h1>

            <p class="text-primary-50 m-3">{{ __('Growmefy helps you collect more reviews on Google, Trustpilot, Tripadvisor, and more, improving your online presence and local SEO.') }}</p>

            <div class="flex flex-wrap gap-4 justify-center flex-col md:flex-row mt-6">
                <x-effect.glow></x-effect.glow>

                <x-button-link.secondary href="#features" class="self-center !py-3" elementType="a">
                    {{ __('Explore Features') }}
                </x-button-link.secondary>
                <x-button-link.primary-outline href="#plans" class=" bg-transparent self-center !py-3 text-white border-white" rel=”nofollow” >
                    {{ __('See Pricing Plans') }}
                </x-button-link.primary-outline>

            </div>

            <x-user-ratings link="#testimonials" class="items-center justify-center mt-6 relative z-40">
                <x-slot name="avatars">
                    <x-user-ratings.avatar src="https://unsplash.com/photos/rDEOVtE7vOs/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 1"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/c_GmwfHBDzk/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8M3x8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 2"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/QXevDflbl8A/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8NHx8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 3"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/mjRwhvqEC0U/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Nnx8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 4"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/C8Ta0gwPbQg/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHx8fDE3MTM2ODQyNTB8MA&force=true&w=640" alt="testimonial 5"/>
                </x-slot>

                {{ __('See how businesses are transforming their online presence with Growmefy!') }}
            </x-user-ratings>

            <div class="mx-auto md:max-w-3xl lg:max-w-5xl">
                <img class="drop-shadow-2xl mt-8 transition hover:scale-101 rounded-2xl" src="{{URL::asset('/images/features/banner-hero-2.jpg')}}" />
            </div>

        </div>
    </x-section.hero>

    <x-section.columns class="max-w-none md:max-w-6xl mt-6" id="features">
        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Boost your local visibility') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Get More Reviews for Your Local Business') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Growmefy is designed for local businesses that want to stand out in their community and attract more customers through a strong online presence. Whether you own a restaurant, retail store, gym, beauty salon, dental clinic, auto repair shop, hotel, or any other type of local business, Growmefy is for you.') }}
            </p>

            <p class="mt-4">
                {{ __('Our platform is perfect for entrepreneurs and business owners who understand the importance of reviews in customer decision-making and want to strengthen their online reputation.') }}
            </p>
        </x-section.column>

        <x-section.column>
            <img src="{{URL::asset('/images/features/local-business.svg')}}" class="rounded-2xl"/>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl mt-6 flex-wrap-reverse">
        <x-section.column >
            <img src="{{URL::asset('/images/features/customer-reviews.svg')}}" class="rounded-2xl" />
        </x-section.column>

        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Effortless Review System') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Real Reviews, from your Real Customers') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('With Growmefy, you’ll get more reviews from real customers, enhancing your online visibility and building trust with future clients.') }}
            </p>
            <p class="mt-4">
                {{ __('Our system of customized landing pages and interactive tools is designed to simplify and encourage the collection of reviews on major platforms such as Google Business Profile, Facebook, TripAdvisor, Trustpilot, Yelp, Apple Store, Play Store, Amazon, Booking, and Airbnb.') }}
            </p>
            <p class="mt-4">
                {{ __('Boost your search rankings, strengthen your reputation, and turn more visits into sales with Growmefy.') }}
            </p>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl">
        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Grow Your Reputation') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Centralized Reviews System') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Maximize your business reputation by collecting and managing reviews across the platforms that matter most to your customers. With Growmefy, you can easily gather positive feedback from all major review sites, boosting your online presence and credibility. Our centralized system lets you monitor and respond to reviews on:') }}
            </p>
            <div class="flex flex-wrap gap-3 pt-1">
                <img src="{{URL::asset('/storage/icons/google.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/facebook.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/tripadvisor.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/trustpilot.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/yelp.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/amazon.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/apple.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/google-play.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/booking.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/airbnb.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                <img src="{{URL::asset('/storage/icons/ebay.svg')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
            </div>
            <p class="mt-4">
                {{ __('Growmefy brings all your reviews together, making it easy to manage your reputation from a single, user-friendly dashboard. Stay on top of your customer feedback, respond promptly, and turn positive reviews into a powerful marketing tool to drive more traffic and sales.') }}
            </p>
        </x-section.column>

        <x-section.column>
            <img class="rounded-2xl" src="{{URL::asset('/images/features/reviews-system.jpg')}}" dir="right" ></img>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl mt-6 flex-wrap-reverse">
        <x-section.column >
            <img src="{{URL::asset('/images/features/ask-reviews-system.jpg')}}" class="rounded-2xl" />
        </x-section.column>

        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Effortless Review Management') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Streamlined Feedback Collection.') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Growmefy simplifies the process of collecting feedback and reviews by guiding customers through a seamless flow that encourages positive feedback. Automate requests and reminders, ensuring your business always stays top of mind.') }}
            </p>
            <p class="mt-4">
                {{ __('Our platform ensures a smooth experience for your customers, making it easy for them to leave reviews on Google, Facebook, Tripadvisor, Yelp, Trustpilot, and other major platforms.') }}
            </p>
        </x-section.column>

    </x-section.columns>

    {{--
    <div class="text-center mt-16 mx-4" id="tech-stack">
        <x-heading.h6 class="text-primary-500">
            {{ __('Reliable and Modern') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Powered by a Robust Tech Stack') }}
        </x-heading.h2>
    </div>


    <div class="text-center p-4 mx-auto">
        <p >{{ __('Laravel, TailwindCSS, Livewire, AlpineJS & FilamentPhp') }}</p>

        <div class="flex flex-wrap items-center justify-center gap-12 mt-8">
            <img src="{{URL::asset('/images/tech-stack/laravel.svg')}}" class="h-10 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/filament.avif')}}" class="h-10 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/tailwindcss.svg')}}" class="h-12 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/livewire.png')}}" class="h-20 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/alpinejs.svg')}}" class="h-16 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
        </div>

    </div>--}}

    {{--    ////////////--}}
    {{--    Slider      --}}
    {{--    ////////////--}}

    <div class="text-center mt-16 p-4">
        <x-heading.h6 class="text-primary-500">
            {{ __('All-In-One Solution') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Set of Customized Tools and Resources to Get Reviews') }}
        </x-heading.h2>
    </div>
    <div class="text-center p-4 mx-auto w-2/3 ">
        <p >{{ __('Growmefy offers a complete set of tailored tools and resources designed to help you get more reviews from your real customers. From personalized landing pages to automated review requests and easy-to-use dashboards, everything is built to maximize your feedback on key platforms. Simplify your review management and watch your reputation grow effortlessly.') }}</p>
    </div>

    <div class="mx-4">
        <x-tab-slider class="mt-6 md:max-w-6xl border-2 border-neutral-100 py-8 rounded-2xl">
            <x-slot name="tabNames">
                <x-tab-slider.tab-name controls="tab-1" active="true">{{ __('QR Codes') }}</x-tab-slider.tab-name>
                <x-tab-slider.tab-name controls="tab-2">{{ __('Cusom Posters') }}</x-tab-slider.tab-name>
                <x-tab-slider.tab-name controls="tab-3">{{ __('Custom Stickers') }}</x-tab-slider.tab-name>
                <x-tab-slider.tab-name controls="tab-4">{{ __('Email Requests') }}</x-tab-slider.tab-name>
                <x-tab-slider.tab-name controls="tab-5">{{ __('Email Signatures') }}</x-tab-slider.tab-name>
                <x-tab-slider.tab-name controls="tab-7">{{ __('And More') }}</x-tab-slider.tab-name>
            </x-slot>

            <x-tab-slider.tab-content id="tab-1">
                <div class="text-center mt-8">
                    <x-heading.h4 class="text-primary-900 !font-semibold">
                        {{ __('Create Custom QR Codes') }}
                    </x-heading.h4>

                    <div class="mx-auto max-w-2xl">
                        <p class="mt-4">
                            {{ __('Easily collect reviews from your Customers showing and sharing your customized QR Code. One click download. Customize size, margin and color. Create as many QRs as you need') }}
                        </p>
                    </div>
                </div>

                <div class="m-10 mx-auto max-w-4xl mt-12">
                    <img src="{{URL::asset('/images/features/create-qr-codes.png')}}" class="drop-shadow-xl rounded-2xl mx-auto" />
                </div>

            </x-tab-slider.tab-content>

            <x-tab-slider.tab-content id="tab-2">
                <div class="text-center mt-8">
                    <x-heading.h4 class="text-primary-900 !font-semibold">
                        {{ __('Ask for Reviews with Customized Posters') }}
                    </x-heading.h4>

                    <div class="mx-auto max-w-2xl">
                        <p class="mt-4">
                            {{ __('Generate as Posters as you need. Select from templates and customize size, contents to easily start getting reviews from your Customers. One click download and print. ') }}
                        </p>
                    </div>
                </div>

                <div class="m-10 mx-auto max-w-4xl mt-12">
                    <img src="{{URL::asset('/images/features/leave-us-a-review.jpg')}}" class="drop-shadow-xl rounded-2xl mx-auto" />
                </div>

            </x-tab-slider.tab-content>

            <x-tab-slider.tab-content id="tab-3">
                <div class="text-center mt-8">
                    <x-heading.h4 class="text-primary-900 !font-semibold">
                        {{ __('Review Requests') }}
                    </x-heading.h4>

                    <div class="mx-auto max-w-2xl">
                        <p class="mt-4">
                            {{ __('Send personalized review requests to your customers and watch your positive feedback grow.') }}
                        </p>
                    </div>
                </div>

                <div class="m-10 mx-auto max-w-4xl mt-12">
                    <img src="{{URL::asset('/images/features/hero-component.png')}}" class="drop-shadow-xl rounded-2xl" />
                </div>

            </x-tab-slider.tab-content>

            <x-tab-slider.tab-content id="tab-4">
                <div class="text-center mt-8">
                    <x-heading.h4 class="text-primary-900 !font-semibold">
                        {{ __('Local SEO') }}
                    </x-heading.h4>

                    <div class="mx-auto max-w-2xl">
                        <p class="mt-4">
                            {{ __('Improve your local SEO with a strong presence of positive reviews on major platforms, specially Google Business Profile.') }}
                        </p>
                    </div>
                </div>

                <div class="m-10 mx-auto max-w-4xl mt-12">
                    <img src="{{URL::asset('/images/features/faqs-component.png')}}" class="drop-shadow-xl rounded-2xl" />
                </div>

            </x-tab-slider.tab-content>

            <x-tab-slider.tab-content id="tab-5">
                <div class="text-center mt-8">
                    <x-heading.h4 class="text-primary-900 !font-semibold">
                        {{ __('Insights & Analytics') }}
                    </x-heading.h4>

                    <div class="mx-auto max-w-2xl">
                        <p class="mt-4">
                            {{ __('Get detailed insights into your review performance and identify areas for improvement.') }}
                        </p>
                    </div>
                </div>

                <div class="m-10 mx-auto max-w-4xl mt-12">
                    <img src="{{URL::asset('/images/features/call-to-action-component.png')}}" class="drop-shadow-xl rounded-2xl">
                </div>

            </x-tab-slider.tab-content>

            <x-tab-slider.tab-content id="tab-6">
                <div class="text-center mt-8">
                    <x-heading.h4 class="text-primary-900 !font-semibold">
                        {{ __('Multi-Platform Support') }}
                    </x-heading.h4>

                    <div class="mx-auto max-w-2xl">
                        <p class="mt-4">
                            {{ __('Manage reviews from Google, Trustpilot, Tripadvisor, and more, all from one place.') }}
                        </p>
                    </div>
                </div>

                <div class="m-10 mx-auto max-w-4xl mt-12">
                    <img src="{{URL::asset('/images/features/tab-slider-component.png')}}" class="drop-shadow-xl rounded-2xl">
                </div>

            </x-tab-slider.tab-content>

            <x-tab-slider.tab-content id="tab-7">

                <div class="m-10 mx-auto max-w-4xl mt-6">
                    <x-section.columns class="max-w-none md:max-w-6xl mt-6">
                        <x-section.column class="flex flex-col items-center justify-center text-center">
                            <x-icon.fancy name="nav" class="w-2/5 mx-auto" type="secondary" />
                            <x-heading.h3 class="mx-auto pt-2">
                                {{ __('Customizable Resources') }}
                            </x-heading.h3>
                            <p class="mt-2">{{ __('Tailor Growmefy to fit your business needs with customizable resources to get more reviews.') }}</p>
                        </x-section.column>

                        <x-section.column class="flex flex-col items-center justify-center text-center">
                            <x-icon.fancy name="button-ok" class="w-2/5 mx-auto" type="secondary" />
                            <x-heading.h3 class="mx-auto pt-2">
                                {{ __('Seamless Integration') }}
                            </x-heading.h3>
                            <p class="mt-2">{{ __('Easily integrate Growmefy with your existing systems and platforms.') }}</p>
                        </x-section.column>

                        <x-section.column class="flex flex-col items-center justify-center text-center">
                            <x-icon.fancy name="pill" class="w-2/5 mx-auto" type="secondary" />
                            <x-heading.h3 class="mx-auto pt-2">
                                {{ __('AI-Powered Insights') }}
                            </x-heading.h3>
                            <p class="mt-2">{{ __('Gain actionable insights with our AI-driven analytics, tailored to your business needs.') }}</p>
                        </x-section.column>

                    </x-section.columns>

                    <p class="text-center mt-4">
                        {{ __('and much more...') }}
                    </p>
                </div>

            </x-tab-slider.tab-content>



        </x-tab-slider>
    </div>



    <x-section.columns class="max-w-none md:max-w-6xl mt-12" >
        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Track Your Performance') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Review Insights & Analytics') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Monitor key metrics like review counts, average ratings, and sentiment analysis across all platforms. Gain insights into your reputation trends and identify areas for improvement directly from your dashboard.') }}
            </p>
            <p class="mt-4">
                {{ __('Growmefy provides the tools you need to understand how your business is perceived online and make data-driven decisions to enhance your reputation.') }}
            </p>
        </x-section.column>

        <x-section.column>
            <img src="{{URL::asset('/images/features/stats.png')}}" >
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl mt-16 flex-wrap-reverse">
        <x-section.column >
            <img src="{{URL::asset('/images/features/email.png')}}"  />
        </x-section.column>

        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Engage Effortlessly') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Automated & Customizable Responses') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Use Growmefy to automatically send personalized responses to reviews, thanking customers for positive feedback or addressing concerns in a professional manner. Customize your communication templates to reflect your brand’s voice and style.') }}
            </p>
            <p class="mt-4">
                {{ __('Choose from leading email services like Mailgun, Postmark, and Amazon SES to ensure your messages are delivered seamlessly.') }}
            </p>

            <p class="pt-4">
                {{ __('Supported email providers:') }}
            </p>
            <div class="flex gap-3 pt-1">
                <a href="https://postmarkapp.com/" target="_blank">
                    @svg('colored/postmark', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                </a>

                <a href="https://www.mailgun.com/" target="_blank">
                    @svg('colored/mailgun', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                </a>

                <a href="https://aws.amazon.com/ses/" target="_blank">
                    @svg('colored/ses', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                </a>
            </div>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl" >
        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Content is king') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('A ready Blog.') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('When it comes to reaching customer, nothing beats SEO.') }}
            </p>
            <p class="mt-4">
                {{ __('SaaSykit comes with a ready blog system that you can use to publish articles and tutorials for your customers about your SaaS, which will help you with your SEO.') }}
            </p>
        </x-section.column>

        <x-section.column>
            <img src="{{URL::asset('/images/features/blog.png')}}" />
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl mt-16 flex-wrap-reverse">
        <x-section.column >
            <img src="{{URL::asset('/images/features/login.png')}}" />
        </x-section.column>

        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Modern Authentication') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Login, Registration & Social login.') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('SaaSykit includes built-in user authentication, supporting both traditional email/password authentication and social login options such as Google, Facebook, Twitter, Github, LinkedIn, and more.') }}
            </p>

            <p class="pt-4">
                {{ __('Supported login providers:') }}
            </p>
            <div class="flex gap-3 pt-1 flex-wrap">
                @svg('colored/google', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                @svg('colored/facebook', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                @svg('colored/twitter-oauth-2', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                @svg('colored/linkedin', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                @svg('colored/github', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                @svg('colored/gitlab', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
                @svg('colored/bitbucket', 'h-12 w-12 py-2 px-2 border border-primary-50 rounded-lg')
            </div>
        </x-section.column>

    </x-section.columns>


    <div class="text-center mt-16" x-intersect="$el.classList.add('slide-in-top')">
        <x-heading.h6 class="text-primary-500">
            {{ __('Manage with Ease') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('A Powerful Admin Panel at Your Fingertips') }}
        </x-heading.h2>
    </div>

    <p class="text-center py-4">{{ __('Control all aspects of your review management and online reputation from a stunning admin panel designed for simplicity and efficiency.') }}</p>

    <div class="text-center pt-6 mx-auto max-w-5xl ">
        <img src="{{URL::asset('/images/features/admin-panel.png')}}" >
    </div>

    {{-- Pricing Plans --}}

    <div class="text-center mt-16" x-intersect="$el.classList.add('slide-in-top')" id="plans">
        <x-heading.h6 class="text-primary-500">
            {{ __('Starts to Grow') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Boost Your Business with Tailored Plans') }}
        </x-heading.h2>
    </div>

    <p class="text-center py-4">{{ __('Explore plans designed to help you manage and scale your business effortlessly. Choose the perfect option and unlock advanced features.') }}</p>


    <x-tab-slider class="mt-6 md:max-w-6xl">
        <x-slot name="tabNames">
            {{-- Tab Mensual --}}
            <x-tab-slider.tab-name controls="pricing-monthly" active="true">
                {{ __('Monthly') }}
            </x-tab-slider.tab-name>
            {{-- Tab Anual --}}
            <x-tab-slider.tab-name controls="pricing-yearly" active="false">
                {{ __('Yearly') }}
                <x-pill class="text-primary-500 bg-primary-50 ml-2">{{ __('2 Month Free') }}</x-pill>
            </x-tab-slider.tab-name>
        </x-slot>

        {{-- Precios Mensuales --}}
        <x-tab-slider.tab-content id="pricing-monthly">
            <x-section.columns class="max-w-none md:max-w-6xl mt-6 justify-center">
                {{-- Plan Gratuito Mensual --}}
            <x-section.column class="md:!basis-1/3 !px-4">
                <x-plans.one :popular="false" link="{{ route('register') }}">
                    <x-slot name="name">Free</x-slot>
                    <x-slot name="price">$0.00</x-slot>
                    <x-slot name="interval">Forever</x-slot>
                    <x-slot name="description">
                        <ul class="flex flex-col items-start gap-4 text-sm">
                            <x-features.li-item>1 Business</x-features.li-item>
                            <x-features.li-item>Custom Landing Page</x-features.li-item>
                            <x-features.li-item>All Platforms Reviews</x-features.li-item>
                            <x-features.li-item>No limit reviews</x-features.li-item>
                        </ul>
                    </x-slot>
                </x-plans.one>
            </x-section.column>
                {{-- Plan Grow Mensual --}}
                <x-section.column class="md:!basis-1/3 !px-4">
                    <x-plans.one :popular="true" link="{{ route('checkout.subscription', ['planSlug' => 'grow', 'interval' => 'monthly']) }}">
                        <x-slot name="name">Grow</x-slot>
                        <x-slot name="price">$9.90</x-slot>
                        <x-slot name="interval">/ month</x-slot>
                        <x-slot name="description">
                            <ul class="flex flex-col items-start gap-4 text-sm">
                                <x-features.li-item>All in Free Plan</x-features.li-item>
                                <x-features.li-item>Custom QR Code</x-features.li-item>
                                <x-features.li-item>Custom Posters</x-features.li-item>
                                <x-features.li-item>Custom stickers</x-features.li-item>
                                <x-features.li-item>Email Signatures</x-features.li-item>
                                <x-features.li-item>Support via email</x-features.li-item>
                            </ul>
                        </x-slot>
                    </x-plans.one>
                    {{-- Opciones para Grow --}}
                    <h4 class="text-xs font-semibold mt-16 text-gray-700">Want to Grow more than 1 business?</h4>
                    <div class="text-xs mt-4">
                        @foreach ([
                            ['business' => 2, 'discount' => 20, 'price' => 9.90 * 2 * 0.80, 'unit_price' => 9.90 * 0.80],
                            ['business' => 5, 'discount' => 30, 'price' => 9.90 * 5 * 0.70, 'unit_price' => 9.90 * 0.70],
                            ['business' => 10, 'discount' => 40, 'price' => 9.90 * 10 * 0.60, 'unit_price' => 9.90 * 0.60],
                            ['business' => 25, 'discount' => 50, 'price' => 9.90 * 25 * 0.50, 'unit_price' => 9.90 * 0.50],
                            ['business' => 50, 'discount' => 60, 'price' => 9.90 * 50 * 0.40, 'unit_price' => 9.90 * 0.40],
                            ['business' => 100, 'discount' => 70, 'price' => 9.90 * 100 * 0.30, 'unit_price' => 9.90 * 0.30]
                        ] as $option)
                            <a href="{{ route('checkout.subscription', ['planSlug' => 'grow', 'interval' => 'monthly', 'business' => $option['business']]) }}"
                                class="block p-2 m-1 bg-primary-50 rounded-lg text-primary-700 hover:bg-primary-100">
                                 {{ 'Grow ' . $option['business'] . ': ' }}
                                 <span class="font-semibold text-primary-600">${{ number_format($option['price'], 2) }}</span>
                                 <span class="text-xs text-primary-500">({{ __('save') }} {{ $option['discount'] }}%)</span>
                             </a>
                        @endforeach
                    </div>
                </x-section.column>

                {{-- Plan Manage Mensual --}}
                <x-section.column class="md:!basis-1/3 !px-4">
                    <x-plans.one :popular="false" link="{{ route('checkout.subscription', ['planSlug' => 'manage', 'interval' => 'monthly']) }}">
                        <x-slot name="name">Manage</x-slot>
                        <x-slot name="price">$34.90</x-slot>
                        <x-slot name="interval">/ month</x-slot>
                        <x-slot name="description">
                            <ul class="flex flex-col items-start gap-4 text-sm">
                                <x-features.li-item>All in Grow Plan</x-features.li-item>
                                <x-features.li-item>GBP Integration</x-features.li-item>
                                <x-features.li-item>Reviews Manager</x-features.li-item>
                                <x-features.li-item>Email Review Requests</x-features.li-item>
                                <x-features.li-item>Reputation Report</x-features.li-item>
                                <x-features.li-item>Support via email</x-features.li-item>
                            </ul>
                        </x-slot>
                    </x-plans.one>
                    {{-- Opciones para Manage --}}
                    <h4 class="text-xs font-semibold mt-16 text-gray-700">Want to Manage more than 1 business?</h4>
                    <div class="text-xs mt-4">
                        @foreach ([
                            ['business' => 2, 'discount' => 20, 'price' => 34.90 * 2 * 0.80, 'unit_price' => 34.90 * 0.80],
                            ['business' => 5, 'discount' => 30, 'price' => 34.90 * 5 * 0.70, 'unit_price' => 34.90 * 0.70],
                            ['business' => 10, 'discount' => 40, 'price' => 34.90 * 10 * 0.60, 'unit_price' => 34.90 * 0.60],
                            ['business' => 25, 'discount' => 50, 'price' => 34.90 * 25 * 0.50, 'unit_price' => 34.90 * 0.50],
                            ['business' => 50, 'discount' => 60, 'price' => 34.90 * 50 * 0.40, 'unit_price' => 34.90 * 0.40],
                            ['business' => 100, 'discount' => 70, 'price' => 34.90 * 100 * 0.30, 'unit_price' => 34.90 * 0.30]
                        ] as $option)
                            <a href="{{ route('checkout.subscription', ['planSlug' => 'mange', 'interval' => 'monthly', 'business' => $option['business']]) }}"
                                class="block p-2 m-1 bg-primary-50 rounded-lg text-primary-700 hover:bg-primary-100">
                                 {{ 'Manage ' . $option['business'] . ': ' }}
                                 <span class="font-semibold text-primary-600">${{ number_format($option['price'], 2) }}</span>
                                 <span class="text-xs text-primary-500">({{ __('save') }} {{ $option['discount'] }}%)</span>
                             </a>
                        @endforeach
                    </div>
                </x-section.column>

                {{-- Plan Automate Mensual --}}
                <x-section.column class="md:!basis-1/3 !px-4">
                    <x-plans.one :popular="false" link="{{ route('checkout.subscription', ['planSlug' => 'automate', 'interval' => 'monthly']) }}">
                        <x-slot name="name">Automate</x-slot>
                        <x-slot name="price">$59.90</x-slot>
                        <x-slot name="interval">/ month</x-slot>
                        <x-slot name="description">
                            <ul class="flex flex-col items-start gap-4 text-sm">
                                <x-features.li-item>All in Manage Plan</x-features.li-item>
                                <x-features.li-item>AI Reviews Answer</x-features.li-item>
                                <x-features.li-item>GBP Auto optimization</x-features.li-item>
                                <x-features.li-item>AI Post Creation</x-features.li-item>
                                <x-features.li-item>Whatsapp Rev. Requests</x-features.li-item>
                                <x-features.li-item>Support via email</x-features.li-item>
                            </ul>
                        </x-slot>
                    </x-plans.one>
                    {{-- Opciones para Automate --}}
                    <h4 class="text-xs font-semibold mt-16 text-gray-700">Want to Automate more than 1 business?</h4>
                    <div class="text-xs mt-4">
                        @foreach ([
                            ['business' => 2, 'discount' => 20, 'price' => 59.90 * 2 * 0.80, 'unit_price' => 59.90 * 0.80],
                            ['business' => 5, 'discount' => 30, 'price' => 59.90 * 5 * 0.70, 'unit_price' => 59.90 * 0.70],
                            ['business' => 10, 'discount' => 40, 'price' => 59.90 * 10 * 0.60, 'unit_price' => 59.90 * 0.60],
                            ['business' => 25, 'discount' => 50, 'price' => 59.90 * 25 * 0.50, 'unit_price' => 59.90 * 0.50],
                            ['business' => 50, 'discount' => 60, 'price' => 59.90 * 50 * 0.40, 'unit_price' => 59.90 * 0.40],
                            ['business' => 100, 'discount' => 70, 'price' => 59.90 * 100 * 0.30, 'unit_price' => 59.90 * 0.30]
                        ] as $option)
                            <a href="{{ route('checkout.subscription', ['planSlug' => 'automate', 'interval' => 'monthly', 'business' => $option['business']]) }}"
                                class="block p-2 m-1 bg-primary-50 rounded-lg text-primary-700 hover:bg-primary-100">
                                 {{ 'Automate ' . $option['business'] . ': ' }}
                                 <span class="font-semibold text-primary-600">${{ number_format($option['price'], 2) }}</span>
                                 <span class="text-xs text-primary-500">({{ __('save') }} {{ $option['discount'] }}%)</span>
                             </a>
                        @endforeach
                    </div>
                </x-section.column>
            </x-section.columns>
        </x-tab-slider.tab-content>

        {{-- Precios Anuales (similar lógica) --}}
        <x-tab-slider.tab-content id="pricing-yearly">
            <x-section.columns class="max-w-none md:max-w-6xl mt-6 justify-center">
                {{-- Plan Gratuito Anual --}}
            <x-section.column class="md:!basis-1/3 !px-4">
                <x-plans.one :popular="false" link="{{ route('register') }}">
                    <x-slot name="name">Free</x-slot>
                    <x-slot name="price">$0.00</x-slot>
                    <x-slot name="interval">Forever</x-slot>
                    <x-slot name="description">
                        <ul class="flex flex-col items-start gap-4 text-sm">
                            <x-features.li-item>1 Business</x-features.li-item>
                            <x-features.li-item>Custom Landing Page</x-features.li-item>
                            <x-features.li-item>All Platforms Reviews</x-features.li-item>
                            <x-features.li-item>No limit reviews</x-features.li-item>
                        </ul>
                    </x-slot>
                </x-plans.one>
            </x-section.column>
                {{-- Plan Grow Anual --}}
                <x-section.column class="md:!basis-1/3 !px-4">
                    <x-plans.one :popular="true" link="{{ route('checkout.subscription', ['planSlug' => 'grow', 'interval' => 'yearly']) }}">
                        <x-slot name="name">Grow</x-slot>
                        <x-slot name="price">$99.00</x-slot>
                        <x-slot name="interval">/ year</x-slot>
                        <x-slot name="description">
                            <ul class="flex flex-col items-start gap-4 text-sm">
                                <x-features.li-item>All in Free Plan</x-features.li-item>
                                <x-features.li-item>Custom QR Code</x-features.li-item>
                                <x-features.li-item>Custom Posters</x-features.li-item>
                                <x-features.li-item>Custom stickers</x-features.li-item>
                                <x-features.li-item>Email Signatures</x-features.li-item>
                                <x-features.li-item>Support via email</x-features.li-item>
                            </ul>
                        </x-slot>
                    </x-plans.one>
                    {{-- Opciones para Grow --}}
                    <h4 class="text-xs font-semibold mt-16 text-gray-700">Want to Grow more than 1 business?</h4>
                    <div class="text-xs mt-4">
                        @foreach ([
                            ['business' => 2, 'discount' => 20, 'price' => 99.90 * 2 * 0.80, 'unit_price' => 99.90 * 0.80],
                            ['business' => 5, 'discount' => 30, 'price' => 99.90 * 5 * 0.70, 'unit_price' => 99.90 * 0.70],
                            ['business' => 10, 'discount' => 40, 'price' => 99.90 * 10 * 0.60, 'unit_price' => 99.90 * 0.60],
                            ['business' => 25, 'discount' => 50, 'price' => 99.90 * 25 * 0.50, 'unit_price' => 99.90 * 0.50],
                            ['business' => 50, 'discount' => 60, 'price' => 99.90 * 50 * 0.40, 'unit_price' => 99.90 * 0.40],
                            ['business' => 100, 'discount' => 70, 'price' => 99.90 * 100 * 0.30, 'unit_price' => 99.90 * 0.30]
                        ] as $option)
                            <a href="{{ route('checkout.subscription', ['planSlug' => 'grow', 'interval' => 'yearly', 'business' => $option['business']]) }}"
                                class="block p-2 m-1 bg-primary-50 rounded-lg text-primary-700 hover:bg-primary-100">
                                 {{ 'Grow ' . $option['business'] . ': ' }}
                                 <span class="font-semibold text-primary-600">${{ number_format($option['price'], 2) }}</span>
                                 <span class="text-xs text-primary-500">({{ __('save') }} {{ $option['discount'] }}%)</span>
                             </a>
                        @endforeach
                    </div>
                </x-section.column>

                {{-- Plan Manage Yearly --}}
                <x-section.column class="md:!basis-1/3 !px-4">
                    <x-plans.one :popular="false" link="{{ route('checkout.subscription', ['planSlug' => 'manage', 'interval' => 'yearly']) }}">
                        <x-slot name="name">Manage</x-slot>
                        <x-slot name="price">$349.00</x-slot>
                        <x-slot name="interval">/ year</x-slot>
                        <x-slot name="description">
                            <ul class="flex flex-col items-start gap-4 text-sm">
                                <x-features.li-item>All in Grow Plan</x-features.li-item>
                                <x-features.li-item>GBP Integration</x-features.li-item>
                                <x-features.li-item>Reviews Manager</x-features.li-item>
                                <x-features.li-item>Email Review Requests</x-features.li-item>
                                <x-features.li-item>Reputation Report</x-features.li-item>
                                <x-features.li-item>Support via email</x-features.li-item>
                            </ul>
                        </x-slot>
                    </x-plans.one>
                    {{-- Opciones para Manage --}}
                    <h4 class="text-xs font-semibold mt-16 text-gray-700">Want to Manage more than 1 business?</h4>
                    <div class="text-xs mt-4">
                        @foreach ([
                            ['business' => 2, 'discount' => 20, 'price' => 349.00 * 2 * 0.80, 'unit_price' => 349.00 * 0.80],
                            ['business' => 5, 'discount' => 30, 'price' => 349.00 * 5 * 0.70, 'unit_price' => 349.00 * 0.70],
                            ['business' => 10, 'discount' => 40, 'price' => 349.00 * 10 * 0.60, 'unit_price' => 349.00 * 0.60],
                            ['business' => 25, 'discount' => 50, 'price' => 349.00 * 25 * 0.50, 'unit_price' => 349.00 * 0.50],
                            ['business' => 50, 'discount' => 60, 'price' => 349.00 * 50 * 0.40, 'unit_price' => 349.00 * 0.40],
                            ['business' => 100, 'discount' => 70, 'price' => 349.00 * 100 * 0.30, 'unit_price' => 349.00 * 0.30]
                        ] as $option)
                            <a href="{{ route('checkout.subscription', ['planSlug' => 'manage', 'interval' => 'yearly', 'business' => $option['business']]) }}"
                                class="block p-2 m-1 bg-primary-50 rounded-lg text-primary-700 hover:bg-primary-100">
                                 {{ 'Manage ' . $option['business'] . ': ' }}
                                 <span class="font-semibold text-primary-600">${{ number_format($option['price'], 2) }}</span>
                                 <span class="text-xs text-primary-500">({{ __('save') }} {{ $option['discount'] }}%)</span>
                             </a>
                        @endforeach
                    </div>
                </x-section.column>

                {{-- Plan Automate Mensual --}}
                <x-section.column class="md:!basis-1/3 !px-4">
                    <x-plans.one :popular="false" link="{{ route('checkout.subscription', ['planSlug' => 'automate', 'interval' => 'monthly']) }}">
                        <x-slot name="name">Automate</x-slot>
                        <x-slot name="price">$599.00</x-slot>
                        <x-slot name="interval">/year</x-slot>
                        <x-slot name="description">
                            <ul class="flex flex-col items-start gap-4 text-sm">
                                <x-features.li-item>All in Manage Plan</x-features.li-item>
                                <x-features.li-item>AI Reviews Answer</x-features.li-item>
                                <x-features.li-item>GBP Auto optimization</x-features.li-item>
                                <x-features.li-item>AI Post Creation</x-features.li-item>
                                <x-features.li-item>Whatsapp Rev. Requests</x-features.li-item>
                                <x-features.li-item>Support via email</x-features.li-item>
                            </ul>
                        </x-slot>
                    </x-plans.one>
                    {{-- Opciones para Automate --}}
                    <h4 class="text-xs font-semibold mt-16 text-gray-700">Want to Automate more than 1 business?</h4>
                    <div class="text-xs mt-4">
                        @foreach ([
                            ['business' => 2, 'discount' => 20, 'price' => 599.00 * 2 * 0.80, 'unit_price' => 599.00 * 0.80],
                            ['business' => 5, 'discount' => 30, 'price' => 599.00 * 5 * 0.70, 'unit_price' => 599.00 * 0.70],
                            ['business' => 10, 'discount' => 40, 'price' => 599.00 * 10 * 0.60, 'unit_price' => 599.00 * 0.60],
                            ['business' => 25, 'discount' => 50, 'price' => 599.00 * 25 * 0.50, 'unit_price' => 599.00 * 0.50],
                            ['business' => 50, 'discount' => 60, 'price' => 599.00 * 50 * 0.40, 'unit_price' => 599.00 * 0.40],
                            ['business' => 100, 'discount' => 70, 'price' => 599.00 * 100 * 0.30, 'unit_price' => 599.00 * 0.30]
                        ] as $option)
                            <a href="{{ route('checkout.subscription', ['planSlug' => 'automate', 'interval' => 'yearly', 'business' => $option['business']]) }}"
                                class="block p-2 m-1 bg-primary-50 rounded-lg text-primary-700 hover:bg-primary-100">
                                 {{ 'Automate ' . $option['business'] . ': ' }}
                                 <span class="font-semibold text-primary-600">${{ number_format($option['price'], 2) }}</span>
                                 <span class="text-xs text-primary-500">({{ __('save') }} {{ $option['discount'] }}%)</span>
                             </a>
                        @endforeach
                    </div>
                </x-section.column>
            </x-section.columns>
        </x-tab-slider.tab-content>
    </x-tab-slider>




    <div class="text-center mt-16" x-intersect="$el.classList.add('slide-in-top')">
        <x-heading.h6 class="text-primary-500">
            {{ __('Oh, we\'re not done yet') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Explore Additional Features') }}
        </x-heading.h2>
    </div>

    <x-section.columns class="max-w-none md:max-w-6xl mt-6">
        <x-section.column class="flex flex-col items-center justify-center text-center">
            <x-icon.fancy name="users" class="w-2/5 mx-auto" />
            <x-heading.h3 class="mx-auto pt-2">
                {{ __('Users & Roles') }}
            </x-heading.h3>
            <p class="mt-2">{{ __('Manage your users, create roles and assign permissions to your users.') }}</p>
        </x-section.column>

        <x-section.column class="flex flex-col items-center justify-center text-center">
            <x-icon.fancy name="translatable" class="w-2/5 mx-auto" />
            <x-heading.h3 class="mx-auto pt-2">
                {{ __('Multilingual Support') }}
            </x-heading.h3>
            <p class="mt-2">{{ __('Growmefy is fully translatable, allowing you to provide a localized experience for your global audience.') }}</p>
        </x-section.column>

        <x-section.column class="flex flex-col items-center justify-center text-center">
            <x-icon.fancy name="seo" class="w-2/5 mx-auto" />
            <x-heading.h3 class="mx-auto pt-2">
                {{ __('Sitemap & SEO') }}
            </x-heading.h3>
            <p class="mt-2">{{ __('Auto-generated sitemap and SEO optimization out of the box.') }}</p>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl mt-6">
        <x-section.column class="flex flex-col items-center justify-center text-center">
            <x-icon.fancy name="user-dashboard" class="w-2/5 mx-auto" />
            <x-heading.h3 class="mx-auto pt-2">
                {{ __('Intuitive User Dashboard') }}
            </x-heading.h3>
            <p class="mt-2">{{ __('Empower your users with a dashboard that allows them to manage their reviews, monitor their reputation, and interact with customers.') }}</p>
        </x-section.column>

        <x-section.column class="flex flex-col items-center justify-center text-center">
            <x-icon.fancy name="tool" class="w-2/5 mx-auto" />
            <x-heading.h3 class="mx-auto pt-2">
                {{ __('Customization at Your Fingertips') }}
            </x-heading.h3>
            <p class="mt-2">{{ __('Easily adjust settings and features within Growmefy’s admin panel without needing to redeploy or reconfigure your application.') }}</p>
        </x-section.column>

        <x-section.column class="flex flex-col items-center justify-center text-center">
            <x-icon.fancy name="development" class="w-2/5 mx-auto" />
            <x-heading.h3 class="mx-auto pt-2">
                {{ __('Developer-friendly') }}
            </x-heading.h3>
            <p class="mt-2">{{ __('Built with developers in mind, uses best coding practices. Offers handlers & events and automated tests covering critical components of the application.') }}</p>
        </x-section.column>

    </x-section.columns>

    <div class="text-center mt-24 mx-4">
        <x-heading.h6 class="text-primary-500">
            {{ __('Start to end') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('1-command deployment & Server provisioning') }}
        </x-heading.h2>
    </div>

    <p class="text-center p-4">{{ __('Deploy your SaaS application to your server with a single command, powered by') }} <a href="https://deployer.org/" target="_blank" class="text-primary-500 hover:underline">{{ __('PHP Deployer') }}</a>. </p>

    <div class="max-w-fit mx-auto mt-6">
        <span class="border border-neutral-300 bg-neutral-100 p-6 rounded-2xl mt-4">
            $ ./vendor/bin/dep deploy
        </span>
        <span class="text-4xl ms-3 -mt-2"> 🚀</span>
    </div>


    <div class="text-center mt-24" x-intersect="$el.classList.add('slide-in-top')">
        <x-heading.h6 class="text-primary-500">
            {{ __('Extensive Documentation') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Everything you need to know to get started.') }}
        </x-heading.h2>
    </div>

    <div class="mx-4">
        <div class="max-w-none md:max-w-6xl mx-auto text-center">
            <p class="mt-4">
                {{ __('SaaSykit\'s documentation is extensive and covers everything you need to know to get started with building your SaaS.') }}
            </p>
            <x-button-link.primary href="https://saasykit.com/docs" class=" mt-8">
                {{ __('Check Documentation') }}
            </x-button-link.primary>
        </div>
    </div>

    <div class="text-center mt-24 mx-4" id="faq">
        <x-heading.h6 class="text-primary-500">
            {{ __('FAQ') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Got a Question?') }}
        </x-heading.h2>
        <p>{{ __('Here are the most common questions to help you with your decision.') }}</p>
    </div>

    <div class="max-w-none md:max-w-6xl mx-auto">
        <x-accordion class="mt-4 p-8">
            <x-accordion.item active="true" name="faqs">
                <x-slot name="title">{{ __('What is SaaSykit?') }}</x-slot>

                <p>
                    {{ __('SaaSykit is a complete SaaS starter kit that includes everything you need to start your SaaS business. It comes ready with a huge list of reusable components, a complete admin panel, user dashboard, user authentication, user & role management, plans & pricing, subscriptions, payments, emails, and more.') }}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{ __('What features does SaaSykit offer?') }}</x-slot>

                <p class="mt-4">
                    {{ __('Here are some of the features included in SaaSykit in a nutshell:') }}
                </p>

                <ul class="mt-4 list-disc ms-4 ps-4">
                    <li>{{ __('Customize Styles: Customize the styles &amp; colors, error page of your application to fit your brand.') }}</li>
                    <li>{{ __('Product, Plans &amp; Pricing: Create and manage your products, plans, and pricing from a beautiful and easy-to-use admin panel.') }}</li>
                    <li>{{ __('Beautiful checkout process: Your customers can subscribe to your plans from a beautiful checkout process.') }}</li>
                    <li>{{ __('Huge list of ready-to-use components: Plans &amp; Pricing, hero section, features section, testimonials, FAQ, Call to action, tab slider, and much more.') }}</li>
                    <li>{{ __('User authentication: Comes with user authentication out of the box, whether classic email/password or social login (Google, Facebook, Twitter, Github, LinkedIn, and more).') }}</li>
                    <li>{{ __('Discounts: Create and manage your discounts and reward your customers.') }}</li>
                    <li>{{ __('SaaS metric stats: View your MRR, Churn rates, ARPU, and other SaaS metrics.') }}</li>
                    <li>{{ __('Multiple payment providers: Stripe, Paddle, and more coming soon.') }}</li>
                    <li>{{ __('Multiple email providers: Mailgun, Postmark, Amazon SES, and more coming soon.') }}</li>
                    <li>{{ __('Blog: Create and manage your blog posts.') }}</li>
                    <li>{{ __('User &amp; Role Management: Create and manage your users and roles, and assign permissions to your users.') }}</li>
                    <li>{{ __('Fully translatable: Translate your application to any language you want.') }}</li>
                    <li>{{ __('Sitemap &amp; SEO: Sitemap and SEO optimization out of the box.') }}</li>
                    <li>{{ __('Admin Panel: Manage your SaaS application from a beautiful admin panel powered by ') }} <a href="https://filamentphp.com/" target="_blank" rel="noopener noreferrer">Filament</a>.</li>
                    <li>{{ __('User Dashboard: Your customers can manage their subscriptions, change payment method, upgrade plan, cancel subscription, and more from a beautiful user dashboard powered by') }} <a href="https://filamentphp.com/" target="_blank" rel="noopener noreferrer">Filament</a>.</li>
                    <li>{{ __('Automated Tests: Comes with automated tests for critical components of the application.') }}</li>
                    <li>{{ __('One-line deployment: Provision your server and deploy your application easily with integrated') }} <a href="https://deployer.org/" target="_blank" rel="noopener noreferrer">Deployer</a> {{ __('  support.') }}</li>
                    <li>{{ __('Developer-friendly: Built with developers in mind, uses best coding practices.') }}</li>
                    <li>{{ __('And much more...') }}</li>
                </ul>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{ __('Which payment providers are supported?') }}</x-slot>

                <p>
                    {{ __('SaaSykit supports Stripe and Paddle out of the box. You can easily add more payment providers by extending the code. More payment method will be added in the future as well (e.g. Lemon Squeezy)') }}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{ __('Do you offer support?') }}</x-slot>

                <p>
                    {{ __('Of course! we offer email and discord support to help you with any issues you might face or questions you have. Write us an email at') }} <a href="mailto:{{config('app.support_email')}}" class="text-primary-500 hover:underline">{{config('app.support_email')}}</a> {{ __('or join our') }} <a href="{{config('app.social_links.discord')}}">{{ __('discord server')}}</a> {{ __('to get help.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'What Tech stack is used?'}}</x-slot>

                <p>
                    {{ __('SaaSykit is built on top of') }} <a href="https://laravel.com" target="_blank">Laravel</a> {{ __('Laravel, the most popular PHP framework, and') }} <a target="_blank" href="https://filamentphp.com/">Filament</a> {{ __(', a beautiful and powerful admin panel for Laravel. It also uses TailwindCSS, AlpineJS, and Livewire.')}}
                </p>
                <p class="mt-4">
                    {{ __('You can use your favourite database (MySQL, PostgreSQL, SQLite) and your favourite queue driver (Redis, Amazon SQS, etc).')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'How often is SaaSykit updated?'}}</x-slot>

                <p>
                    {{ __('SaaSykit is updated regularly to keep up with the latest Laravel and Filament versions, and to add new features and improvements.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Do you offer refunds?'}}</x-slot>

                <p>
                    {{ __('Yes, we offer a 14-day money-back guarantee. If you are not satisfied with SaaSykit, you can request a refund within 14 days of your purchase. Please write us an email at') }} <a href="mailto:{{config('app.support_email')}}" class="text-primary-500 hover:underline">{{config('app.support_email')}}</a> {{ __('to request a refund.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Where can I host my SaaS application?'}}</x-slot>

                <p>
                    {{ __('You can host your SaaS application on any server that supports PHP, such as DigitalOcean, AWS, Hetzner, Linode, and more. You can also use a platform like Laravel Forge to manage your server and deploy your application.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Is there a demo available?'}}</x-slot>

                <p>
                    {{ __('Yes, a demo is available to help you get a feel of SaaSykit. You can find the demo') }} <a href="https://saasykit.com/demo" target="_blank" rel=”nofollow” >here</a>.
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Is there documentation available?'}}</x-slot>

                <p>
                    {{ __('Yes, an extensive documentation is available to help you get started with SaaSykit. You can find the documentation ')}} <a href="https://saasykit.com/docs" target="_blank">here</a>.
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'How is SaaSykit different from just using Laravel directly?'}}</x-slot>

                <p>
                    {{__('SaaSykit is built on top of Laravel with the intention to save you time and effort by not having to build everything needed for a modern SaaS from scratch, like payment provider integration, subscription management, user authentication, user & role management, having a beautiful admin panel, a user dashboard to manage their subscriptions/payments, and more.')}}
                </p>
                <p class="mt-4">
                    {{__('You can choose to base your SaaS on vanilla Laravel and build everything from scratch if you prefer and that is totally fine, but you will need a few months to build what SaaSykit offers out of the box, then on top of that, you will need to start to build your actual SaaS application.')}}
                </p>

                <p class="mt-4">
                    {{__('SaaSykit is a great starting point for your SaaS application, it is built with best coding practices, and it is developer-friendly. It is also built with the intention to be easily customizable and extendable. Any developer who is familiar with Laravel will feel right at home.')}}
                </p>

            </x-accordion.item>
        </x-accordion>
    </div>
</x-layouts.app>
