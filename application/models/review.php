<?php

class Review extends Eloquent 
{
     public function ebook()
     {
          return $this->belongs_to('Ebook');
     }
}