<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class A
    {
        public static function test()
        {
            echo 1;
        }

        public static function get()
        {
            static::test();
        }
    }

    class B extends A
    {
        public static function test()
        {
            echo 2;
        }
    }
    B::get();
    ?>

</body>

</html>