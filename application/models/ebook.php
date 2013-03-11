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
}