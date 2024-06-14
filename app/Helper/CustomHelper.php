<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

if (!function_exists('sendJson')) {
    function sendJson($array)
    {
        header('Content-type: application/json');
        echo json_encode($array);
        die;
    }
}

if (!function_exists('setValueInput')) {
    function setValueInput($fieldName, $item)
    {
        if (old($fieldName)) {
            return old($fieldName);
        } else {
            if ($item) {
                return $item->$fieldName;
            }
        }
    }
}

function userLogin()
{
    return Auth::user();
}

function ResponseSuccess($data, $message = '')
{
    {
        $response = [
            'status' => 1,
            'data' => $data,
            'message' => $message
        ];
        return response()->json($response);
    }
}

function ResponseError($message, $httpStatusCode = 200, $statusCode = 0)
{
    $response = [
        'status' => $statusCode,
        'data' => [],
        'message' => $message
    ];
    return response()->json($response, $httpStatusCode);
}

function hari_indo($tgl='')
{
  // Konversi tanggal ke Day
  $hari = date('D', strtotime($tgl));
  // Array nama hari
  $nama_hari = array(
    'Sun'=>'Minggu',
    'Mon'=>'Senin',
    'Tue'=>'Selasa',
    'Wed'=>'Rabu',
    'Thu'=>'Kamis',
    'Fri'=>"Jum'at",
    'Sat'=>'Sabtu'
  );
  // Jika $hari tidak sesuai dgn array
  if (empty($nama_hari[$hari])) {
    return 'Hari tidak valid!';
  }
  return $nama_hari[$hari]; //tampilkan hasil
}

function namaBulan()
{
  return [
    'Januari',   'Februari', 'Maret',    'April',
    'Mei',       'Juni',     'Juli',     'Agustus',
    'September', 'Oktober',  'November', 'Desember'
  ];
}
function bln_indo($tgl='')
{
  // Konversi tanggal ke bulan
  $bln = (int)date('m', strtotime($tgl));
  $bln = $bln-1;
  // Array nama bulan, kita coba buat lebih simpel
  $nama_bln = namaBulan();
  // Jika $bln tidak sesuai dgn array bulan
  if (empty($nama_bln[$bln])) {
    return 'Bulan tidak valid!';
  }
  return $nama_bln[$bln]; //tampilkan hasil
}

function tgl_now($aksi='')
{
  date_default_timezone_set('Asia/Jakarta');
  if ($aksi=='tgl') {
    $v = date('Y-m-d');
  }elseif ($aksi=='jam') {
    $v = date('H:i:s');
  }elseif ($aksi=='x') {
    $v = date('YmdHis');
  }else {
    $v = date('Y-m-d H:i:s');
  }
  return $v;
}

function waktu($tgl='', $aksi='')
{
  $tgl = ($tgl=='') ? tgl_now() : $tgl;
  // Konversinya :D
  $harinya = hari_indo($tgl);
  $tglnya  = date('d', strtotime($tgl));
  $blnnya  = bln_indo($tgl);
  $thnnya  = date('Y', strtotime($tgl));
  $jamnya   = date('H', strtotime($tgl));
  $menitnya = date('i', strtotime($tgl));
  $detiknya = date('s', strtotime($tgl));

  // kita buat lebih simpel menggunakan array
  $arr = array(
    'hari'      => $harinya,
    'tgl'       => "$tglnya $blnnya $thnnya",
    'hari_tgl'  => "$harinya, $tglnya $blnnya $thnnya",
    'jam'       => $jamnya,
    'menit'     => $menitnya,
    'detik'     => $detiknya,
    'waktu'     => "$jamnya:$menitnya:$detiknya",
    'jam_menit' => "$jamnya:$menitnya",
    'hari_tgl_jam_menit' => $harinya.", $tglnya $blnnya $thnnya $jamnya:$menitnya",
  );
  // Jika nama $aksi tidak ada dalam array maka tampilkan lengkapnya
  if (empty($arr[$aksi])) {
    return $harinya.", $tglnya $blnnya $thnnya $jamnya:$menitnya:$detiknya";
  }
  return $arr[$aksi]; //tampilkan hasil sesuai dgn $arr & $aksi
}
function hariTglJam($tgl='', $aksi='')
{
  $tgl = ($tgl=='') ? tgl_now() : $tgl;
  // Konversinya :D
  $harinya = hari_indo($tgl);
  $tglnya  = date('d', strtotime($tgl));
  $blnnya  = bln_indo($tgl);
  $thnnya  = date('Y', strtotime($tgl));
  $jamnya   = date('H', strtotime($tgl));
  $menitnya = date('i', strtotime($tgl));
  $detiknya = date('s', strtotime($tgl));

  // kita buat lebih simpel menggunakan array
  $arr = array(
    'hari'      => $harinya,
    'tgl'       => "$tglnya $blnnya $thnnya",
    'hari_tgl'  => "$harinya, $tglnya $blnnya $thnnya",
    'jam'       => $jamnya,
    'menit'     => $menitnya,
    'detik'     => $detiknya,
    'waktu'     => "$jamnya:$menitnya:$detiknya",
    'jam_menit' => "$jamnya:$menitnya",
    'hari_tgl_jam_menit' => $harinya.", $tglnya $blnnya $thnnya $jamnya:$menitnya",
  );
  // Jika nama $aksi tidak ada dalam array maka tampilkan lengkapnya
  if (empty($arr[$aksi])) {
    return $harinya.", $tglnya $blnnya $thnnya $jamnya:$menitnya";
  }
  return $arr[$aksi]; //tampilkan hasil sesuai dgn $arr & $aksi
}

if (!function_exists('readAgo')) {
    function readAgo($datetime)
    {
        $carbonDate = Carbon::parse($datetime);
        $now = Carbon::now();

        $diffInSeconds = $now->diffInSeconds($carbonDate);
        $diffInMinutes = $now->diffInMinutes($carbonDate);
        $diffInHours = $now->diffInHours($carbonDate);
        $diffInDays = $now->diffInDays($carbonDate);
        $diffInWeeks = $now->diffInWeeks($carbonDate);
        $diffInMonths = $now->diffInMonths($carbonDate);
        $diffInYears = $now->diffInYears($carbonDate);

        if ($diffInSeconds < 60) {
            return 'baru saja';
        } elseif ($diffInMinutes < 60) {
            return $diffInMinutes . ' menit lalu';
        } elseif ($diffInHours < 24) {
            return $diffInHours . ' jam lalu';
        } else {
            return hariTglJam($datetime, 'hari_tgl_jam_menit');
        } 
    }
}