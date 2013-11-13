<?php
namespace Jacker\PusherExtension;

use Jacker\PusherExtension\Pusher;

interface PusherAwareInterface
{
    public function setPusher(Pusher $pusher);
}
