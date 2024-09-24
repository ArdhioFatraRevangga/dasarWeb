<?php
$menu = [
    [
    "nama" => "Beranda"
],
[
    "nama" => "Berita",
    "subMenu" => [
        [
            "nama" => "Wisata",
            "subMenu" => [
                [
                "nama" => "Pantai",
            ],
            [
                "nama" => "Gunung",
            ]
        ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
]
            ],
            [
                "nama" => "Tentang"
            ],
            [
                "nama" => "Kontak"
            ],
        ];
        function tampikanMenuBertingkat(array $menu){
            echo "<ul>";
            foreach ($menu as $key => $item){
                echo "<li>{$item['nama']}</li>";
            }
            echo "</ul>";
        }
        tampikanMenuBertingkat($menu);
        ?>