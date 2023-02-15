<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\LoginForm;
use app\models\Customer;

class AuthController extends Controller
{
    public function login(Request $request, Response $response)
    {
        $cuslogin = new LoginForm();
        if ($request->isPost()){
            $cuslogin->loadData($request->getBody());
            if ($cuslogin->validate() && $cuslogin->login()) {
                $response->redirect('/home');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $cuslogin
        ]);
    }

    public function register(Request $request)
    {
        $customer = new Customer();
        if ($request->isPost()){

            $customer->loadData($request->getBody());

            if ($customer->validate() && $customer->save()){
                Application::$app->session->setFlash('success', 'Registration Successfully!');
                Application::$app->response->redirect('/login');
                exit();
            }

            $this->setLayout('auth2');
            return $this->render('register', [
                'model' => $customer
            ]);
        }
        $this->setLayout('auth2');
        return $this->render('register', [
            'model' => $customer
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }
}