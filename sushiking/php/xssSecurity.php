<?php
    //when outputting variable use function e() for exampple: echo e($example)
    function e($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
