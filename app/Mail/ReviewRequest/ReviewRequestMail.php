<?php

// app/Mail/ReviewRequest/ReviewRequestMail.php

namespace App\Mail\ReviewRequest;

use Illuminate\Mail\Mailable;

class ReviewRequestMail extends Mailable
{
    public $contact;
    public $template;

    public function __construct($contact, $template)
    {
        $this->contact = $contact;
        $this->template = $template;
    }

    public function build()
    {
        $variables = [
            '{name}' => $this->contact->name,
            '{email}' => $this->contact->email,
            '{business_name}' => $this->contact->business->name,
            // Agrega más variables si es necesario
        ];

        $body = str_replace(array_keys($variables), array_values($variables), $this->template->body);
        $subject = str_replace(array_keys($variables), array_values($variables), $this->template->subject);

        return $this->subject($subject)
                    ->view('emails.review_request')
                    ->with('body', $body);
    }
}
