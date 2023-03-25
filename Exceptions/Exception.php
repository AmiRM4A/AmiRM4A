<?php
set_exception_handler(function ($exception) {
    var_dump($exception);
});

throw new Exception("An Error Occurd...");

set_error_handler(function (E_All){

})