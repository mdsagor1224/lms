<?php

use Illuminate\Support\Facades\Auth;


function permission_check($permission){
    if(!Auth::user()->hasPermissionTo($permission)){
        flash()->addWarning('You don\'t have the permission');
        return redirect()->back();

    }
    
}