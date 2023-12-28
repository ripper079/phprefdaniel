<?php

/**
 *
 *  Demonstrates how buffers work before getting output
 *  PS  Function that modify/send HTTP headers must be invoked BEFORE and output is made
 * e.i header,header_remove, session_start,session_regenerate_id, setcookie, setrawcookie
 * Unintentional
 *  - Whitespace before <?php or after ?>
 *  - UTF-8 Byte Order Mark
 *  - Previous error messages or notices
 * Intentional
 *  - print, echo
 *  - rad <html> sections prior <?php code
 *
 *
 */

function testBufferOne()
{
    ob_start();                             //Turn/start on buffering
    echo "First <br />";                    //put/addend to that buffer
    ob_end_flush();                         //Flush and output(send) the buffer to output. Also closes the buffer!

    ob_start();                             //Turn/start on buffering
    echo "Second <br />";                   //put/addend to that buffer
    ob_end_clean();                         //Remove content in buffer. Also closes the buffer!

    ob_start();                             //Turn/start on buffering
    echo "Last <br />";                     //put/addend to that buffer
    ob_end_flush();                         //Flush and output(send) the buffer to output. Also closes the buffer!
}


function altBuffer()
{
    $flagOkBuffer = ob_start();             //Turn/start on buffering
    echo "First <br />" . $flagOkBuffer;    //put/addend to that buffer
    ob_flush();                             //Flush and output(send) the buffer to output. Do NOT close the buffer

    echo "Second <br />";                   //put/addend to that buffer
    ob_clean();                             //Remove content in buffer. Do NOT close the buffer!

    echo "Third <br>";                      //put/addend to that buffer
    ob_end_flush();                         //Flush and output(send) the buffer to output. Also closes the buffer!
}

function stackBuffers()
{
    ob_start();                             //Turn/start on buffering
    echo "Hello first!<br />";              //put/addend to that buffer

    ob_start();                             //Stack a new buffer on top of an existing one
    echo "Hello second <br />";             //put/addend to that buffer

    ob_clean();                             //Removes the latest/top buffer
}

# testBufferOne();
# altBuffer();
stackBuffers();
