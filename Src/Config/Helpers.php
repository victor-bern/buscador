<?php 

function url(string $path = null)
{
    if ($path) {
        return CONF_BASE_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_BASE_URL;
}

function theme(string $path = null)
{
    if ($path) {
        return CONF_BASE_URL . "/" . TEMPLATE_BASE_FOLDER_ASSETS . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_BASE_URL . TEMPLATE_BASE_FOLDER_ASSETS;

}