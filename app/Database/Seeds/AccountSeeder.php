<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_depan' => 'John',
                'nama_belakang' => 'Doe',
                'username' => 'john_doe',
                'password' => password_hash('password123', PASSWORD_DEFAULT), // Ganti dengan password yang diinginkan
                'email' => 'john.doe@example.com',
                'nomor_telepon' => '123456789',
                'foto_profile' => 'default.jpg', // Ganti dengan nama file foto profil default
            ],
            [
                'nama_depan' => 'Jane',
                'nama_belakang' => 'Smith',
                'username' => 'jane_smith',
                'password' => password_hash('password456', PASSWORD_DEFAULT), // Ganti dengan password yang diinginkan
                'email' => 'jane.smith@example.com',
                'nomor_telepon' => '987654321',
                'foto_profile' => 'default.jpg', // Ganti dengan nama file foto profil default
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Insert data
        $this->db->table('Account')->insertBatch($data);
    }
}
