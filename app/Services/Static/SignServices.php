<?php
namespace App\Services\Static;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SignServices
{
    private static $instance = null;
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new SignServices();
        }
        return static::$instance;
    }
    static function signConverter($idPTW = null, $signature, $work_order, $date_application, $storage)
    {
        try {
            // $image_parts = explode(';base64,', $this->signature);
            $image_parts = explode(';base64,', $signature);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            // $file = $this->date_application . '-' . '1' . '-' . 'John Doe.' . $image_type;
            // tanggal sekarang - work order - tanggal propose - id - nama lengkap.png
            $file = $work_order . '-' . date_format(now(), 'd-m-Y') . '-' . $date_application . '-' . Auth::id() . '-' . Auth::user()->full_name . '.' . $image_type;
            if ($idPTW != null) {
                $file = $idPTW . '-' . $work_order . '-' . date_format(now(), 'd-m-Y') . '-' . date_format(date_create($date_application), 'd-m-Y') . '-' . Auth::id() . '-' . Auth::user()->full_name . '.' . $image_type;
            }
            // Storage::disk('signature')->put($file, $image_base64);
            Storage::disk($storage)->put($file, $image_base64);
            return $file;
        } catch (\Exception $e) {
            return Log::debug($e);
        }
    }
}
