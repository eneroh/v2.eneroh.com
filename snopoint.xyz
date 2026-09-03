server {
    root /var/www/eneroh.com;
    index index.html;
    server_name eneroh.com www.eneroh.com;

    listen 443 ssl; # managed by Certbot

    # RSA certificate
    ssl_certificate /etc/letsencrypt/live/eneroh.com/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/eneroh.com/privkey.pem; # managed by Certbot

    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot

    # Redirect non-https traffic to https
    if ($scheme != "https") {
        return 301 https://snopoint.xyz$request_uri;
    } # managed by Certbot
}


server {
    if ($host = www.eneroh.com) {
        return 301 https://eneroh.com$request_uri;
    } # managed by Certbot


    if ($host = eneroh.com) {
        return 301 https://eneroh.com$request_uri;
    } # managed by Certbot

    listen 80;
    listen [::]:80;
    root /var/www/eneroh.com;
    index index.html;
    server_name  snopoint.xyz www.eneroh.com;
    
    # RSA Certificate
    ssl_certificate /etc/letsencrypt/live/eneroh.com/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/eneroh.com/privkey.pem; # managed by Certbot

    return 404; # managed by Certbot

    location / {
    	try_files $uri $uri.html $uri/ =404;
    }

}

