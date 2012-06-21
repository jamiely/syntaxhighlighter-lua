<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Lua Brush
Description: Adds support for the Lua language to the SyntaxHighlighter Evolved plugin.
Author: Jamie Ly
Version: 1.0.0
Author URI: http://jamiely.com
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_lua_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_lua_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_lua_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-lua', plugins_url( 'shBrushLua.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_lua_addlang( $brushes ) {
    $brushes['lua'] = 'lua';
    return $brushes;
}
 
?>
