<body>
    <?php
    $a=$_POST['nm'];
    $b=$_POST['jp'];
    $c=$_POST['p'];
    $d=$_POST['tujuan'];
    $e=$_POST['tgl'];
    $f=$_POST['kls'];

    if ($d=='Bekasi'&&$f=='Ekonomi')
    {$tarif=10000;}
    elseif ($d=='Bekasi'&&$f=='Bisnis')
    {$tarif=12000;}
    elseif ($d=='Bekasi'&&$f=='Eksekutif')
    {$tarif=14000;}
    elseif ($d=='Cikarang'&&$f=='Ekonomi')
    {$tarif=12000;}
    elseif ($d=='Cikarang'&&$f=='Bisnis')
    {$tarif=14000;}
    elseif ($d=='Cikarang'&&$f=='Eksekutif')
    {$tarif=16000;}
    elseif ($d=='Bogor'&&$f=='Ekonomi')
    {$tarif=14000;}
    elseif ($d=='Bogor'&&$f=='Bisnis')
    {$tarif=16000;}
    elseif ($d=='Bogor'&&$f=='Eksekutif')
    {$tarif=18000;}
    elseif ($d=='Bandung'&&$f=='Ekonomi')
    {$tarif=16000;}
    elseif ($d=='Bandung'&&$f=='Bisnis')
    {$tarif=18000;}
    elseif ($d=='Bandung'&&$f=='Eksekutif')
    {$tarif=20000;}
    elseif ($d=='Cianjur'&&$f=='Ekonomi')
    {$tarif=18000;}
    elseif ($d=='Cianjur'&&$f=='Bisnis')
    {$tarif=20000;}
    else
    {$tarif=22000;}
    $total=$b*$tarif;
    echo "<pre>
    ====================================
           KERETA API SINGLE EXPRESS
                KAI Limited
    ====================================
    Nama                : $a
    Jumlah Penumpang    : $b
    Kota Tujuan         : $d
    Tgl.Berangkat       : $e
    Jenis Kelas         : $f
    ====================================
    Harga Tiket         : $tarif
    Total Harga         : $total
    
      Terima Kasih Atas Pemesanannya
    ====================================</pre>";
    ?>
    <a href="inputpr.php">Back</a>
    </body>
