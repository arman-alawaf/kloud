<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'type' => 'Residentials',
                'plan' => '35',
                'name' => 'Kloud Mini',
                'price' => '699',
                'feature' => 'Bufferless Browsing Content Server (KloudNix, BDIX),24/7 Customer Support,IPV6 Available,Free Installation',
                'created_by' => 1,
            ],
            [
                'type' => 'Residentials',
                'plan' => '55',
                'name' => 'Kloud Neo',
                'price' => '999',
                'feature' => 'Including Kloud Mini & Stream Bufferless Streaming Site,Low Latency Popular Games,24/7 Customer Support,Free Installation',
                'created_by' => 1,
            ],
            [
                'type' => 'Residentials',
                'plan' => '45',
                'name' => 'Kloud Stream',
                'price' => '899',
                'feature' => 'Including Kloud Mini Highspeed - KloudNix & BDIX,4k Streaming,24/7 Customer Support,Free Installation',
                'created_by' => 1,
            ],
            [
                'type' => 'Business',
                'plan' => '75',
                'name' => 'Kloud Boost +',
                'price' => '1499',
                'feature' => 'Including Kloud Neo Topnotch Browsing Speed,Topnotch Speed (KloudNix,BDIX),24/7 Customer Support,Free Installation',
                'created_by' => 1,
            ],
            [
                'type' => 'Business',
                'plan' => '85',
                'name' => 'Kloud Gamers',
                'price' => '1399',
                'feature' => 'Including Kloud Boost+ Local Cache - Popular Games,Low Latency Popular Games,24/7 Customer Support,Free Installation',
                'created_by' => 1,
            ],
            [
                'type' => 'Business',
                'plan' => '100',
                'name' => 'Kloud Edge',
                'price' => '1899',
                'feature' => 'Including Boost+ & Gamers Topnotch Speed (KloudNix,BDIX),4k Streaming,24/7 Customer Support,Free Installation',
                'created_by' => 1,
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
