<?php namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Osiset\ShopifyApp\Objects\Values\ShopDomain;
use stdClass;

use App\Models\User;
use App\Models\Option;

class OrderUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Shop's myshopify domain
     *
     * @var ShopDomain|string
     */
    public $shopDomain;

    /**
     * The webhook data
     *
     * @var object
     */
    public $data;

    /**
     * Create a new job instance.
     *
     * @param string   $shopDomain The shop's myshopify domain.
     * @param stdClass $data       The webhook data (JSON decoded).
     *
     * @return void
     */
    public function __construct($shopDomain, $data)
    {
        $this->shopDomain = $shopDomain;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Convert domain
        $this->shopDomain = ShopDomain::fromNative($this->shopDomain);

        $res = $this->data;

        $note_attr = $res->note_attributes;
        if($note_attr){
            $order_id = $res->id;
            $delivery_location_id = '';
        //  info('Response:', ['response' => $note_attr]);
            foreach($note_attr as $attr){
                if($attr->name == 'Delivery-Location-Id')
                {
                    $delivery_location_id = $attr->value;
                }
                
            }
        // info('Response:', ['response' => $delivery_location_id]);
            if($delivery_location_id != '')
            {
                $options = Option::where('delivery_location_id', $delivery_location_id)->first();
                if($options){
                        $tags = json_decode($options->tags, TRUE);
                    //  info('Response:', ['response' => $tags]);
                        $data['order'] = $tags;
                    //   info('Response:', ['response' => $this->shopDomain->toNative()]);
                        $shop = User::where("name",$this->shopDomain->toNative())->first();
                        $response = $shop->api()->rest('PUT', '/admin/api/orders/'.$order_id.'.json', $data);
                    //   info('Response:', ['response' => $response]);
                    http_response_code(200);
                }else{
                    http_response_code(200);
                }
            }

       }else{
         http_response_code(200);
       }

        // Do what you wish with the data
        // Access domain name as $this->shopDomain->toNative()
    }
}
