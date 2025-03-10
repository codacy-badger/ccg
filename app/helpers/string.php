<?php

/**
 * Explode string by lines
 * @param string $multiline_string - string to be exploded
 *
 * @return array - array of lines
 */
function explode_by_new_line(string $multiline_string): array
{
    return preg_split("/\r\n|\n|\r/", $multiline_string);
}

/**
 * Parses srings like main_settings_section to Main settings section
 */
function parse_to_readable(string $source): string
{
    return ucfirst(
        preg_replace(
            '/_+/',
            ' ',
            mb_strtolower($source)
        )
    );
}

/**
 * Parses strings like addon-xml to addonXml
 * @param string $string 
 * 
 * @return string
 */
function to_camel_case(string $string): string
{
    return preg_replace_callback('/(-(\w+))/', function($matches) {
        return ucfirst($matches[2]);
    }, $string);
}
