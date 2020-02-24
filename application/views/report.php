<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <table border="1">
        <tr>
          <th rowspan="2">ID</th>
          <th rowspan="2">Provinsi</th>
          <th colspan="3">Alat</th>
          <th rowspan="2">Jumlah</th>
        </tr>
        <tr>
        <th >Pil</th>
          <th>Kondom</th>
          <th >IUD</th>
        </tr>
      <?php
      $no=1; foreach($pengguna_list as $key) :?>
      <tr>
        <td>
          <?php echo $key->id_list ?>
        </td>
        <td>
          <?php echo $key->nama_provinsi ?>
        </td>
        <?php
        $t = $key->id_kontrasepsi;
        if ($t == "1") {
          echo "<td>";
            echo $key->jumlah_pemakai;
            echo "</td>";
            echo "<td></td>"; echo "<td></td>";
          }else if($t==2){
            echo "<td>";
            echo "<td>";
            echo $key->jumlah_pemakai;
            echo "</td>";echo "</td>";echo "</td>";echo "<td></td>";
          } else{
            echo "<td>";echo "<td>";echo "<td>";
            echo $key->jumlah_pemakai;
            echo "</td>";echo "</td>";echo "</td>";
          }
        ?>
       <td>
          <?php echo $key->jumlah_pemakai ?>
        </td>
      </tr>
      <?php endforeach?>
      <tr>
        <td colspan="2">Jumlah</td>
        <?php
        $t = $key->id_kontrasepsi;
        if ($t == "1") {
          echo "<td>";
            echo $key->jumlah_pemakai;
            echo "</td>";
            echo "<td></td>"; echo "<td></td>";
          }else if($t==2){
            echo "<td>";
            echo "<td>";
            echo $key->jumlah_pemakai;
            echo "</td>";echo "</td>";echo "</td>";echo "<td></td>";
          } else{
            echo "<td>";echo "<td>";echo "<td>";
            echo $key->jumlah_pemakai;
            echo "</td>";echo "</td>";echo "</td>";
          }
        ?>
      </tr>
    </table>
    <script type="text/javascript">
    window.print();
    </script>
  </body>
</html>