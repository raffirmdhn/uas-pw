<?php

$BASE_URL = "/UAS_PW_BENGKEL";

function isActivePage($path)
{
  return basename($_SERVER['REQUEST_URI']) === $path;
}
