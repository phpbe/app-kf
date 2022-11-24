<?php

namespace Be\App\Kf;


class Property extends \Be\App\Property
{

    protected string $label = '客服';
    protected string $icon = 'bi-chat-dots';
    protected string $description = '在线客服';

    public function __construct() {
        parent::__construct(__FILE__);
    }

}
