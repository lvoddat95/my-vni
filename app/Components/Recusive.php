<?php 
namespace App\Components;

class Recusive {

    private $data;
    private $htmlSelect = '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    // De quy danh sach categories
    public function categoryRecusive( $parentId, $id = 0, $sep = '')
    {
        foreach ($this->data as $key => $item){
            if ( $item['parent_id'] == $id ) {
                if ( !empty($parentId) && $parentId == $item['id'] ){
                    $this->htmlSelect .= "<option selected value='".$item['id']."' >". $sep.$item['name'] ."</option>";
                }else{
                    $this->htmlSelect .= "<option value='".$item['id']."' >". $sep.$item['name'] ."</option>";
                }
                unset($this->data[$key]);
                $this->categoryRecusive($parentId, $item['id'], $sep."--");
            }
        }

        return $this->htmlSelect;

    }

}