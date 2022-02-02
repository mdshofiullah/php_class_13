<?php


namespace App\classes;


class User
{

    protected $user = [];
   public function getAllUser()
   {
       $this->user = [
           0 => [
               'name'      => 'Shofi',
               'mobile'    => '1234565',
               'location'  => 'Lalbagh'
           ],
           1 => [
             'name'     =>  'rafiq',
             'mobile'   => '6498774',
             'location' => 'Islambag',
           ],
       ];
       return $this->user;
   }


}