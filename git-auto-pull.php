<?php
$repo_path = "/home/amaz9546/public_html";

shell_exec("cd {$repo_path} && git pull origin main 2>&1");

echo "Git pull berhasil dijalankan!";
?>
