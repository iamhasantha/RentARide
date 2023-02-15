<?php

namespace app\controllers;

use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->customerMiddleware(new AuthMiddleware(['profile']));
        $this->customerMiddleware(new AuthMiddleware(['home']));
        $this->customerMiddleware(new AuthMiddleware(['VehicleBooking']));
        $this->customerMiddleware(new AuthMiddleware(['vehicleInfo']));
        $this->customerMiddleware(new AuthMiddleware(['vehicleBookingTablephp']));
    }

    public function home(Request $request, Response $response)
    {
        $params = [
            'name' => "Hasantha Kariyawasam"
        ];

        $this->setLayout('cus');
        return $this->render('customer/cusHome', $params);
    }

    public function profile(Request $request, Response $response)
    {
        $this->setLayout('cus');
        return $this->render('Customer/profile');
    }

    public function VehicleBooking(Request $request, Response $response)
    {
        $this->setLayout('cus');
        return $this->render('Customer/cusBooking');
    }

    public function vehicleInfo(Request $request, Response $response)
    {
        $this->setLayout('cus');
        return $this->render('Customer/vehicleInfo');
    }

    public function vehicleBookingTable(Request $request, Response $response)
    {
        $this->setLayout('cus');
        return $this->render('Customer/cusBookingTable');
    }
}