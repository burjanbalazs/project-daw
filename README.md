#####################################################


This is a simple website made from a template given to
us by our professor. This is a great template for
creating portfolio websites.

It is responsive, mobile-friendly.


It features a MySQL database in order to register and 
log in users, and uses Postfix to send e-mails to users
who decide to subscribe to our newsletter.

The webserver was hosted by DigitalOcean. I created a
LAMP one-click droplet, and it set me up with a fully
configured lamp-stack, it set up an UFW firewall. It
truly is one-click, I can recommend wholeheartedly.

I bought the domain burjanbalazs.com from NameCheap,
which is a great domain registrar. I signed up to 
CloudFlare with a free plan, set the nameservers on
NameCheap as instructed by CloudFlare, and set up
all the DNS stuff. This is great because now all the
web traffic, all the requests go through cloudflare,
so my origin ip remains hidden, even if you do a whois
lookup on the domain.


I set up the SSL stuff with Let's Encrypt Certbot.
Great software, really easy to use and set up. It
even asks if you want Certbot to set up redirection
of normal HTTP traffic. This redirects every request
made with HTTP to HTTPS, so you can't acces the site
insecurely, only through HTTPS.

I installed PHPMyadmin for easier SQL database management.
Great software, it speeds up everything, not having to
work with the black and white screen of a console.
PHPMyadmin really is a prime target for hackers so I
added an extra layer of security using an .htacces file.

#######################################################
