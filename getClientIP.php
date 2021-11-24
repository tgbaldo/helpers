<?php

function getClientIp(): ?string
{
    $headers = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];
    
    foreach ($headers as $key => $value) {
        if (getenv($value)) {
            return getenv($value);
        }
    }

    return null;
}
