<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Teams;
use App\Models\ChatRoom;
use App\Models\Message;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Iluminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team=factory(\App\Models\Teams::class)->create([
            'name'=>'CodeTisans'
        ]);

        $user=factory(\App\Models\User::class)->create([
            'name'=>'Robert',
            'last_name'=>'Cumahig',
            'team_id'=>$team->id,
            'email'=>'test@example.com'
        ]);
    }
}
