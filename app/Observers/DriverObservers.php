<?php

namespace App\Observers;

use App\Models\Driver;

class DriverObservers
{

//    public function creating(Driver $driver)
//    {
//        $driver->createToken('login');
//        return response()->json(
//            [
//                'token' =>$driver,
//
//            ]
//        );
//    }

    /**
     * Handle the Driver "created" event.
     */
    public function created(Driver $driver): void
    {
        //
    }

    /**
     * Handle the Driver "updated" event.
     */
    public function updated(Driver $driver): void
    {
        //
    }

    /**
     * Handle the Driver "deleted" event.
     */
    public function deleted(Driver $driver): void
    {
        //
    }

    /**
     * Handle the Driver "restored" event.
     */
    public function restored(Driver $driver): void
    {
        //
    }

    /**
     * Handle the Driver "force deleted" event.
     */
    public function forceDeleted(Driver $driver): void
    {
        //
    }
}
