<?php

        function debug(){
                // This prints file full path and name
        echo "This file full path and file name is '" . __FILE__ . "'.\n";

        // This prints current line number on file
        echo "This is line number " . __LINE__ . ".\n";
/* 
        // Really simple basic test function
    
            echo "This is from '" . __FUNCTION__ . "' function.\n"; */
        }
    

	function textdebug($text){
		echo $text;
	}

/* 
class debugClass{
    
		// Prints class name
		public function printClassName() {
			echo "This is " . __CLASS__ . " class.\n";
		}

		// Prints class and method name
		public function printMethodName() {
			echo "This is " . __METHOD__ . " method.\n";
		}

		// Prints function name
		public function printFunction() {
			echo "This is function '" . __FUNCTION__ . "' inside class.\n";
		}

		// Prints namespace name (works only with PHP 5.3)
		public function printNamespace() {
			echo "Namespace name is '" . __NAMESPACE__ . "'.\n";
		}

}
 */
?>