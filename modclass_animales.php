<?php
//ejemplo dado por coach

class Node{
    public $team;
    public $wins;
    public $losses;
    public $left;
    public $right;
    public function construct($team,$wins,$losses){
        $this->team =$team;
        $this->wins =$wins;
        $this->losses =$losses;
        $this->left =null;
        $this->right =null;
    }
}
class BinarySearchTrees{
    public $root;
    public function __construnct(){
        $this->root =null;
    }
    public function insert($team,$wins,$losses){
        $node = new Node($team,$wins,$losses);
        if($this->root ===null){
            $this->root = $node;
        }else{
            $this->insertNode($this->root , $node);
        }
    }
    public function insertNode($node , $newnode){
        if($newnode->wins < $node->wins){
            if($node->left ===null){
                $node->left =$newnode;
            }else {
                $this->insertNode($node->left , $newnode);
            }
        }else{
            if($node->right===null){
                $node->right =$newnode;
            }else{
                $this->insertNode($node->right , $newnode);
            }
        }
    }
    public function search ($node,$team){
        if($node===null){
            return false;
        }
        if($node->team ===$team){
            return $node;
        }elseif($node->team > $team){
            return $this->search($node->left , $team);
        }else{
            return $this->search($node->right , $team);
        }
    }
}
$binary = new BinarySearchTrees();
$binary->insert("Alianza",30,5);
$binary->insert("Aguila",8,20);
$binary->insert("Platense",15,5);
$binary->insert("Atletico",30,1);
$binary->insert("Destroyer",50,0);
$binary->insert("Cadiz",60,1);
$result = $binary->search($binary->root,"Atletico");
if ($result) {
    echo "Team: " . $result->team . "\n";
    echo "Wins: " . $result->wins . "\n";
    echo "Losses: " . $result->losses . "\n";
} else {
    echo "Team not found.\n";
}





