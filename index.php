<?php

echo "<html><head><title>CurryWaffel - The Ultimate</title></head><body>";

for ($i=0; $i < 100; $i++) {
    echo "<script>window.open('/getMeImage.php?number=$i')</script>";
}

echo "</body></html>";
