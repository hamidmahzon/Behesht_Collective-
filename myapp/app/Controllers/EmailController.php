<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class EmailController extends Controller
{dd();
    public function send()
    {
        dd('H');
        helper('form');
        helper('url');
cecdc
        // Load the email library
        $email = new Email();

        // Set the email parameters
        $email->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        $email->setTo('zero@hamidmahzon.com');
        $email->setSubject($this->request->getPost('subject'));
        $email->setMessage($this->request->getPost('message'));

        // Attempt to send the email
        if ($email->send()) 
        {
            // Email sent successfully
            dd('success', 'Email sent successfully!');
        }
        else 
        {
            dd('error', 'Failed to send email. Error');
        }
    }
}