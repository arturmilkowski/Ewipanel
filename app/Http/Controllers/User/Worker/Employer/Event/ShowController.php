<?php

namespace App\Http\Controllers\User\Worker\Employer\Event;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Carbon\Carbon;
use App\{Worker, Employer, Event};

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(
        Worker $worker,
        Employer $employer,
        Event $event,
        string $yearMonth
    ) {
        return view(
            'user.worker.employer.event.show',
            [
                'worker' => $worker,
                'employer' => $employer,
                'event' => $event,
                'year_month' => $yearMonth,
            ]
        );
    }
}
