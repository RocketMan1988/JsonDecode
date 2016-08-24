<?php
/**
 * The BlankParserFunction extension enables the my-function parser function.
 * 
 * Documentation: http://???
 * Support:       http://???
 * Source code:   http://???
 *
 * @file BlankParserFunction.body.php
 * @addtogroup Extensions
 * @author YOUR NAME
 * @copyright © 2014 by YOUR NAME
 * @licence GNU GPL v3+
 */

class BlankParserFunction
{

	static function setup ( &$parser ) {
		
		$parser->setFunctionHook(
			'jsonDecode', // the name of your parser function, the same as the $magicWords value you set in BlankParserFunction.i18n.php 
			array(
				'JSONDecode',  // class to call function from
				'renderJSONDecode' // function to call within that class
			),
			SFH_OBJECT_ARGS // defines the format of how data is passed to your function...don't worry about it for now.
		);

		return true;
		
	}
	

	static function renderJSONDecode ( &$parser, $frame, $args ) {

		self::addJSandCSS(); // adds the javascript and CSS files 
		
		$i = 0;
		$j = 0;
		$argCount = 0;
		
		#Count how many arguments there are
		$argCount = count($args);
		
		$parameters = array();
		$values = array();
		
		#Calculate the parameter count the user provided
		$parametersCount = ($argCount - 2) / 2
		
		#Assign values from arguments ^_^ 
		foreach ($argsValue as $args) 
		{
			if ($i > 1)
			{
				#Assign all parameters and thier values
				if ($i > ($parametersCount + 1))
				{
					#Set Parameter
					$parameters = trim( $frame->expand($args[i]) );
				}
				else{
					#Set Value of Parameter
					$values = trim( $frame->expand($args[i]) );
				}
			}
			else
			{
				#First or Second Parameter - This is done twice - Add later a Continue Statment(Do they exist within PHP? - Please don't tell me that PHP has GoTo statements!!!)
				$url = trim( $frame->expand($args[0]) );
				$element = trim( $frame->expand($args[1]) );				
			}
		
			$i = $i + 1;
		}
		
		#Build div tags to be written to the page. The div tags will be used by Javascript to execute the query and extract the requested information.
		$text .= "<div class='jsonDecodeThis'>Loading JSON and Decoding...Please Wait...";
		
		$i = 0
		
		foreach ($argsValue as $args) 
		{
			if ($i = 0)
			{
				$text .= "<span class='"
				$text .= "url"
				$text .= "'>$url</span>"
			}
			elseif ($i = 1) 
			{
				$text .= "<span class='"
				$text .= "element"
				$text .= "'>$element</span>"				
			}
			else
			{		
				#Assign all parameters and thier values
				if ($i > ($parametersCount + 1))
				{
					#Set Parameter
					$text .= "<span class='"
					$text .= "parameter_$j"
					$text .= "'>$parameters[j]</span>"
					$j = $j + 1
				}
				else{
					#Set Value of Parameter
					$text .= "<span class='"
					$text .= "parameter_$j"
					$text .= "'>$parameters[j]</span>"
					$j = $j + 1
				}	
			}
			$i = $i + 1;
		}
		
		$text .= "...</div>"

		return $text;
	}
	
	static function addJSandCSS () {
	
		global $wgOut, $wgExtensionAssetsPath;
		
		$wgOut->addScriptFile( "$wgExtensionAssetsPath/TBD/JSONDecodeParserFunction.js" );

		$wgOut->addLink( array(
			'rel' => 'stylesheet',
			'type' => 'text/css',
			'media' => "screen",
			'href' => "$wgExtensionAssetsPath/TBD/JSONDecodeParserFunction.css
		) );
		
		return true;

	}
	
}