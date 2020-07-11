<?php

######database version 1.2
//this will include get(select),insert,update,delete function

require_once 'lib.inc'; //require theo tên chứa database
$cn = getConnect();

#Hàm get thực hiện select
//return array of many or 1 item(if only found one)
//print_r() -> de xem array
function get($table, $field = array(), $where = "") {
    global $cn;
    $list_field = !empty($field) ? implode(",", $field) : "*";
    $where = !empty($where) ? "WHERE {$where}" : "";

    $sql = "SELECT {$list_field} FROM {$table} {$where}";
    $result = mysqli_query($cn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
        // if (count($data) > 1) {
        //     return $data;
        // } else {
        //     return $data[0];
        // }
    } else {
        echo "Can't find this record";
    }
}

#function insert
//return 1 when insert successfull
function insert($table, $data) {
    global $cn;
    foreach ($data as $k => $v) {
        $list_field[] = "`{$k}`";
        //$temp = "'".mysqli_real_escape_string($cn,$v)."'";
        $list_value[] = "'".mysqli_real_escape_string($cn,$v)."'";
        
    }
    
    $list_field = implode(",", $list_field);
    $list_value = implode(",", $list_value);

    $sql = "INSERT INTO {$table} ({$list_field}) VALUES ({$list_value})";
    echo $sql;
    if (mysqli_query($cn, $sql) == TRUE) {
        return 1;
        //return mysqli_insert_id($link);
    } else {
        echo "Error: " . mysqli_error($cn);
    }
}


#function update
//return 1 when update successfull
function update($table, $data = array(), $where = "") {
    global $cn;
    $data_insert = array();
    foreach ($data as $k => $v) {
        $data_insert[] = "`{$k}`='{$v}'";
    }
    $data_insert = implode(",", $data_insert);
    $where = !empty($where) ? "WHERE {$where}" : "";
    $sql = "UPDATE {$table} SET {$data_insert} {$where}";
    if (mysqli_query($cn, $sql)) {
        return 1;
    } else {
        echo "Error: " . mysqli_error($cn);
    }
}

#function delete
//return 1 when delete successfull
function delete($table, $where = "") {
    global $cn;
    $where = !empty($where) ? "WHERE {$where}" : "";
    $sql = "DELETE FROM {$table} {$where}";
    if (mysqli_query($cn, $sql)) {
        return 1;
    } else {
        echo "Error: " . mysqli_error($cn);
    }
}


