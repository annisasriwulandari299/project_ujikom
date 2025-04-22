<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PemasukanMail extends Mailable
{
    use Queueable, SerializesModels;
    public $jumlah;
    public $deskripsi;

    public function __construct($jumlah, $keterangan)
    {
        $this->jumlah    = $jumlah;
        $this->deskripsi = $keterangan;
    }

    public function build()
    {
        return $this->subject("Notifikasi Terbaru Aktivitas Pemasukan")
            ->view('email.PemasukanMail')
            ->with([
                'jumlah'     => $this->jumlah,
                'keterangan' => $this->deskripsi,
            ]);
    }
}