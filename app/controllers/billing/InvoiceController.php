<?php
/**
 * Created by PhpStorm.
 * User: CarlosRenato
 * Date: 08/01/2015
 * Time: 02:55 PM
 */
namespace Billing;
use Repositories\Administrator\ProductRepository;
use Repositories\Administrator\ClientRepository;
class InvoiceController extends \BaseController
{

    //Change this with billing layout
    protected $layout = 'admin.layouts.main';
    protected $product;
    protected $client;

    public function __construct(ProductRepository $product, ClientRepository $client)
    {
        $this->product = $product;
        $this->client = $client;
    }

    public function getIndex(){
        $products = $this->product->lists();
        $clients = $this->client->lists();
        $this->layout->content = \View::make('billing.invoice', compact('products', 'clients'));
    }

}