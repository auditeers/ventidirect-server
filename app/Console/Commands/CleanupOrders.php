<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class CleanupOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'venti:cleanorders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cleans old orders';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $cleantime = date('Y-m-d H:i:s', strtotime('-4 hours'));
        $orders = Order::where('updated_at', '<', $cleantime)->where('paid', false)->get();

        foreach($orders as $order) {
            $order->delete();
        }

        return "done";
    }
}
