<?php 

namespace App\Controller\Patterns\Builder\Second;

class AuctionC
{
    public function printSelf()
    {
        var_dump(get_object_vars($this));
    }
}