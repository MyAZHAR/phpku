<?php

function luasLingkaran($jariJari)
{
    define("PHI",3.14);
    echo PHI * $jariJari * $jariJari;

}

function luasPesergi($sisi)

{
    echo $sisi * $sisi;
}

function luasSegitiga($alas, $tinggi)
{
    echo 1/2 * $alas * $tinggi;
}

luasSegitiga(20,30);
echo "<br>";
luasPesergi(30);

?>