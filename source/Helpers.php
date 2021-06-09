<?php

/**
 * site
 *
 * @param  mixed $param
 * @return string
 */
function site(string $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }

    return SITE["root"];
}

/**
 * asset
 *
 * @param  mixed $path
 * @return string
 */
function asset(string $path): string
{
    return SITE['root'] . "/views/assets/{$path}";
}

/**
 * flash
 *
 * @param  mixed $type
 * @param  mixed $message
 * @return string
 */
function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "mensagem" => $message
        ];

        return null;
    }

    if (!empty($_SESSION["flsh"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message{$flash["type"]}\">{$flash["message"]}</div>";
    }

    return null;
}
