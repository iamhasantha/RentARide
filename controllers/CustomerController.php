<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\CusProfile;
use app\models\Customer;
use app\models\VehBooking;
use app\models\Vehicle;
use app\models\VehInfo;

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
        $vehicle = Vehicle::retrieveAll();
        $params = [
            'model' => $vehicle
        ];

        $this->setLayout('cus');
        return $this->render('customer/cusHome', $params);
    }

    public function profile(Request $request, Response $response)
    {

        $id=Application::$app->customer->cus_Id;
        $customer=Customer::findOne(['cus_Id'=>$id]);


        if ($request->isPost()){
            $customer->loadData($request->getBody());
            if ($customer->validateWith(['firstname','lastname','address']) && $customer->update($id,['firstname','lastname', 'phoneno', 'address'])){
                Application::$app->session->setFlash('profileUpdate', 'Profile Updated Successfully!');
                $response->redirect('/profile');
                return;
            }
            Application::$app->session->setFlash('profileUpdateErr', 'There was some error in updating your profile!');
            $this->setLayout('cus');
            return $this->render('Customer/profile',[
                'model'=>$customer,
            ]);

        }

        $this->setLayout('cus');
        return $this->render('Customer/profile',[
            'model'=>$customer,
            'FirstName'=>$customer->firstname,
        ]);
    }

    public function VehicleBooking(Request $request, Response $response)
    {

        $vehBooking = new VehBooking();
        if ($request->isPost()){
            $vehBooking->loadData($request->getBody());
            echo '<pre>';
            var_dump($vehBooking);
            echo '</pre>';
            exit();
            if ($vehBooking->save()){
                Application::$app->session->setFlash('bookingSuccess', 'Booking Request send successfully!');
                $response->redirect('/home');
                return;
            }
            Application::$app->session->setFlash('bookingErr', 'There was some error in booking your vehicle!');
            $this->setLayout('cus');
            return $this->render('Customer/cusBooking',[
                'model'=>$vehBooking,
            ]);
        }

        $params = [
            'model' => $vehBooking
        ];
        $this->setLayout('cus');
        return $this->render('Customer/cusBooking', $params);
    }

    public function vehicleInfo(Request $request, Response $response)
    {
        $id=$request->getBody()['id'];


        if($request->isGet()){
            $vehInfo = VehInfo::findOne(['veh_Id' => $id]);
            $vehicle = Vehicle::findOne(['veh_Id' => $id]);
            $vehBooking = new VehBooking();

            $type=$request->getBody()['type'] ?? '';
            if ($type==='submit'){
                $location=$request->getBody()['location'];
                $start_date=$request->getBody()['startDate'];
                $end_date=$request->getBody()['endDate'];
//                $vehBooking = new VehBooking();

                $params = [
                    'vehInfo' => $vehInfo,
                    'vehicle' => $vehicle,
                    'vehBooking' => $vehBooking,
                    'location'=>$location,
                    'start_date'=>$start_date,
                    'end_date'=>$end_date,
                    'model' => $vehBooking
                ];
                $this->setLayout('cus');
                return $this->render('Customer/cusBooking', $params);

                if ($request->isPost()){
                    $vehBooking->loadData($request->getBody());
                    echo '<pre>';
                    var_dump($vehBooking);
                    echo '</pre>';
                    exit();
                    if ($vehBooking->save()){
                        Application::$app->session->setFlash('bookingSuccess', 'Booking Request send successfully!');
                        $response->redirect('/home');
                        return;
                    }
                    Application::$app->session->setFlash('bookingErr', 'There was some error in booking your vehicle!');
                    $this->setLayout('cus');
                    return $this->render('Customer/cusBooking',[
                        'model'=>$vehBooking,
                    ]);
                }

            }else{
                $params = [
                    'vehInfo' => $vehInfo,
                    'vehicle' => $vehicle,
                    'vehBooking' => $vehBooking
                ];
                $this->setLayout('cus');
                return $this->render('Customer/vehicleInfo', $params);
            }
        }


//        if ($request->isPost()){
//
//            $vehBooking->loadData($request->getBody());
//            if ($vehBooking->save()){
//                Application::$app->session->setFlash('bookingSuccess', 'Booking Request send successfully!');
//                $response->redirect('/home');
//                return;
//            }
//            Application::$app->session->setFlash('bookingErr', 'There was some error in booking your vehicle!');
//            $this->setLayout('cus');
//            return $this->render('Customer/vehicleInfo',[
//                'vehInfo'=>$vehInfo,
//                'vehicle'=>$vehicle,
//                'vehBooking'=>$vehBooking,
//            ]);
//
//        }
    }

    public function vehicleBookingTable(Request $request, Response $response)
    {
        $id=$request->getBody()['id'];

        $vehbooking = VehBooking::findOne(['veh_Id' => $id]);



        $this->setLayout('cus');
        return $this->render('Customer/cusBookingTable');
    }
}