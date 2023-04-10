<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static{
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak  Catatan</title>
</head>
<body>
    <div class="form-group">
        <p align="center" style="font-size:25px"><b>Cetak Catatan </b></p>
        <table class="class static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead>
                <tr>
                    <th style="width:80px; font-size:20px"><strong>No</strong></th>
                    <th><strong style="text-align: center; font-size:20px">Tanggal</strong></th>
                    <th><strong style="text-align: center; font-size:20px">Waktu/Jam</strong></th>
                    <th><strong style="text-align: center; font-size:20px">Kegiatan</strong></th>
               
                </tr>
            </thead>
            <tbody>
                @foreach ($dtcetakcatatan as $item)
                <tr>
                    <td style="text-align:center; font-size:20px"><strong>{{ $loop->iteration }}</strong></td>
                    <td style="text-align:center; font-size:20px">{{ date('d-m-Y', strtotime($item->tgl)) }}</td>
                    <td style="text-align:center; font-size:20px">{{ $item->jam }}</td>
                    <td style="text-align:center; font-size:20px">{{ $item->kegiatan }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>