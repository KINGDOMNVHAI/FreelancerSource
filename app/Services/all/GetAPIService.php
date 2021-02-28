<?php
namespace App\Services\All;

use DB;
use Illuminate\Support\ServiceProvider;

class GetAPIService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /*
     * Hàm để lấy data từ API và chuyển thành dạng mảng.
     * final để chặn ghi đè.
     * Tất cả phương thức trong class này đều phải dùng final
    */
    final private function getAPIarray($urlAPI)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $urlAPI,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response, true); // Mảng chứa API

        return $response;
    }

    /**
     * getAPIDarkSky
     *
     * API dự báo thời tiết trên thanh menu
     * Link API https://api.darksky.net/forecast/[key]/[latitude],[longitude]
     * Key của kingdomnvhai@gmail.com là a49360e4b5d70b8e48bf0182463775b6
     * Tọa độ lấy từ Google Map. Nhập địa điểm, lấy 2 số sau chữ @
     * Ví dụ: Chung cư Horizon tọa độ là @10.7927662,106.6861704
     */
    final public function getAPIDarkSky()
    {
        // Chung cư Horizon
        $urlAPI = 'https://api.darksky.net/forecast/a49360e4b5d70b8e48bf0182463775b6/10.7927662,106.6861704';

        $response = $this->getAPIarray($urlAPI);

        $datas = [];

        if (isset($response["currently"]))
        {
            $datas['icon']        = $response['currently']['icon'];
            $datas['temperature'] = $response['currently']['temperature'];
            $datas['timezone']    = $response['timezone'];
        }
        else
        {
            $datas['icon']        = 'cloud';
            $datas['temperature'] = '100';
            $datas['timezone']    = 'Asia/Ho_Chi_Minh';
        }

        return $datas;
    }
}
