<?php


class MyList
{
    public $myList;

    public function myList($arr = '')
    {
        if (is_array($arr)) {
            $this->myList = $arr;
        } else {
            $this->myList = array();
        }
    }

    public function get($index){
        if ($this->isInteger($index)){
            return $this->myList[$index];
        } else {
            die("Error in get function");
        }
    }

    public function insert($index, $obj)
    {
        array_splice($this->myList,$index,1,$obj);
    }

    public function add($obj)
    {
        array_push($this->myList, $obj);
    }

    public function remove($index){
        if ($this->isInteger($index)) {
            $newMyList = [];
            for ($i = 0; $i < $this->size(); $i++){
                if ($i != $index) {
                    array_push($newMyList,$this->get($i));
                }
            }
            $this->myList = $newMyList;
        } else {
            die("Error in remove function");
        }
    }

    public function clear(){
        $this->myList = array();
    }

    public function addAll($arr){
        if (is_array($arr)){
            array_merge($this->myList,$arr);
        } else {
            die('Error in add all');
        }
    }

    public function indexOf($obj){
        return array_search($obj,$this->myList);
    }

    public function isEmpty() {
        if ($this->size == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function sort() {
        sort($this->myList);
    }

    public function reset() {
        return $this->myList;
    }

    public function size(){
        return count($this->myList);
    }

    public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/",$toCheck);
    }
}