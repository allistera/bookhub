<?php

class Vote extends Eloquent 
{
     public function ebook()
     {
          return $this->belongs_to('Ebook');
     }
}