<?php

interface Person
{}

abstract class Athlete implements Person {}

class Runner extends Athlete{}

$runner = new Runner();

if ($runner instanceof Person) {
  echo "true";
}
else echo "false";