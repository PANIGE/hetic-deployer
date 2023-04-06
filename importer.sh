username=$1
password=$2
domain=$3

cp -r /www/deployer/template /www/$domain

echo "s/%(USERNAME)/$username/";
find /www/$domain -type f | xargs sed -i  "s/%(USERNAME)/$username/g"
find /www/$domain -type f | xargs sed -i  "s/%(PASSWORD)/$password/g"
find /www/$domain -type f | xargs sed -i  "s/%(DOMAIN)/$domain/g"


cp /www/$domain/etc/nginx.conf /etc/nginx/sites-enabled/$domain
sudo mysql -u root < /www/$domain/etc/database.sql
sudo service nginx restart
