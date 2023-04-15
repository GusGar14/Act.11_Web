<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spiderman = new User;
        $spiderman->name = ('SpiderMan');
        $spiderman->real_name = ('Peter Benjamin Parker');
        $spiderman->email = ('spiderman@mail.com');
        $spiderman->gender = ('Male');
        $spiderman->universe_id = ('4');
        $spiderman->password = Hash::make('Pass123');
        $spiderman->save();
        
        $hulk = new User;
        $hulk->name = ('Hulk');
        $hulk->real_name = ('Robert Bruce Banner');
        $hulk->email = ('hulk@mail.com');
        $hulk->gender = ('Male');
        $hulk->universe_id = ('4');
        $hulk->password = Hash::make('Pass123');
        $hulk->save();

        $capamerica = new User;
        $capamerica->name = ('Captain America');
        $capamerica->real_name = ('Steven Rogers');
        $capamerica->email = ('capamerica@mail.com');
        $capamerica->gender = ('Male');
        $capamerica->universe_id = ('4');
        $capamerica->password = Hash::make('Pass123');
        $capamerica->save();

        $superman = new User;
        $superman->name = ('SuperMan');
        $superman->real_name = ('Clark Kent');
        $superman->email = ('superman@mail.com');
        $superman->gender = ('Male');
        $superman->universe_id = ('2');
        $superman->password = Hash::make('Pass123');
        $superman->save();

        $batman = new User;
        $batman->name = ('BatMan');
        $batman->real_name = ('Bruce Wayne');
        $batman->email = ('batman@mail.com');
        $batman->gender = ('Male');
        $batman->universe_id = ('1');
        $batman->password = Hash::make('Pass123');
        $batman->save();

        $scarletspider = new User;
        $scarletspider->name = ('Scarlet Spider');
        $scarletspider->real_name = ('Ben Reilly');
        $scarletspider->email = ('scarletspider@mail.com');
        $scarletspider->gender = ('Male');
        $scarletspider->universe_id = ('5');
        $scarletspider->password = Hash::make('Pass123');
        $scarletspider->save();
        
        $wonderwoman = new User;
        $wonderwoman->name = ('Wonder Woman');
        $wonderwoman->real_name = ('Diana Prince');
        $wonderwoman->email = ('wonderwoman@mail.com');
        $wonderwoman->gender = ('Female');
        $wonderwoman->universe_id = ('1');
        $wonderwoman->password = Hash::make('Pass123');
        $wonderwoman->save();

        $doomsday = new User;
        $doomsday->name = ('Doomsday');
        $doomsday->real_name = ('');
        $doomsday->email = ('doomsday@mail.com');
        $doomsday->gender = ('Male');
        $doomsday->universe_id = ('3');
        $doomsday->password = Hash::make('Pass123');
        $doomsday->save();

        $scarletwitch = new User;
        $scarletwitch->name = ('Scarlet Witch');
        $scarletwitch->real_name = ('Wanda Maximoff');
        $scarletwitch->email = ('scarletwitch@mail.com');
        $scarletwitch->gender = ('Female');
        $scarletwitch->universe_id = ('5');
        $scarletwitch->password = Hash::make('Pass123');
        $scarletwitch->save();

        $nightwing = new User;
        $nightwing->name = ('Night Wing');
        $nightwing->real_name = ('Dick Grayson');
        $nightwing->email = ('nightwing@mail.com');
        $nightwing->gender = ('Male');
        $nightwing->universe_id = ('3');
        $nightwing->password = Hash::make('Pass123');
        $nightwing->save();
    }
}
