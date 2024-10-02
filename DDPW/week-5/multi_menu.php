<?php 
    $menu = array(
        array(
            "nama" => "Beranda"
        ),
        array(
            "nama" => 'Berita',
            "subMenu" => array(
                array(
                    "nama" => "Wisata",
                    "subMenu" => array(
                        array(
                            "nama" => "Pantai"
                        ),
                        array(
                            "nama" => "Gunung"
                        ),
                    )
                ),
                array(
                    "nama" => "Kuliner",
                ),
                array(
                    "nama" => "Hiburan",
                ),
            ),
        ),
        array(
            "nama" => "Tentang",
        ),
        array(
            "nama" => "Kontak",
        ),
    );

    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
        foreach ($menu as $item) {
            echo "<li>{$item['nama']}</li>";
            if (isset($item['subMenu'])) {
                tampilkanMenuBertingkat($item['subMenu']);
            }
        }
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
?>
