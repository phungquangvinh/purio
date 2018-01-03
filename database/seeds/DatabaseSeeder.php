<?php

use App\Models\LoginManagerOperator;
use App\Models\ManagersDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->SeedLoginAdmin();
        $this->SeedManagerDetail();
        $this->SeedLoginManager();
    }
    private  function SeedLoginAdmin(){
        DB::table('login_admin_operators')->truncate();
        $data = [
            'login_id' => 'admin',
            'login_pw' => Hash::make('12345678'),
            'name' => 'Admin',
            'del_flg' => 0,
            'registered_person' => 'Admin',
            'updater' => 'Admin'
        ];
        $model = new \App\Models\LoginAdminOperator();
        $model->fill($data);
        $model->save();
    }
    private function SeedManagerDetail(){
        foreach (range(1, 10) as $index) {
            $data = [
                'name' => 'Purio '.$index,
                'prefectures' => rand(1,47),
                'city_country' => 'Ha Noi',
                'building_name' => '',
                'tel_no' => '123456789',
                'mail_address' => 'khoinv@gmail.com',
                'del_flg' => rand(0,1),
                'member_ip' => '192.168.1.1',
                'member_web' => 'Chrome',
                'registered_person' => "System",
                'updater' => "System",
            ];
            $model = new ManagersDetails();
            $model->fill($data);
            $model->save();
        }
    }
    private function SeedLoginManager(){
        DB::table('login_manager_operators')->truncate();
        foreach (range(1, 10) as $index) {
            $data = [
                'manager_id' => $index,
                'login_id' => 'manager'.$index,
                'login_pw' => Hash::make('12345678'),
                'name' => 'sales '.$index,
                'del_flg' => rand(0,1),
                'registered_person' => '1',
                'updater' => '1'
            ];
            $model = new LoginManagerOperator();
            $model->fill($data);
            $model->save();
        }
    }
    public function randomString($maxlength = 6)
    {
        $array_character = range('a', 'z');
        $max_value = count($array_character) - 1;
        if ($maxlength <= 0 || $maxlength > $max_value) {
            return '';
        }
        $str = '';
        foreach (range(1, $maxlength) as $index) {
            $str .= $array_character[rand(0, $max_value)];
        }
        return $str;
    }
}
