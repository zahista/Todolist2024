<?php

namespace Core;

class Email
{
    public static function send(string $from, string $to, string $subject, string $message): bool
    {
        // zakódujeme předmět a nastavíme znakovou sadu na UTF-8 - zakódování probíhá pomocí vestavěné funkce base64_encode
        // tímto zajistíme, že se předmět správně zobrazí i v náhledu zprávy
        $encodedSubject = '=?utf-8?B?' . base64_encode($subject) . '?=';
        // zakódujeme samotné tělo zprávy - zde nastavujeme zalamování slov (wordwrap), základní délku řádků a měníme nové řádky na <br>
        $encodedMessage = wordwrap(base64_encode(nl2br($message, false)), 78, PHP_EOL, true);
        $headers = 'MIME-Version: 1.0' . PHP_EOL . 'Content-type: text/html; charset="utf-8"' . PHP_EOL . 'Content-Transfer-Encoding: base64' .
            PHP_EOL . 'From: ' . $from . PHP_EOL . 'Reply-To: ' . $from . PHP_EOL;

        return mail($to, $encodedSubject, $encodedMessage, $headers);
    }
}
