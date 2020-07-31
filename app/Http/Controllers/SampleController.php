<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;
use App\Jobs\TestQueue;

class SampleController extends Controller
{
    
    public function test_queue() {
	    // for($i=0; $i<=10; $i++){
        // Queue::push(new testQueue(array('queue' => $i)));
		// echo "successfully push";
        // }

        TestQueue::dispatch('sample')->onQueue('test_queue');
    }
}
