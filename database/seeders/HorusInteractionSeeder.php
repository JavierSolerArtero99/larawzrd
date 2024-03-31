<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Wzrd\HorusDomain\Model\InteractionInterface;

class HorusInteractionSeeder extends Seeder
{
    /** * Run the database seeds. * * @return void */
    public function run()
    {
        $numRecords = 100;
        for ($i = 0; $i < $numRecords; $i++) {
            $data = [
                'api_key' => $this->randomApiKey(),
                'device_id' => rand(0, 10) . "",
                'device_brand' => $this->randomDeviceBrand(),
                'device_model' => $this->randomDeviceModel(),
                'device_sdk' => rand(0, 10) . "",
                'path' => '/path/to/page',
                'platform' => $this->randomPlatform(),
                'screen_width' => rand(800, 1920),
                'screen_height' => rand(600, 1080),
                'xdpi' => rand(200, 500),
                'ydpi' => rand(200, 500),
                'app' => rand(1, 3),
                'timestamp' => now()->toDateTimeString()];
            DB::table('horus_interaction')->insert($data);
        }
    }

    /** * Retorna una marca de dispositivo aleatoria. * * @return string */
    private function randomApiKey()
    {
        $apiKey = [
            'nnasdlaksdfoiña',
            'bnmsjjkjanbvhjo',
            'mmnbcoslakkdldl'];
        return $apiKey[array_rand($apiKey)];
    }

    /** * Retorna una marca de dispositivo aleatoria. * * @return string */
    private function randomDeviceBrand()
    {
        $brands = ['Apple',
            'Samsung',
            'Google',
            'Xiaomi',
            'Huawei'];
        return $brands[array_rand($brands)];
    }

    /** * Retorna un modelo de dispositivo aleatorio. * * @return string */
    private function randomDeviceModel()
    {
        $models = ['iPhone X',
            'Galaxy S20',
            'Pixel 5',
            'Mi 10',
            'P40 Pro'];
        return $models[array_rand($models)];
    }

    /** * Retorna una plataforma aleatoria. * * @return string */
    private function randomPlatform()
    {
        return InteractionInterface::PLATFORMS[rand(0, 1)];
    }
}
