<?php
class Menus{
  private $name;
  private $condition;
  private $image;
  private $price;
  protected $order_count=0;

  public function __construct($name,$condition,$image,$price){
    $this->name=$name;
    $this->condition=$condition;
    $this->image=$image;
    $this->price=$price;
  }

  public function get_name(){
    return $this->name;
  }

  public function get_condition(){
    return $this->condition;
  }

  public function get_image(){
    return $this->image;
  }

  public function get_include_price(){
    return $this->price*1.08;
  }

  public function set_order_count($order_count){
    $this->order_count=$order_count;
  }

  public function get_order_count(){
    return $this->order_count;
  }

  public function get_total_price(){
    return $this->get_include_price()*$this->order_count;
  }

}

 ?>
