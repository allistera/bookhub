<?php

class History extends Eloquent 
{
  public static $table = "history";

  public function ebook()
  {
      return $this->belongs_to('Ebook');
  }
}