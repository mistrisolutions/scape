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
      //   /dd($view->getName());
        if(!in_array($view->getName(), ['forntend.confirmation', 'forntendorder', 'fornend.tracking', 'auth.login','layouts.frontend.app','layouts.frontend.partials.header','backend.notifications.index'])) {
         //dd($view->getName());
         $view->with('notifications',Notification::checkAuth()->latest('id')->limit(5)->get());
     }

   }
}
