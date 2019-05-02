<?php
    $path = '/dir1/dir2/myfile.php';
    $file = 'file1.txt';

    /* echo basename($path);

    echo basename($path, '.php');

    echo '<br>';
    echo dirname($path);

    echo file_exists($file);

    // Get abs path
    echo realpath($file);

    // is file (file exist search in subdir also)
    echo is_file($file);

    echo is_writable($file);

    // get file size
    echo '<br>'.filesize($file);

    mkdir('testing');

    rmdir('testing');

    // copy file
    echo copy('file1.txt', 'file2.txt');

    rename('file2.txt', 'copiedfile.txt');

    unlink('myfile.txt'); */

    // write from file to string;
    // echo file_get_contents($file);
    // echo file_put_contents($file, 'Goodbye world');

    // $current = file_get_contents($file);
    // $current .= 'Goodby world';
    // file_put_contents($file, $current);

    // read file
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;

    // write file
    $handle = fopen($file, 'w');
    $txt = 'Jone Doe';
    fwrite($handle, $txt);
    fclose($handle);
    // echo $data;
?>