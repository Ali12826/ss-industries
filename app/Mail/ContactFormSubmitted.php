<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        // This accepts the saved database row data
        $this->contact = $contact;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Website Inquiry: ' . $this->contact->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            htmlString: "
                <div style='font-family: Arial, sans-serif; padding: 20px; color: #333;'>
                    <h2 style='color: #0056b3;'>New Message from ssindustriespharma.com</h2>
                    <hr style='border: 0; border-top: 1px solid #ccc;'>
                    <p><strong>Name:</strong> {$this->contact->name}</p>
                    <p><strong>Phone Number:</strong> " . ($this->contact->phone ?? 'Not provided') . "</p>
                    <p><strong>Email Address:</strong> {$this->contact->email}</p>
                    <p><strong>Message:</strong></p>
                    <div style='background: #f4f4f4; padding: 15px; border-left: 4px solid #0056b3;'>
                        " . nl2br(e($this->contact->message)) . "
                    </div>
                </div>
            "
        );
    }
}