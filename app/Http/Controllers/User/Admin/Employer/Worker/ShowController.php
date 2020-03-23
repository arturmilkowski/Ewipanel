<?php

namespace App\Http\Controllers\User\Admin\Employer\Worker;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Carbon\Carbon;
use App\{Admin, Employer, Worker};

class ShowController extends Controller
{
    /**
     * Show worker which work in employer which was assigned to admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Admin $admin, Employer $employer, Worker $worker): View
    {
        return view(
            'user.admin.employer.worker.show',
            [
                'admin' => $admin,
                'employer' => $employer,
                'worker' => $worker,
                'year_month' => Carbon::now()->format('Y-m'),
                'month_name' => Carbon::now()->monthName,
            ]
        );
    }
}
