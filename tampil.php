<strong><div><h1>FORMULIR PEGAWAI NEGERI KONOHA</h1></div></strong>
      <table border=2 >
        <?php
          $nama=$_POST['txtnama'];
          $alamat=$_POST['txtalamat'];
          $tempat_lahir=$_POST['txttempat'];
          $tgl_lahir=$_POST['txtlahir'];
          $jenis=$_POST['rjk'];
          $pendidikan=$_POST['cpend'];
            if($pendidikan=="D1")
            {
              $nama_pend="Diploma I";
            }
            else
            if($pendidikan=="D2")
            {
              $nama_pend="Diploma II";
            }
            else
            if($pendidikan=="D3")
            {
              $nama_pend="Diploma III";
            }
            else

            $nama_pend="Strata I";
            echo"
            <tr>
              <td width=40%>Nama</td><td>$nama</td>
            </tr>
            <tr>
              <td width=40%>Alamat</td><td>$alamat</td>
            </tr>
            <tr>
              <td width=40%>Tempat Lahir</td><td>$tempat_lahir</td>
            </tr>
            <tr>
              <td width=40%>Tanggal Lahir</td><td>$tgl_lahir</td>
            </tr>
            <tr>
              <td width=40%>Jenis kelamin</td><td>$jenis</td>
            </tr>
            <tr>
              <td width=47%>Pendidikan</td><td>$pendidikan</td>
            </tr>
            <tr>
              <td width=47%>Nama pendidikan </td><td>$nama_pend</td>
            </tr>
              ";
              ?>
            </table>
          <a href="tugas03.php">Back To Home</a>