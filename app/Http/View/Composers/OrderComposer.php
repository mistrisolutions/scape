<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Status;
use App\Models\ShopOwner;
use App\Models\PaymentMethod;
use App\Models\Notification;
class OrderComposer 
{
   public function compose(View $view){
        $view->with('statuses',Status::all());
        $view->with('owners',ShopOwner::all());
        $view->with('methods',PaymentMethod::all());
   }
}
