<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Http\Hydrators\Account\BasicAccountJsonHydrator;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $email => $values) {
            if (!User::where('email', $email)->exists()) {
                $user           = new User;
                $user->name     = $values['name'];
                $user->email    = $email;
                $user->password = bcrypt($values['password']);
                $user->settings = BasicAccountJsonHydrator::hydrate();
                $user->save();
            }
        }
    }

    public function data(): array
    {
        return [
            'lohayter@googlemail.com' => [
                'name'      => 'Lewis Hayter',
                'password'  => 'password123',
            ],
        ];
    }
}
