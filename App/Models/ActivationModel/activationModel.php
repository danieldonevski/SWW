<?php
namespace App\Models\ActivationModel;

class activationModel
{
    private $accode;

    public function __construct( $accode )
    {
        $app = \Yee\Yee::getInstance();
        $this->accode = $accode;

        $app-> db[ 'default' ]-> where ( 'activationcode' , $this->accode );
        $app-> db[ 'default' ]-> where ( 'active', 0 );

        $return = $app-> db[ 'default' ]-> getOne( 'users' );
        if ( NULL == $return )
        {
            return false;
        }
        return $return;

    }
    public function activeUser( $userData )
    {
        $app = \Yee\Yee::getInstance();

        $data= array
        (
            'activationCode'=> '',
            'active'=> 1,
        );
        $app->db[ 'default' ]-> where ( 'email' , $userData [ 'email' ]);
        $app->db[ 'default' ]-> update( 'users' ,$data);

    }
}
/**
 * Created by PhpStorm.
 * User: daniel donevski
 * Date: 19.7.2016 г.
 * Time: 10:13
 */