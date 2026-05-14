<?php
class UserInfo {
    public static function getInfo(): array {
        return [
            'IP-адрес' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
            'Браузер' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown',
            'Дата/Время' => date('Y-m-d H:i:s')
        ];
    }
}