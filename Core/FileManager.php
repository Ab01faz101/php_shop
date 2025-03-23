<?php

namespace Core;

class FileManager
{
    private $uploadDir;

    public function __construct($uploadDir = 'uploads/')
    {
        $this->uploadDir = rtrim($uploadDir, '/') . '/';
        if (!is_dir($this->uploadDir)) {
            mkdir($this->uploadDir, 0777, true);
        }
    }

    public function uploadFile($file) {
        if (!isset($file['tmp_name']) || !isset($file['name'])) {
            return false;
        }
        $targetFile = $this->uploadDir . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $targetFile; // مسیر ذخیره‌شده را برمی‌گرداند
        }
        return false;
    }

    public function deleteFile($filename)
    {
        $filePath = $this->uploadDir . $filename;
        return file_exists($filePath) ? unlink($filePath) : false;
    }

    public function readFile($filename)
    {
        $filePath = $this->uploadDir . $filename;
        return file_exists($filePath) ? file_get_contents($filePath) : false;
    }

    public function fileExists($filename)
    {
        return file_exists($this->uploadDir . $filename);
    }

    public function listFiles()
    {
        return array_diff(scandir($this->uploadDir), ['.', '..']);
    }

}