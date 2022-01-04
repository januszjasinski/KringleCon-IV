The source code for the site is in here somewhere....

- [Trying to send email using the config settings](https://github.com/januszjasinski/KringleCon-IV/blob/main/Now%20Hiring/mailtrap.py)
- [NGINX Config](https://github.com/januszjasinski/KringleCon-IV/blob/main/Now%20Hiring/nginx.conf)
- [Source code](https://github.com/januszjasinski/KringleCon-IV/blob/main/Now%20Hiring/index.php)
- [Passwd](https://github.com/januszjasinski/KringleCon-IV/blob/main/Now%20Hiring/passwd.txt)
- [Brute force 1](https://github.com/januszjasinski/KringleCon-IV/blob/main/Now%20Hiring/forst_numbers.py)
- [Brute force 2](https://github.com/januszjasinski/KringleCon-IV/blob/main/Now%20Hiring/frost_rock.py)

You could also pass ```php://input``` as the URL, change to a ```POST``` request and whatever data you send will be saved against that image. Exciting eh?

Logs are not to file so we can't get at them unfortunately

```nginx
access_log /dev/stdout main_timed;
error_log /dev/stderr notice;
```