<?php

class Post
{
  // lets us store the value for the life of the app
  private static $renderer;

  public static function setup()
  {
    // only set value if it's not been set yet
    if (!static::$renderer) {
      static::$renderer = doComplexThingThatTakesLotsOfEffort();
    }
  }

  public function __construct()
  {
    // run setup everytime object created, will only do something the first time
    static::setup();
  }

  public function render()
  {
    // can use
    static::$renderer->render();
  }
}
