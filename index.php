<?php

require_once('./luaslingkaran.php'); //panggil file luaslingkaran

use App\Math\LuasLingkaran; //panggil namespace

$Lingkaran = new LuasLingkaran(7);
$Lingkaran->tampil('roda'); //panggil method
LuasLingkaran::testing();