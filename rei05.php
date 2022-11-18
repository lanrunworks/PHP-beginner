<body>
    <?php
        $moji = "文字列";
        
        echo '引用符では$mojiとなる<br>';

        echo "2重引用符では$mojiとなる<br>";

        echo "2重引用符では $moji となる<br>";

        echo "2重引用符では{$moji}となる<br>";
        
        print "2重引用符では$mojiとなる<br>";
        print "2重引用符では\$mojiとなる<br>";
    ?>
</body>