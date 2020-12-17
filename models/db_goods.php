<?php
include_once "../config/config.php";
function goods_delete($connect, $id)
{
    $id = (int)$id;

    if ($id == 0)
        return false;

    $query = sprintf("DELETE FROM catalog where id='%d'", $id);
    $result = mysqli_query($connect, $query);
}

function goods_get($connect, $id){
    $query = sprintf("SELECT * FROM catalog where id=%d ",(int)$id);
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

function goods_edit($connect, $id, $title, $description, $full_description, $price, $path_to_picture)
{
    $id = (int)$id;

    $sql = "UPDATE catalog SET title='%s',description='%s',full_description='%s',price='%s',path_to_picture='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connect, $title), mysqli_real_escape_string($connect, $description), mysqli_real_escape_string($connect, $full_description), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $path_to_picture), $id);

    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}