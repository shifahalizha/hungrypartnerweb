<?php
include('koneksi.php');

function getallrecipes()
{
    global $mysqli;
    $query = "SELECT * from tb_menu";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $keywords = explode(" ", $search);
        $conditions = [];

        foreach ($keywords as $keyword) {
            $conditions[] = "nama_menu LIKE '%$keyword%'";
        }

        $query .= " WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getdetailrecipes()
{
    if (isset($_GET['id'])):
        $id = $_GET['id'];
        global $mysqli;
        $query = "SELECT * from tb_menu WHERE id=$id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_object($result);
        return $row;
    else:
        return null;
    endif;
}

function getalltrend()
{
    global $mysqli;
    $query = "SELECT * from tb_trend";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $keywords = explode(" ", $search);
        $conditions = [];

        foreach ($keywords as $keyword) {
            $conditions[] = "nama_menu LIKE '%$keyword%'";
        }

        $query .= " WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($mysqli, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload( $image )
  {
    $fileName = $image['name'];
    $tmpName = $image['tmp_name'];
    $fileSize = $image['size'];
    $error = $image['error'];
    
    // cek apakah filenya ada atau tidak
    if( $error == 4 ):
      echo "<script>
            alert('Gambar harus ada!.');
          </script>";
      return false;
    endif;

    // cek apakah file yg di upload tipe nya gambar atau bukan
    $imageFormatValid = ['jpg', 'jpeg', 'png', 'webp', 'bmp'];
    $imageFormat = explode('.', $fileName); 
    $imageFormat = strtolower(end($imageFormat)); // JPEG => jpeg
    if( !in_array($imageFormat, $imageFormatValid) ) :
      echo "<script>
            alert('File harus gambar!.');
          </script>";
      return false;
    endif;

    // cek file size
    if( $fileSize > 2000000 ) :
      echo "<script>
            alert('Ukuran gambar maksimal 2MB!.');
          </script>";
      return false;
    endif;

    // eksekusi nama file baru
    $newFileName = date('YmdHis') . uniqid() . '.'. $imageFormat;
    move_uploaded_file($tmpName, 'images/' . $newFileName);

    return 'images/' . $newFileName;
  }

function addrecipe( $data )
  {
    global $mysqli;

    $title = htmlspecialchars($data['title']);
    $caption = $data['caption'];
    $bahan = $data['bahan'];
    $cara = $data['cara'];

    // uploa image
    $foto = upload($_FILES['foto']);

    // cek apakah validasinya lolos atau tidak
    if( !$foto ) :
      // validasinya gak lolos
      return false;
    endif;
    
    // jalankan query
    mysqli_query($mysqli, "INSERT INTO tb_trend VALUES (NULL, '$title' ,'$caption', '$bahan', '$cara', '$foto')");

    if(mysqli_affected_rows($mysqli) > 0) :
      // return true kalo berhasil ditambah
      return true;
      else :
        // return false kalo gagal ditambah
      return false;
    endif;
  }

function getdetailtrend()
{
    if (isset($_GET['id'])):
        $id = $_GET['id'];
        global $mysqli;
        $query = "SELECT * from tb_trend WHERE id=$id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_object($result);
        return $row;
    else:
        return null;
    endif;
}

function getallwestern()
{
    global $mysqli;
    $query = "SELECT * from tb_western";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $keywords = explode(" ", $search);
        $conditions = [];

        foreach ($keywords as $keyword) {
            $conditions[] = "nama_menu LIKE '%$keyword%'";
        }

        $query .= " WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getdetailwestern()
{
    if (isset($_GET['id'])):
        $id = $_GET['id'];
        global $mysqli;
        $query = "SELECT * from tb_western WHERE id=$id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_object($result);
        return $row;
    else:
        return null;
    endif;
}

function getallringan()
{
    global $mysqli;
    $query = "SELECT * from tb_makananringan";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $keywords = explode(" ", $search);
        $conditions = [];

        foreach ($keywords as $keyword) {
            $conditions[] = "nama_menu LIKE '%$keyword%'";
        }

        $query .= " WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getdetailringan()
{
    if (isset($_GET['id'])):
        $id = $_GET['id'];
        global $mysqli;
        $query = "SELECT * from tb_makananringan WHERE id=$id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_object($result);
        return $row;
    else:
        return null;
    endif;
}

function getalldessert()
{
    global $mysqli;
    $query = "SELECT * from tb_dessert";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $keywords = explode(" ", $search);
        $conditions = [];

        foreach ($keywords as $keyword) {
            $conditions[] = "nama_menu LIKE '%$keyword%'";
        }

        $query .= " WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getdetaildessert()
{
    if (isset($_GET['id'])):
        $id = $_GET['id'];
        global $mysqli;
        $query = "SELECT * from tb_dessert WHERE id=$id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_object($result);
        return $row;
    else:
        return null;
    endif;
}

function getallminuman()
{
    global $mysqli;
    $query = "SELECT * from tb_minuman";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $keywords = explode(" ", $search);
        $conditions = [];

        foreach ($keywords as $keyword) {
            $conditions[] = "nama_menu LIKE '%$keyword%'";
        }

        $query .= " WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($mysqli, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getdetailminuman()
{
    if (isset($_GET['id'])):
        $id = $_GET['id'];
        global $mysqli;
        $query = "SELECT * from tb_minuman WHERE id=$id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_object($result);
        return $row;
    else:
        return null;
    endif;
}

?>