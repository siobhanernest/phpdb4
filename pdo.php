<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=phpdb_week2',
    'siobhan', 'pa55word');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

