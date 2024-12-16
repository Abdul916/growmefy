<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReviewRequest\ReviewRequestMail;
use Illuminate\Contracts\Console\Isolatable;

class SendQueuedEmails extends Command implements Isolatable
{
    protected $signature = 'app:emails-send';

    protected $description = 'Enviar correos electrónicos en cola';

    public function handle()
    {
        $maxEmails = config('mailsettings.max_emails_per_minute', 100);

        $emails = Email::where('status', 'queued')
            ->with('contact', 'template')
            ->limit($maxEmails)
            ->get();

        foreach ($emails as $email) {
            try {
                $contact = $email->contact;
                $template = $email->template;

                Mail::to($contact->email)->queue(new ReviewRequestMail($contact, $template));

                $email->update([
                    'status' => 'sent',
                    'sent_at' => now(),
                ]);
            } catch (\Exception $e) {
                $email->update(['status' => 'failed']);
                // Puedes registrar el error si lo deseas
            }
        }
    }
}
