<?php

namespace App\Utility;

class FakeUtility
{
  public function __construct(public string $status = 'it works!')  // php 8 magic
  {

  }
}