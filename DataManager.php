<?php
const FILENAME = 'data.json';

function savaData($data){
    $dataArray = loadData();
    array_push($dataArray, $data);
    file_put_contents(FILENAME, $dataArray);
}

function loadData(){
    $dataJson = file_get_contents(FILENAME);
    return json_decode($dataJson, true);
}