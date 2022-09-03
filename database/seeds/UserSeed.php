<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$P9ld33sDoxbzcUds2DxWcuLsO3F3xJnQiKJ/BIm9txkv719IfgLI.', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Mostfa', 'email' => 'myreal17@gmail.com', 'password' => '$2y$10$S3BFMasU70le0CcgBtFp4OjGwV94m6TsIXXsO7GAvaJ9Wg7xj0c7i', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 3, 'name' => 'user', 'email' => 'myreal16@gmail.com', 'password' => '$2y$10$S3BFMasU70le0CcgBtFp4OjGwV94m6TsIXXsO7GAvaJ9Wg7xj0c7i', 'role_id' => 2, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
