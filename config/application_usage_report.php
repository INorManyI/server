<?php

$prefix = 'APPLICATION_USAGE_REPORT_';


return [
    /**
     * Временной интервал (в часах), за который собираются данные для отчета
     */
    'max_data_age' => env("{$prefix}MAX_DATA_AGE", 24),

    /**
     * Максимальный срок (в минутах) выполнения задачи
     */
    'max_execution_time' => env("{$prefix}MAX_EXECUTION_TIME", 2),

    /**
     * Таймаут между повторениями (в минутах) операции
     */
    'attempt_timeout' => env("{$prefix}ATTEMPT_TIMEOUT", 1000),

    /**
     * Количество повторений задачи
     */
    'max_attempts' => env("{$prefix}MAX_ATTEMPTS", 2),
];
