<?php

declare(strict_types = 1);

namespace App\Http\Controllers\User\Worker\Employer\Event;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\{Worker, Employer, Legend};

class CreateController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Worker   $worker    Worker
     * @param Employer $employer  Employer
     * @param string   $yearMonth Year and month. Format: YYYY-MM
     * 
     * @return \Illuminate\Http\Response
     */
    public function __invoke(
        Worker $worker,
        Employer $employer,
        string $yearMonth
    ): View {
        return view(
            'user.worker.employer.event.create', 
            [
                'worker' => $worker,
                'employer' => $employer,
                'year_month' => $yearMonth,
                'legends' => Legend::allSortBy(),
                'workers' => Worker::all__(),
            ]
        );
    }
}
