<?php

namespace App\Http\Controllers\User\Admin\Employer\Worker;

use App\Http\Controllers\Controller;
use App\{Admin, Employer, Worker};

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Admin $admin, Employer $employer, Worker $worker)
    {
        return view(
            'user.admin.employer.worker.edit',
            [
                'admin' => $admin,
                'employer' => $employer,
                'worker' => $worker,
            ]
        );    
    }
}
