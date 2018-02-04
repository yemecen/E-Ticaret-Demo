<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Product;

class ProductImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Product xml import';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //CLI dan veritabanına import yapılacak xml'in dosyanın yolunu alıyoruz. 
        $xmlUrl = $this->ask("Veritabanına Import yapılacak xml dosyanın yolunu(örn: C:\simple.xml) yazınız.");

        $xml = simplexml_load_file($xmlUrl);

        //Xml'in içeriğini satır satır okuyup, veritabanına aktarıyoruz. Image resize ı sonradan ekleyeceğim.
        foreach ($xml->product as $value) {
            $newProduct = new Product;
            $newProduct->id = $value->id;
            $newProduct->name = $value->name;
            $newProduct->description = $value->description;
            $newProduct->brandId = $value->brandId;
            $newProduct->brandName = $value->brandName;
            $newProduct->categoryId = $value->categoryId;
            $newProduct->categoryName = $value->categoryName;
            $newProduct->sku = $value->sku;
            $newProduct->stock = $value->stock;
            $newProduct->tax = $value->tax;
            $newProduct->category = $value->categories->category;
            $newProduct->image = $value->images->image;
            $newProduct->price = $value->price;
            $newProduct->priceNot = $value->priceNot;
            $newProduct->save();
        }

        $this->info("Xml'de bulunan veriler, veritabanına aktarıldı!");
    }
}
