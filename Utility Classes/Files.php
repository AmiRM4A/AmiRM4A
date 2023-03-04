<?php

class File
{
    private $path;
    public function __construct(string $path)
    {
        if (!is_file($path)) {
            echo "File not found: $path";
        }
        $this->path = $path;
    }
    public function ReadFile()
    {
        $MyFile = fopen($this->path, "r");
        $Read = fread($MyFile, filesize($this->path));
        fclose($MyFile);
        return $Read;
    }
    public function WriteIn($content)
    {
        $MyFile = fopen($this->path, "w");
        $WriteFile = fwrite($MyFile, $content);
        fclose(($MyFile));
        return $WriteFile . ' Words has been succefully writed in your file: ' . "$this->path";
    }
    public function Copy($NewPath)
    {
        if (is_file($NewPath)) {
            return 'File already exists: ' . $NewPath;
        }
        if (copy($this->path, $NewPath)) {
            return true;
        } else {
            return false;
        }

    }
    public function Move($NewPath)
    {
        $MoveFile = $this->Copy($NewPath . basename($this->path));
        if ($MoveFile == true && unlink($this->path)) {
            return "Moving file was succesful";
        } else {
            return "Failed to move file";
        }
    }
}

$File1 = new File('C:\xampp\htdocs\Php\Utility Classes\t.txt');
// echo $File1->ReadFile();
// echo $File1->WriteIn("Hiiii");
// echo $File1->Copy('C:\xampp\htdocs\Php\Utility Classes\t2.txt');
$NewPath = 'C:\xampp\htdocs\Php\Utility Classes\move\\';
echo $File1->Move(str_replace(['\\', '/'], $NewPath, DIRECTORY_SEPARATOR));