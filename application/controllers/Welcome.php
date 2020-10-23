<?php 
   class Welcome extends CI_Controller { 

      function __construct() { 
         parent::__construct(); 
          //load helper form
         $this->load->helper('form'); 
      } 

      public function index() { 

         // $this->load->helper('form'); 
         $this->load->view('home'); 

      } 

      public function send_mail() { 

         $from_email = "dannywaskito14@gmail.com"; 
         $to_email = $this->input->post('email'); 
         $subject = $this->input->post('subject'); 
         $message = $this->input->post('message'); 

            $this->load->library('email');
            $this->email->set_newline("\r\n");   

         $this->email->from($to_email); 
         $this->email->to($from_email, 'Danny Waskito');
         $this->email->subject($subject); 
         $this->email->message($message); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim.");
                $this->load->view('home');  
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                $this->load->view('home'); 
         } 
      }
} 