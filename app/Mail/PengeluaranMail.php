<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PengeluaranMail extends Mailable
{
    use Queueable, SerializesModels;
    public $jumlah;
    public $deskripsi;
    public $anggaran;
    // public $;

    public function __construct($jumlah, $keterangan, $anggaran)
    {
        $this->jumlah    = $jumlah;
        $this->deskripsi = $keterangan;
        $this->anggaran  = $anggaran;
    }

    public function build()
    {
        return $this->subject("Notifikasi Terbaru Aktivitas Pengeluaran")
            ->view('email.PengeluaranMail')
            ->with([
                'jumlah'     => $this->jumlah,
                'keterangan' => $this->deskripsi,
                'anggaran'   => $this->anggaran,
            ]);
    }
}