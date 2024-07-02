<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LabelsSeeder extends Seeder
{
    public function run()
    {
        $os = [
            [
                "id" => Str::random(8),
                "label" => "Docker",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Kubernetes",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Proxmox",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "LXD",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Incus",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Apache2",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Nginx",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "MySQL",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "MariaDB",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "FTP",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Mail",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Bouncer",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Proxy",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "VPN",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "PHP 7.4",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "PHP 8.0",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "PHP 8.1",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "PHP 8.2",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "PHP 8.3",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Idling",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "Uptime",
                "created_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => Str::random(8),
                "label" => "API",
                "created_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('labels')->insert($os);

    }
}
