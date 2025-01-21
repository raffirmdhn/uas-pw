<?php

$BASE_URL = "/uas-pw";

function isActivePage($path)
{
  return basename($_SERVER['REQUEST_URI']) === $path;
}
