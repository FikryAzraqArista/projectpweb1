<?php
    class BMIPasien
    {
    public $nama,
        $berat,
        $tinggi,
        $umur,
        $jk;

    public function hasilBMI()
    {
    return "<b>Nama : $this->nama <br></br>
            Berat Badan : $this->berat <br></br>
            Tinggi Badan : $this->tinggi <br></br>
            Umur : $this->umur <br></br>
            Jenis Kelamin : $this->jk </b>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5){
            return "<td>Kekurangan Berat Badan</td>";
        } elseif ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Ideal</td>";
        } elseif ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        } else {
            return "<td>Obesitas</td>";
        }
    }
}

$pasien1 = ['nama' => 'Faiz', 'kelamin' => 'Laki-laki', 'umur' => 19, 'berat' =>78.0, 'tinggi' => 175];
$pasien2 = ['nama' => 'Dziaulhaq', 'kelamin' => 'Laki-laki', 'umur' => 18, 'berat' =>55.9, 'tinggi' => 165];
$pasien3 = ['nama' => 'Fara', 'kelamin' => 'Perempuan', 'umur' => 17, 'berat' =>65.0, 'tinggi' => 170];


$ar_pasien = [$pasien1, $pasien2, $pasien3];

?>