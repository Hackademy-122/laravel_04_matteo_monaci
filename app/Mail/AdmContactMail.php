<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class AdmContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $text;

    public function __construct($_email, $_name, $_text)
    {
        $this->email=$_email;
        $this->name=$_name;
        $this->text=$_text;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, $this->name),
            subject: 'Sei stato contattato',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact_mail_adm',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}