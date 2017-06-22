<?php
  /* Related to a question on zendexam.com
   * Link: http://www.zendexam.com/question/316/consider-the-use-of-bitwise-operators-on-hexadecimal-values-what-is-the-output-of-the-following-php-script/ 
   * Subjects: Hexadecimals, Binary, Bitwise operators 
   *
   * Question "Consider the use of bitwise operators on hexadecimal values. What is the output of the following PHP script?"
   */
   
    $a = 0xF0;
    $b = 0x0F;

    $val1 = $a & $b; // bitwise AND
    $val2 = $a | $b; // bitwise OR
    $val3 = $a ^ ($b | $a); // bitwise XOR

    echo sprintf('0x%02X - 0x%02X - 0x%02X', $val1, $val2, $val3);

    /*
     * Explanation below
     *
     * Use these websites to understand 
     * - Hexadecimal: https://www.beterrekenen.nl/website/index.php?pag=260
     * - Binary: http://beterrekenen.nl/website/index.php?pag=259
     * - Bitwise operators in PHP: http://php.net/manual/en/language.operators.bitwise.php
     */

    /* Step 1: Calculate what value FO & 0F is
     *    $a = 0xF0; 
     *    $b = 0x0F; 
     * F = 15, 0 = 0; means (15 * 16) + 0 = 240 
     * 0 = 0, F = 15; means ( 0 * 16) + 15 = 15   = binair  00001111 
     */
     
    /* Step 2: Calculate binary values 
     * 240 = 128 + 64 + 32 + 16 = 11110000
     * 15  = 8 + 4 + 2 + 1      = 00001111
     */
  
    /* Step 3: Use binary values with the bitwise operators below
     * 
     * $val1 = $a & $b; // 11110000 & 00001111 = 00000000
     * & = the bitwise AND operator; means it checks if a bit is set in both values.
     * $val2 = $a | $b; // 11110000 | 00001111 = 11111111
     * // | = the bitwise OR operator; means it checks if a bit is set in one of the values
     * $val3 = $a ^ ($b | $a); // 11110000 ^ 11111111
     * ^ = the bitwise XOR operator; means it checks if a bit is set in one of the values, but not both
     */ 
     
    /* Step 4: Transform binary values to normal values
     * $val1 has binary value: 00000000, means 0, 
     * $val2 has binary value: 11111111, means 255 (128 + 64 + 32 + 16 + 8 + 4 + 2 + 1)
     * $val3 has binary value: 00001111, means 15 (8 + 4 + 2 +1)
     */ 
     
    /* Step 5: Transform values to hexadecimal values
     * $val1 has value 0, means hexadecimal 0 = in PHP 0x00
     * $val2 has value: 255, means hexadecimal FF = in PHP 0xFF ( ( 15 * 16) + 15)
     * $val3 has value: 15, means hexadecimal 0F = in PHP 0x0F  ( (  0 * 16) + 15)  
     */ 
	
    /* Step 6: Check output in sprintf function to answer the question */
?>
	
