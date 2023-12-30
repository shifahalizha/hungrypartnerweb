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
?>