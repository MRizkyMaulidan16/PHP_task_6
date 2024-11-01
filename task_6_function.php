<?php 
    //PHP Function

 function tampilkan_nama(){
    echo " Nama saya malas ngoding <br>";
 }

 tampilkan_nama();

    //string function
    $nama = "muhammad raden iqbal hafidz Fauzi";
    echo $nama;
    echo "<br>";
    echo strtoupper($nama);
    echo "<br>";
    echo ucwords($nama);
    echo "<br>";
    echo lcfirst($nama);
    echo "<br>";
    echo strtolower($nama);
    echo "<br>";

    //fungsi void
    function salam($nama){
        echo "<h2> Assalamualaikum ".strtoupper($nama)."</h2>";
    }
    salam("ali");
    salam("fadil");
    salam("");
    echo "<br>";

    //fungsi return value
    function jumlah($a, $b){
        return $a + $b;
    }

    echo '2 + 8 = '.jumlah(2,8);
    echo "<br>";

    //membuat function
    function perkenalkan(){
        echo "Assalamualaikum<br> ";
        echo "Perkenalkan, nama saya Bedu <br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    //memanggil function yang sudah dibuat
    perkenalkan();

    echo "<hr>";

    //memanggil lagi
    perkenalkan();

    echo "<br>";


    function perkenalan2($nama, $salam){
        echo $salam. ",";
        echo "Perkenalkan, nama saya ".$nama."<br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    //memanggil function yang sudah dibuat
    perkenalan2("Usro", "Hai");

    echo "<hr>";

    $saya = "Bedu";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    perkenalan2($saya, $ucapanSalam);

    echo "<br>";

    function perkenalan3($nama, $salam="Assalamualaikum"){
        echo $salam. ",";
        echo "Perkenalkan, nama saya ".$nama."<br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    //memanggil function yang sudah dibuat
    perkenalan3("Jarwo", "Hai");

    echo "<hr>";

    $saya1 = "Bambang";
    $ucapanSalam1 = "Selamat Pagi";
    //memanggil lagi
    perkenalan3($saya1);

    echo "<br>";

    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah".hitungUmur(2003, 2022). " tahun<br><br>";

    echo "<hr>";

    function hitungUmur2($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan4($nama, $salam="Assalamualaikum"){
        echo $salam. ",";
        echo "Perkenalkan, nama saya ".$nama."<br>";
        //memanggil function lain
        echo "saya berumur".hitungUmur2(1994, 2015 ). " tahun<br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    //memanggil function yang sudah dibuat
    perkenalan4("Ardianta");
    echo "<br>";

    //funsi faktorial
    function faktorial($angka){
        if($angka < 2){
            return 1;
        }else{
            //memanggil function sendiri
            return ($angka * faktorial($angka-1));
        }
    }

    echo "faktorial 5 adalah ".faktorial(5)."<br><br><br>";

    //fungsi variabel lokal
    function pangkatDua($a){
        $a = $a * $a;
    }
    $a = 20;
    echo 'Sebelum Nilai $a :'.$a;
    pangkatDua($a);
    echo '<br>Sesudah Nilai $a :'.$a;

    //fungsi variabel global
    function pangkatDua2(){
        global $a;
        $a = $a * $a;
    }
    $a = 20;
    echo '<br><br>Sebelum Nilai $a :'.$a;
    pangkatDua2();
    echo '<br>Sesudah Nilai $a :'.$a;

    //fungsi validasi
    function otentikasi($uname, $pass){
        //user admin , password 123456
        if($uname == "admin" && $pass == "123456"){
            return true;
        }else{
            return false;
        }
    }
    
?>