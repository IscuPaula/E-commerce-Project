<?php

class Email_model extends CI_Model {

    function send_vanzator($to,$detalii_produs) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp-relay.sendinblue.com',
            'smtp_port' => 587,
            'smtp_user' => 'cc.store.no.reply@gmail.com',
            'smtp_pass' => 'P7XMdr6TnOmNEfbJ'
          );
          
        $message = 'Cineva a cumparat produsul dvs. Detalii produs: ' . "\r\n";
        $message = $message . "Titlu: " . $detalii_produs->title . "\r\n";
        $message = $message . "Pret: " . $detalii_produs->price . "\r\n";
        $message = $message . "Descriere: " . $detalii_produs->description . "\r\n";
        
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('cc.store.no.reply@gmail.com');
        $this->email->to($to);
        $this->email->subject('Produsul dvs a fost cumparat');
        $this->email->message($message);
        if($this->email->send())
        {
            echo 'Email sent.';
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }

    function send_cumparator($to, $mesaj) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp-relay.sendinblue.com',
            'smtp_port' => 587,
            'smtp_user' => 'cc.store.no.reply@gmail.com',
            'smtp_pass' => 'P7XMdr6TnOmNEfbJ'
          );
        
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('cc.store.no.reply@gmail.com');
        $this->email->to($to);
        $this->email->subject('Comanda plasata');
        $this->email->message($mesaj);
        if($this->email->send())
        {
        echo 'Email sent.';
        }
        else
        {
        show_error($this->email->print_debugger());
        }
    }
}