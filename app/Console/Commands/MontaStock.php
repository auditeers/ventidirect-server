<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class MontaStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monta:stock';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get available stock at Monta';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $products = Product::whereNotNull('internal_id')->get();

        foreach($products as $product) {

            $montaData = [];

            $product_stock = $this->callMonta('GET', 'product/' . $product->internal_id . '/stock' , $montaData);

            $this->info($product_stock->Stock->StockAvailable);
            $this->newLine();


            if(!empty($product_stock->Stock->StockAvailable)) {
                $product->stock = $product_stock->Stock->StockAvailable;
            } else {
                $product->stock = 0;
            }

        }
        
        return 0;
    }

    
    private function callMonta($method, $service, array $data)
    {
        $monta_endpoint = "https://api.montapacking.nl/rest/v5/";
        $monta_user = "ventidirectMAURICE";
        $monta_pass = "7$78EUH#OOFU";

        $url = $monta_endpoint . $service;

        $curl = curl_init();

        // data is an array
        $data = json_encode($data);

        switch ($method){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;

            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
                break;

            default:
                if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
        }
                
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_USERPWD, $monta_user . ":" . $monta_pass);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        
        if(!$result){die("Connection Failure");}
        
        curl_close($curl);


        
        return json_decode($result);
    }
}
