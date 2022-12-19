<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Adresa uživatele
     *
     * @var string|null
     */
    protected $user;

    /**
     * Obsah zprávy
     *
     * @var string|null
     */
    protected $message;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $user, string $message)
    {
        $this->user = $user;
        $this->message = $message;
    }
    
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Contact Message',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    /**
     * Nakonfiguruj danou zprávu.
     *
     * @return $this
     */
    public function build(): ContactMessage
    {
        return $this->markdown('emails.contact', [
            'message' => $this->message,
        ])->subject('Email z kontaktního formuláře')->from($this->user);
    }



}
