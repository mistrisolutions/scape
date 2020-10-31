<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

use App\Models\Notification;
class OrderComposer 
{
   public function compose(View $view){
      //   /dd($view->getName());
         //dd($view->getName());
         $view->with('notifications',Notification::checkAuth()->latest('id')->limit(5)->get());

   }
}
