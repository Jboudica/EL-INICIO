<?php
class Node {
    public $data;
    public $next;
    public function __construct($data)
    {
         $this->data = $data;
         $this->next =null;
    }
}
class LikendList{
    private $head;
    public function ___construct(){
       $this->head = null;
    }
    public function add($data){
        $node = new Node($data);
        if($this->head == null){
            $this->head = $node;
        }else{
            $current = $this->head;
            while($current->next !=null){
                $current = $current->next;
            }
            $current->next=$node;
        }
    }
    public function display(){
        $list =[];
        $current = $this->head;
        while($current !=null){
            $list[] = $current->data;
            $current = $current->next;
        }
        return $list;
    }
}
$objeto = new LikendList();
$objeto->add(1);
$objeto->add(2);
$objeto->add(3);
$objeto->add(4);
print_r($objeto->display());
?>