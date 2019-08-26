<html>
<head>
    <title>Export Laporan Excel Pada Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
    <div class="container">
        <table class='table table-bordered' >
            <thead>
                <tr >
                    <th colspan="13" style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold; width: 90px; ">
                    JADWAL KULIAH SEMESTER {{$id_tahunajaran->semester}} TAHUN  AJARAN {{$id_tahunajaran->tahun_ajaran}} PROGRAM S1 REGULER FAKULTAS EKONOMI DAN BISNIS ULM
                    </th>
                </tr>
                <tr >
                    <th colspan="13" style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold;">
                     BERLAKU MULAI {{$jadwalguest->tgl_berlaku}}
                    </th>
                </tr>
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13"></td>
                </tr>                    
                <tr >
                    <th ></th>
                    <th colspan="3" style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  II</th>
                    <th colspan="3" style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  IV</th>
                    <th colspan="3" style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  VI</th>
                    <th colspan="3" style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  VIII</th>
                </tr>                             
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <th style="width: 18px; border-color: #000;">HARI/JAM</th>
                    <th style="width: 25px; text-align: center;">IESP</th>
                    <th style="width: 25px; text-align: center;">MAN</th>
                    <th style="width: 25px; text-align: center;">AKT</th>
                    <th style="width: 25px; text-align: center;">IESP</th>
                    <th style="width: 25px; text-align: center;">MAN</th>
                    <th style="width: 25px; text-align: center;">AKT</th>
                    <th style="width: 25px; text-align: center;">IESP</th>
                    <th style="width: 25px; text-align: center;">MAN</th>
                    <th style="width: 25px; text-align: center;">AKT</th>
                    <th style="width: 25px; text-align: center;">IESP</th>
                    <th style="width: 25px; text-align: center;">MAN</th>
                    <th style="width: 25px; text-align: center;">AKT</th>                                                      
                </tr>
            </thead>
            <tbody>
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Senin</td>
                </tr>                
                @foreach($jadwalfeb as $s)
            @if(($s->hari == "Senin") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Senin") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Senin") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif


            @if(($s->hari == "Senin") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Selasa</td>
                </tr>  

                @foreach($jadwalfeb as $s)
            @if(($s->hari == "Selasa") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Selasa") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Selasa") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif


            @if(($s->hari == "Selasa") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Rabu</td>
                </tr>  

                @foreach($jadwalfeb as $s)
            @if(($s->hari == "Rabu") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Rabu") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Rabu") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif


            @if(($s->hari == "Rabu") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Kamis</td>
                </tr>  

                @foreach($jadwalfeb as $s)
            @if(($s->hari == "Kamis") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Kamis") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Kamis") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif


            @if(($s->hari == "Kamis") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Jumat</td>
                </tr>  

                @foreach($jadwalfeb as $s)
            @if(($s->hari == "Kamis") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-09.40</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Jumat") and ($s->jam == "09.50:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>09.50-11.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif

            @if(($s->hari == "Jumat") and ($s->jam == "14.00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>14.00-16.00</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif


            @if(($s->hari == "Jumat") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER II") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif  
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER IV") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VI") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "IESP"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "MANAJEMEN"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif      
                    @if(($s->semester == "SEMESTER VIII") and ($s->prodi == "AKUNTANSI"))
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>  
                    @else
                    <td></td>
                    @endif 
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13"></td>
                </tr> 

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="10">KETERANGAN:</td>
                    <td colspan="10">{{$jadwalguest->tgl_ttd}}</td>
                </tr>       

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="3">GB1a = ( Gedung Baru Lantai 1 Ruang A)</td>
                    <td colspan="4">1. Jam kuliah pada hari Jum'at, khusus mata kuliah 2 SKS :</td>
                    <td colspan="2">08.00 - 09.40 dan 09.50 - 11.30 Wita</td> 
                    <td></td> 
                    <td>Dekan,</td>                   
                </tr>    

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="3">GB1b = ( Gedung Baru Lantai 1 Ruang B )</td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>ub.  Wakil Dekan Bidang Akademik</td>
                </tr>  

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="3">GB2   = ( Gedung Baru Lantai 2)</td>
                    <td colspan="4">2. Jam kuliah pada hari Jum'at, khusus mata kuliah 3 SKS :</td>
                    <td colspan="2">08.00 - 10.30 Wita</td> 
                    <td></td> 
                    <td>Dekan,</td>                   
                </tr>   
                
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="2">1 = Ruang kuliah 1</td>                 
                </tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="2">2 = Ruang kuliah 2</td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$jadwalguest->dekan}}</td>
                </tr>                                                                      
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="1">dst</td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NIP. {{$jadwalguest->nip_dekan}}</td>
                </tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="4">Untuk pembagian menjadi tiga kelas ( a, b, c, d ) ditentukan oleh Jurusan,</td>
                </tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="5">sedangkan pembagian dua kelas berdasarkan angka paling belakang NIM (Ganjil dan Genap)</td>
                </tr>                

            </tbody>
        </table>
    </div>
 
</body>
</html>