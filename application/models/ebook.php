<?php

class Ebook extends Eloquent 
{
     public function votes()
     {
          return $this->has_many('Vote');
     }

     public function reviews()
     {
          return $this->has_many('Review');
     }

     public function get_voteCount()
     {

        $votes = Ebook::find($this->get_attribute('id'))->votes;

        $newCount = 0;
        foreach ($votes as $key => $value) {

            if($value->type == 1){
                $newCount++;
            }elseif($value->type == 0){
                $newCount--;
            }
        }

        return $newCount;
     }
}