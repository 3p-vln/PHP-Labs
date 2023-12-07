<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    class WordCounter
    {
        public $filename;
        function __construct($filename)
        {
            $this->filename = $filename;
        }

        function countWords()
        {
            if (!file_exists($this->filename)) {
                exit("File does not exist");
            }

            $content = file_get_contents($this->filename);
            $words = explode("\n", $content);

            $wordCount = count($words);

            file_put_contents($this->filename, "{$content}\nWord Count: {$wordCount}");

            return $wordCount;
        }
    }

    $wordCounter = new WordCounter("words.txt");
    $wordCount = $wordCounter->countWords();

    echo "Total words: {$wordCount}";
?>

</body>

</html>