// Assuming, you are using virtual host. Create .htaccess file in your doc root and paste the following

RewriteEngine on
RewriteCond $1 !^(index\.php|assets|data|robots\.txt)
RewriteRule ^(.*)$ /index.php/$1 [L]
