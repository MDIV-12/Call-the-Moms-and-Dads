<?php

return function ($context) {
    $context->log('The Appwrite function received a request.');

    return $context->res->text('Function is running.');
};
