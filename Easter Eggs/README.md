
# Jason

Hiding in Jack's Executive Restroom

![Jason](https://github.com/januszjasinski/KringleCon-IV/blob/main/Easter%20Eggs/jason.PNG "Jason")

#  Printer: Secret end point

https://printer.kringlecastle.com/secretendpointforuptime revealing the text: **follow the white rabbit**. This was found in the application code.

    get '/secretendpointforuptime' do
      return File.read('/tmp/uptime-check.txt')
    end

#  Printer: Bird knob

I hope this is an easter egg! This was in `/var/spool`

![Bird Knob](https://github.com/januszjasinski/KringleCon-IV/blob/main/Easter%20Eggs/birdknob.png "Bird Knob")

#  Shenanigans

Open burp, intercept websocket, change a request when teleporting to the following and voila:

    {"type":"TELEPORT_USER","destination":"shenanigans"}

![shenanigans](https://github.com/januszjasinski/KringleCon-IV/blob/main/Easter%20Eggs/shenanigans.PNG "shenanigans")

# Yara Analysis

When completing this terminal you get the following output:

    Elf Jolliness Quotient: 4a6f6c6c7920456e6f7567682c204f76657274696d6520417070726f766564

Do a HEX to Acii conversion and voila:

    Jolly Enough, Overtime Approved

# Picture frames

Already covered in previous KringleCons such as https://holidayhackchallenge.com/2020/winners/HolidayHack_2020_Final_Mark_Mulvaney.pdf but you know.... content

![shenanigans](https://github.com/januszjasinski/KringleCon-IV/blob/main/Easter%20Eggs/frames.PNG "shenanigans")

# Dimitri

I see you but where are you hiding...

![Dimitri](https://github.com/januszjasinski/KringleCon-IV/blob/main/Easter%20Eggs/dimitri.gif "Dimitri")

# Shell primer passwd file

I know it's not strictly an easter egg but still...

    root:x:0:0:root:/root:/bin/bash
    daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
    bin:x:2:2:bin:/bin:/usr/sbin/nologin
    sys:x:3:3:sys:/dev:/usr/sbin/nologin
    sync:x:4:65534:sync:/bin:/bin/sync
    games:x:5:60:games:/usr/games:/usr/sbin/nologin
    man:x:6:12:man:/var/cache/man:/usr/sbin/nologin
    lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin
    mail:x:8:8:mail:/var/mail:/usr/sbin/nologin
    news:x:9:9:news:/var/spool/news:/usr/sbin/nologin
    uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin
    proxy:x:13:13:proxy:/bin:/usr/sbin/nologin
    www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin
    backup:x:34:34:backup:/var/backups:/usr/sbin/nologin
    list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin
    irc:x:39:39:ircd:/run/ircd:/usr/sbin/nologin
    gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin
    nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin
    _apt:x:100:65534::/nonexistent:/usr/sbin/nologin
    mandrake:x:1000:1000::/home/mandrake:/bin/sh