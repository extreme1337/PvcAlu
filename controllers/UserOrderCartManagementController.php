<?php

namespace App\controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UserOrderCartManagementController extends \App\Core\Role\UserRoleController{
    private $orderId;
    public function index(){
        $orderModel =new \App\models\OrderCartModel($this->getDatabaseConnection());
        $order = $orderModel->stateUObradi();
        $this->set('orders',$order);

    }

    public function postIndex(){
        $order = \filter_input(INPUT_POST, 'order_cart_id', FILTER_SANITIZE_NUMBER_INT);

        $this->redirect(\Configuration::BASE . 'user/orders/edit/'.$order);
        $orderId = $order;
    }

    public function odobravanje($orderId){
        $orderCartModel = new \App\models\OrderCartModel($this->getDatabaseConnection());
        $orderCart = $orderCartModel->selectAllFromOrder($orderId);
        $this->set('odobravanje',$orderCart);
        $models = $orderCartModel->modelNamePriceForModel($orderCart[0]['cart_id']);
        $this->set('modeli',$models);
        $order = \filter_input(INPUT_POST, 'proces', FILTER_SANITIZE_STRING);

    }
    
    
    public function postOdobravanje($orderId){
        $orderCartModel = new \App\models\OrderCartModel($this->getDatabaseConnection());
        $order = $orderCartModel->selectAllFromOrder($orderId);
        $email = $order[0]['email'];
        $update1 = $order[0]['order_cart_id'];
        
        $cartId = $order[0]['cart_id'];
        
        $models = $orderCartModel->modelNamePriceForModel($cartId);
        $suma = $orderCartModel->suma($models[0]['price_for_model']);
        $stanje = $order[0]['state'];
        $order1 = \filter_input(INPUT_POST, 'proces', FILTER_SANITIZE_STRING);
        $update = $orderCartModel->updateState($order1,$update1);
        $string2 = "";
        foreach($models as $niz){
            $string2 .= $niz['name']."  Cena proizvoda: ".$niz['price_for_model']." RSD \n";
        }

        $mail = new PHPMailer(true);
            try{
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = \Configuration::MAIL_HOST;  
                $mail->SMTPAuth = true;                               
                $mail->Username = \Configuration::MAIL_USERNAME;                 
                $mail->Password = \Configuration::MAIL_PASSWORd;
                $mail->SMTPSecure = \Configuration::MAIL_PROTOCOL;                            
                $mail->Port = \Configuration::MAIL_PORT;        
                                            

                //Recipients
                $mail->setFrom(\Configuration::MAIL_USERNAME);
                $mail->addAddress($email); 

        
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $string = '<!doctype html><html><head><meta charset="utf-8"></head><body>';
                $string = 'Proizvodi koje zelite da narucite: '.\htmlspecialchars($string2).'  ';
                $string .= 'Ukupna cena je: '.\sprintf("%.2f",$suma['suma']).'  ';
                $string .= 'Vasa porudzbina je '.$stanje;
                if($stanje == 'odobrena'){
                    $string .= 'I poslata je na '.$order[0]['residential_address'];
                }
                $string .= '</body></html>';
            
                $mail->Body    = $string;
                $mail->send();
                header('Location: '.\Configuration::BASE);
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
           }
    }
}