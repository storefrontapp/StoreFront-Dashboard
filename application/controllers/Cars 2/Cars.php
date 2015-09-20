<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cars extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->user->checkUser();

    }

    function index(){


        $data = array();

        $result = $this->db->query("SELECT * FROM `addnewtaxi` ORDER BY `taxinum`");
        $count  = $result->num_rows();

        if($count==0){
            $data['cars'] =array();
        }else{
            $data['cars'] = $result->result_array();
        }


        $this->load->view('common/header');
        $this->load->view('cars/manage.php',$data);
        $this->load->view('common/footer.php');

    }

    function add() {
        
        $data = array();

        if($this->input->post('sf')=='1'):

        	$car_number     = $this->input->post('car_number');
            $driver_phone   = $this->input->post('driver_phone');
            $image          = $_FILES['image'];
            $fare_price     = $this->input->post('fare_price');
            
            $address1       = $this->input->post('address1');

            $city           = $this->input->post('city');
            $state          = $this->input->post('state');
            $email          = $this->input->post('email');
            $status         = $this->input->post('status');

            $description    = $this->input->post('description');

            $date_start     = $this->input->post('start_date');
            $time_start     = $this->input->post('start_time');
            $date_end       = $this->input->post('end_date');
            $time_end       = $this->input->post('end_time');
            $status         = $this->input->post('status');


            $errors = '';
            if($car_number=='')     { $errors .= '<li>Enter Car Number</li>'; }
            if($driver_phone=='')   { $errors .= '<li>Enter Driver Phone Number</li>'; }
            if($image['name']=='')  { $errors .= '<li>Upload Car Image</li>'; }
            if($fare_price=='')     { $errors .= '<li>Enter Car hourly fare price</li>'; }

            if($address1==''){ $errors .= '<li>Enter Address Line 1</li>'; }

            if($city==''){ $errors .= '<li>Enter City Name</li>'; }
            if($state==''){ $errors .= '<li>Enter State</li>'; }
            if($email==''){ $errors .= '<li>Enter Email Address</li>'; }else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $errors .= '<li>Please enter valid email address</li>';
                }
            }
            if($status==''){ $errors .= '<li>Enter availability</li>'; }


            if($date_start==''){ $errors .= '<li>Select Start Date</li>'; }
            if($time_start==''){ $errors .= '<li>Enter Start Time</li>'; }
            if($date_end==''){ $errors .= '<li>Select End Date</li>'; }
            if($time_end==''){ $errors .= '<li>Enter Time</li>'; }


            if($errors!=''){
                $data['error'] = '<div class="alert alert-danger"><ul>'.$errors.'</ul></div>';
            }else{

                $result = $this->db->query("
                SELECT * FROM addnewtaxi WHERE LCASE(taxinum) = LCASE('{$car_number}')
                ");
                $count  = $result->num_rows();

                if($count!=''){
                    $data['error'] = '<div class="alert alert-danger">Car Number Already Exists in database</div>';
                }else{


                    $file_status = @move_uploaded_file($image['tmp_name'], 'uploads/'.$image['name']);

                    if($file_status!=true){

                        $data['error'] = "<div class=\"alert alert-danger\">Unable to upload image , try again later</div>";

                    }else{


                        $result = $this->db->query("
                        INSERT INTO `addnewtaxi` SET 
                            `taxinum` = '{$car_number}',
                            `taxiImg` = '".$image['name']."',
                            `driverNum` = '{$driver_phone}',
                            `rent` = '{$fare_price}',
                            `address` = '{$address1}' ,
                            `city` = '{$city}',
                            `state` = '{$state}',
                            `email` = '{$email}',
                            `start_date` = '{$date_start}',
                            `end_date` = '{$date_end}',
                            `start_time` = '{$time_start}',
                            `end_time` = '{$time_end}',
                            `any_other_desc` = '{$description}',
                            `availability` = '{$status}'
                        ");


                        $data['error'] = '<div class="alert alert-success">Success</div>';
                        $data['flush']  = true;
                    }
                    





                }

            }


        endif;

        $this->load->view('common/header');
        $this->load->view('cars/add',$data);
        $this->load->view('common/footer.php');
    }


    function edit($car_number) {
        
        $data = array();

        if($this->input->post('sf')=='1'):

            
            $driver_phone   = $this->input->post('driver_phone');
            $image          = $_FILES['image'];
            $fare_price     = $this->input->post('fare_price');
            
            $address1       = $this->input->post('address1');
           

            $city           = $this->input->post('city');
            $state          = $this->input->post('state');
            $email          = $this->input->post('email');
            $status         = $this->input->post('status');

            $description    = $this->input->post('description');

            $date_start     = $this->input->post('start_date');
            $time_start     = $this->input->post('start_time');
            $date_end       = $this->input->post('end_date');
            $time_end       = $this->input->post('end_time');


            $errors = '';
           
            if($driver_phone=='')   { $errors .= '<li></li>'; }
            
            if($fare_price=='')     { $errors .= '<li></li>'; }

            if($address1==''){ $errors .= '<li>Enter Address Line 1</li>'; }
           

            if($city==''){ $errors .= '<li>Enter City Name</li>'; }
            if($state==''){ $errors .= '<li>Enter State</li>'; }
            if($email==''){ $errors .= '<li>Enter Email Address</li>'; }else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $errors .= '<li>Please enter valid email address</li>';
                }
            }
            if($status==''){ $errors .= '<li></li>'; }


            if($date_start==''){ $errors .= '<li>Select Start Date</li>'; }
            if($time_start==''){ $errors .= '<li>Enter Start Time</li>'; }
            if($date_end==''){ $errors .= '<li>Select End Date</li>'; }
            if($time_end==''){ $errors .= '<li>Enter Time</li>'; }


            if($errors!=''){
                $data['error'] = '<div class="alert alert-danger"><ul>'.$errors.'</ul></div>';
            }else{

                $result = $this->db->query("
                SELECT * FROM addnewtaxi WHERE LCASE(taxinum) = LCASE('{$car_number}')
                ");
                $count  = $result->num_rows();

                if($count!=''){
                    $data['error'] = '<div class="alert alert-danger">Car Number Already Exists in database</div>';
                }else{


                    if($image['name']!=''){
                        $file_status = @move_uploaded_file($image['tmp_name'], 'uploads/'.$image['name']);
                        $this->db->query("UPDATE `addnewtaxi` SET `taxiImg` = '".$image['name']."' WHERE MD5(`taxinum`)='{$car_number}'");
                    }

                    $result = $this->db->query("
                    UPDATE `addnewtaxi` SET 
                        `driverNum` = '{$driver_phone}',
                        `rent` = '{$fare_price}',
                        `address` = '{$address1}',
                        `city` = '{$city}',
                        `availability` = '{$state}',
                        `email` = '{$email}',
                        `start_date` = '{$date_start}',
                        `end_date` = '{$date_end}',
                        `start_time` = '{$time_start}',
                        `end_time` = '{$time_end}',
                        `any_other_desc` = '{$description}',
                        `availability` = '{$status}'
                    WHERE 
                        MD5(`taxinum`) = '{$car_number}'
                    ");


                    $data['error'] = '<div class="alert alert-success">Success</div>';
                 
                    
                }

            }


        endif;


        $result = $this->db->query("SELECT * FROM `addnewtaxi` WHERE MD5(`taxinum`) = '{$car_number}'");
        $count  = $result->num_rows();
        if($count==0){
            header("Location: ".base_url('cars'));
        }else{  
            $car = $result->result_array();
            $data['car'] = $car[0];
        }


        $this->load->view('common/header');
        $this->load->view('cars/edit',$data);
        $this->load->view('common/footer.php');
    }


    function delete($num){
        $this->db->query("DELETE FROM `addnewtaxi` WHERE md5(`taxinum`)='{$num}'");
        header("Location: ".base_url().'cars/');
    }





}
        
?>