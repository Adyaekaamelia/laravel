<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        $nama = 'Adyaeka';
        $kelas = 12;
        $smk = 'Assalaam';
        $di = 'Bandung';
        $jurusan = 'RPL1';

        $status = 1;
    @endphp


    Hallo {{ $nama }} <br>
    Kamu Kelas {{ $kelas }} <br>
    Sekolah {{ $smk }} <br>
    Di {{ $di }}<br>
    Jurusan {{ $jurusan }}
    <br><br>

    @if ($status == 1)
        Status kamu lulus
    @else
        Status kamu tidak lulus

    @endif
    <br><br>

    @for ($i = 1; $i <= 10; $i++)
        Angka ke- {{ $i }} <br>
    @endfor
    <br><br>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2 == 0)
            Angka genap {{ $i }} <br>
        @else
            Angka ganjil {{ $i }} <br>
        @endif
    @endfor

    @php
        $warna = '<div style="color: red">Adya</div>';
    @endphp
    {!! $warna !!}
</body>

</html>
