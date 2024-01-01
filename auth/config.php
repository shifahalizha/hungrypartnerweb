<?php
include('koneksi.php');

function getallrecipes()
{
    global $mysqli;
    $query = "SELECT * from tb_menu";
    if(isset($_GET['search']))
    {
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
    if(isset($_GET['search']))
    {
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
    if(isset($_GET['search']))
    {
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
    if(isset($_GET['search']))
    {
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
    if(isset($_GET['search']))
    {
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
    if(isset($_GET['search']))
    {
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