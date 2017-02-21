<?php


class PayShortCut {

    protected static $endPoint = 'http://localhost/rocky/payshortcut.net/';

    function __construct(){  
        self::$endPoint =  'http://payshortcut.net/'; 
    }

    /**
     * @param $postMember
     * @return mixed
     * example Input:
     * $memberInfo = [
        'first_name' =>  '1eJesus Erwin',
        'last_name' =>  '1weSuarez',
        'email' =>  'mrjesuserwinsuarez@gmail.com',
        'telephone' =>  '+639069262984',
        'country' =>  'Philippines',
        'post_code' =>  '9200',
        'address' =>  'Mimbalot Buru un, Iligan City',
        'look_up' =>  'Nothing to look up',
        'uniform_number' =>  '1234567890',
        'status' => 'subscribed',
        ];
     */
    public static function createMember($postMember)
    {
        $member  = curlPostRequest($postMember, self::$endPoint . 'api/member/create' );
        return $member;
    }

    /**
     * @param $postOrder
     * @return mixed
     * Example Input:
     *
        $orderInfo = [
        'status' => 'success',
        'merchant_id' => '1234567',
        'version' => '1.1',
        'response_type' => 'String',
        'check_value' => '1234456789',
        'time_stamp' => date("Y-m-d h:i:s"),
        'merchant_order_no' => '123',
        'amt' => '100',
        'hash_key' => '1234dasda',
        'hash_iv' => 'ASD123',
        'trade_no' => '12321',
        'token_value' => '2asdasd',
        'token_life' => '1233232',
        ];
     */
    public static function createOrder($postOrder)
    {
        $order = curlPostRequest($postOrder, self::$endPoint . 'api/order/create' );
        return $order;
    }

    /**
     * @param $postMember
     * @param $postOrder
     * @return array
     */
    public static function createOrUpdateMemberAndCreateOrder($postMember, $postOrder)
    {
        $member = self::createMember($postMember);

        $postOrder['member_id'] = $member['id'];

        $order  = self::createOrder($postOrder);

        return array_merge($order, $member);
    }
}