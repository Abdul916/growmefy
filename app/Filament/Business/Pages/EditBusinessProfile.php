<?php

namespace App\Filament\Business\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload; // Add this line
use Filament\Forms\Components\Textarea; // Add this line
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Filament\Forms\Components\Section;
use Illuminate\Support\HtmlString;
use App\Models\Business;

class EditBusinessProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Business profile';
    }

    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('General Business Information')
                ->description('Basic information about the business.')
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->disabled()
                ]),

            Section::make('Landing Page Settings')
                ->description('Settings for the landing page.')
                ->columns(2)
                ->schema([
                    FileUpload::make('logo')
                        ->label('Logo')
                        ->image()
                        ->directory('logos'),
                    FileUpload::make('background_image')
                        ->label('Background Image')
                        ->image()
                        ->directory('backgrounds'),
                    Textarea::make('general_feedback_question')
                        ->label('General Feedback Question')
                        ->autosize()
                        ->default('How was your experience with us?')
                        ->helperText(new HtmlString('Alternative suggestions:<br>
                            - We would love to hear your thoughts on our service.<br>
                            - How did we do? Please let us know how you found our service.<br>
                            - Your feedback is important to us. How was our service?')),
                ]),

            Section::make('Reviews Settings')
                ->description('Settings for reviews.')
                ->columns(2)
                ->schema([
                    Textarea::make('ask_for_review')
                        ->label('Ask for Review')
                        ->autosize()
                        ->default('We appreciate your feedback! Could you please leave us a review on one of the following platforms?')
                        ->helperText(new HtmlString('Alternative suggestions:<br>
                            - Thank you for choosing our service. Could you take a moment to leave us a review on your preferred platform?<br>
                            - Your review helps us improve. Please leave us a review on any of these plataformas.<br>
                            - We hope you enjoyed our service. Please share your experience by leaving a review on one of these plataformas.')),
                    TextInput::make('gbp_url')
                        ->label('Google Business Profile URL')
                        ->url(),
                    TextInput::make('facebook_url')
                        ->label('Facebook URL')
                        ->url(),
                    TextInput::make('tripadvisor_url')
                        ->label('Tripadvisor URL')
                        ->url(),
                    TextInput::make('trustpilot_url')
                        ->label('Trustpilot URL')
                        ->url(),
                    TextInput::make('booking_url')
                        ->label('Booking URL')
                        ->url(),
                    TextInput::make('airbnb_url')
                        ->label('Airbnb URL')
                        ->url(),
                    TextInput::make('google_play_url')
                        ->label('Google Play URL')
                        ->url(),
                    TextInput::make('app_store_url')
                        ->label('App Store URL')
                        ->url(),
                    TextInput::make('amazon_url')
                        ->label('Amazon URL')
                        ->url(),
                    TextInput::make('ebay_url')
                        ->label('eBay URL')
                        ->url(),
                    TextInput::make('yelp_url')
                        ->label('Yelp URL')
                        ->url(),
                ]),

            Section::make('Feedback Settings')
                ->description('Settings for feedback. Here you can define what questions to ask and what to say after the feedback.')
                ->columns(2)
                ->schema([
                    Textarea::make('thank_you_phrase')
                        ->label('Thank You Phrase')
                        ->autosize()
                        ->default('Thank you for your feedback. We are sorry to hear that your experience was not satisfactory. Could you please let us know the reason for your rating?')
                        ->helperText(new HtmlString('Alternative suggestions:<br>
                            - We appreciate your honesty. We strive to improve and would like to understand what went wrong. Could you share more details about your experience?<br>
                            - Thank you for letting us know. We\'re sorry your experience wasn\'t great. Can you tell us what we can do mejor?<br>
                            - We value your feedback and apologize for not meeting your expectations. Could you please provide más información sobre lo que podemos mejorar?')),
                    TextInput::make('email')
                        ->email()
                        ->label('Email')
                        ->required(),
                ]),
        ]);
    }
}
