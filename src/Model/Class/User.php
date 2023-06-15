<?php

namespace Hetic\ReshomeH\Model\Class;
use Hetic\ReshomeH\model\Bases\BaseClass;

require_once '../../Factories/PDOFactory.php';

class User extends BaseClass
{
    private $first_name;
    private $last_name;
    private $email;
    private $phone_number;
    private $hashed_password;
    private $address;
    private $post_code;
    private $city;
    private $country;
    private $is_staff;
    private $is_logistic;
    private $is_admin;
    private $user_id;

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }

    public function register(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // init data
        $data = [
            'user_id' => trim($_POST['user_id']),
            'first_name' => trim($_POST['first_name']),
            'last_name' => trim($_POST['last_name']),
            'email' => trim($_POST['email']),
            'phone_number' => trim($_POST['phone_number']),
            'country' => trim($_POST['country']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            
        ];

        // validate input
        if(empty($data['user_id']) || empty($data['first_name'])
        || empty($data['last_name']) || empty($data['email']) 
        || empty($data['phone_number']) || empty($data['country']) 
        || empty($data['password']) || empty($data['confirm_password']) ){
            
        }


    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function getHashedPassword()
    {
        return $this->hashed_password;
    }

    public function setHashedPassword($hashed_password)
    {
        $this->hashed_password = $hashed_password;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPostCode()
    {
        return $this->post_code;
    }

    public function setPostCode($post_code)
    {
        $this->post_code = $post_code;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getIsStaff()
    {
        return $this->is_staff;
    }

    public function setIsStaff($is_staff)
    {
        $this->is_staff = $is_staff;
    }

    public function getIsLogistic()
    {
        return $this->is_logistic;
    }

    public function setIsLogistic($is_logistic)
    {
        $this->is_logistic = $is_logistic;
    }

    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
