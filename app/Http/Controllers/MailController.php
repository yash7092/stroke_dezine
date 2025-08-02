<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = env('MAIL_SMTP_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_SMTP_USERNAME');
            $mail->Password   = env('MAIL_SMTP_PASSWORD');
            $mail->SMTPSecure = env('MAIL_SMTP_ENCRYPTION');
            $mail->Port       = env('MAIL_SMTP_PORT');

            $mail->setFrom(env('MAIL_SMTP_USERNAME'), env('MAIL_SENDER_NAME'));
            $mail->addReplyTo($email, $name);
            $mail->addAddress(env('MAIL_RECEIVER_EMAIL'));


            $mail->isHTML(true);
            $mail->Subject = "New Contact Request from {$name}";
            $mail->Body = view('emails.contact', compact('name', 'email', 'subject', 'message'))->render();

            $mail->send();

            return response()->json(['status' => 'success']);
        } catch (Exception $e) {
            return response()->json(['status' => 'error', 'message' => $mail->ErrorInfo]);
        }
    }
}
