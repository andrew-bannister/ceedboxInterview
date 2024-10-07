<?php

namespace App\Http\Controllers;

use App\Models\jsonData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JsonDataController
{
    public function __construct()
    {
    }

    public static function formatData($fileName): void
    {
        $json = file_get_contents($fileName);

        $jsonData = json_decode($json, true);

        foreach ($jsonData as $data) {
            foreach ($data as $key => $value) {
                $column = DB::table('data_sources')->where('user_column', strtolower($key))->value('json_column');
                if (!empty($column)) {
                    $data[$column] = $value;
                }
            }
            try {
                DB::table('shipments')->updateOrInsert([
                    'shipment_id' => $data['shipment_id'],
                ], [
                    'shipment_id' => $data['shipment_id'],
                    'origin' => $data['origin'],
                    'destination' => $data['destination'],
                    'weight' => $data['weight'],
                    'status' => $data['status'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            } catch (\Exception $e) {
                report($e->getMessage());
            }
        }
    }
}
