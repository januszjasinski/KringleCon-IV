
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

# Apply

With all the images being accessible, it's amusing to see what people try and get up to

    alan@XPS:~$ curl https://apply.jackfrosttower.com/images/E.jpg
    root:x:0:0:root:/root:/bin/ash
    bin:x:1:1:bin:/bin:/sbin/nologin
    daemon:x:2:2:daemon:/sbin:/sbin/nologin
    adm:x:3:4:adm:/var/adm:/sbin/nologin
    lp:x:4:7:lp:/var/spool/lpd:/sbin/nologin
    sync:x:5:0:sync:/sbin:/bin/sync
    shutdown:x:6:0:shutdown:/sbin:/sbin/shutdown
    halt:x:7:0:halt:/sbin:/sbin/halt
    mail:x:8:12:mail:/var/spool/mail:/sbin/nologin
    news:x:9:13:news:/usr/lib/news:/sbin/nologin
    uucp:x:10:14:uucp:/var/spool/uucppublic:/sbin/nologin
    operator:x:11:0:operator:/root:/sbin/nologin
    man:x:13:15:man:/usr/man:/sbin/nologin
    postmaster:x:14:12:postmaster:/var/spool/mail:/sbin/nologin
    cron:x:16:16:cron:/var/spool/cron:/sbin/nologin
    ftp:x:21:21::/var/lib/ftp:/sbin/nologin
    sshd:x:22:22:sshd:/dev/null:/sbin/nologin
    at:x:25:25:at:/var/spool/cron/atjobs:/sbin/nologin
    squid:x:31:31:Squid:/var/cache/squid:/sbin/nologin
    xfs:x:33:33:X Font Server:/etc/X11/fs:/sbin/nologin
    games:x:35:35:games:/usr/games:/sbin/nologin
    postgres:x:70:70::/var/lib/postgresql:/bin/sh
    cyrus:x:85:12::/usr/cyrus:/sbin/nologin
    vpopmail:x:89:89::/var/vpopmail:/sbin/nologin
    ntp:x:123:123:NTP:/var/empty:/sbin/nologin
    smmsp:x:209:209:smmsp:/var/spool/mqueue:/sbin/nologin
    guest:x:405:100:guest:/dev/null:/sbin/nologin
    nobody:x:65534:65534:nobody:/:/sbin/nologin
    nginx:x:100:101:nginx:/var/lib/nginx:/sbin/nologin

# WebSocket messages

    {"type":"WS_OHHIMARK","userId":"42661","sid":"MDcyMTQ5MGEtZDI5OS00ZWYxLTk1MDgtMmVmMDQ5NDliYjFh"}
    {"type":"CHORT","chat":[...
    {"type":"OOOH_SPARKLY","colors":["#ffff00","#1000ff","#2eff2b"]}
    {"type":"AAANNNDD_SCENE","areaData":...
    {"type":"AUF_WIEDERSEHEN","userId":"14303"}
    {"type":"SIDDOWN","location":[[5,0]],"userId":"42661"}
    {"type":"REX","cell":[1,-1]}

# Where in the World is Caramel Santiago?

When you play the game, the cookie gets set and using [Flask Unsign](https://pypi.org/project/flask-unsign/) you can just get the answers to the game:

    alan@XPS:/SANS$ flask-unsign --decode --cookie '.eJx1Uk1v2zAM_SuELrs4g5M4iZ1b1311wNYi6TYMzQ60RFuaZcmQ5RRZ0f8-Ku1hh_YkiXzke3zig1B4Elvx1bt0yQTZhp9fjGstwY6Pxgf1FP9sXBzF9k7cagJ-Q08uGu9Iweh7iprRgLWfIuwjyg6ujxQa6-8BnYJP3qJr33IrLj9BR0MEqUl2qSpqMgH2DgepMQIOQwJe6wyuwPloJHPEVKZRAab2AX5iGFOw59ygWQZIHOmZ4Kyv9RECobVcRxgZ96RuGhPnOKCkEXg-ME7xKGOq1cjj_ubTT0Fsq0xYLzFNya7s0UV8M8IljtESg_2QMsmTu-RgDIcpz6lCmzHGoULGfFDG1VNoeZa99JFNSHb-MOQcZnAxjTEYZMY7cekHchpbchm8J9dj6Bh54eI9hSGDd2RbM_WvtEwNXpNwE7CdiAN_SWrY0TDV1khOfKN7-OVDl8H3_cW5xY1lU7S3igLnd_6IzlBvMvho3LP0HZ26P3g88yguvZL0pIBdC3zx_Z5Iie18U3KA_aa0My_b8MJwr4r9XxpTHY2MPpxufUfpbx54NUa9PYhqVdOybFS-boqCilW5ydc5LhcN5bKUWC5WdSOxni-butrMV3mVSyw26-UCC8SaVgeR8dKM_P2SrtQWDoKobpo8x9m8XhWzoihxViLms2pTzRe0LuSirg7iUTz-Aw7AFk0.YdF0TA.vR3QS4BrTQeMNDYNrMCmp2ArQJQ'

This gives

    {
    	'day': 'Monday',
    	'elf': 'Jingle Ringford',
    	'elfHints': [
    		'The elf mentioned something about Stack Overflow and Golang.', 
    		'They kept checking their Snapchat app.', 
    		'Oh, I noticed they had a Star Wars themed phone case.', 
    		'The elf got really heated about using spaces for indents.', 
    		'hard'
    	],
    	'hour': 9,
    	'location': "Santa's Castle",
    	'options': [
    		['Montréal, Canada', 'Edinburgh, Scotland', 'Vienna, Austria'],
    		['Copenhagen, Denmark', 'Antwerp, Belgium', 'Edinburgh, Scotland'],
    		['Montréal, Canada', 'Prague, Czech Republic', 'New York, USA'],
    		['Placeholder', 'Rovaniemi, Finland', 'Reykjavík, Iceland']
    	],
    	'randomSeed': 178,
    	'route': ['Edinburgh, Scotland', 'Antwerp, Belgium', 'Prague, Czech Republic', 'Placeholder'],
    	'victoryToken': '{ hash:"95be38fd06f44e4587060a32fe0c8ca825bfcab13fb9715090ca47632a4aabe5", resourceId: "eebff00a-1b54-448a-8aa0-97912e64c2b9"}'
    }

# Now hiring!

If you SSRF with the URL http://169.254.169.254/latest/dynamic/instance-identity/document/ and after a ```curl``` it brings back the following that contains a region, presumable that means North Pole as it isn't a [legit region](https://awsregion.info/)

    {
        "accountId": "PCRVQVHN4S0L4V2TE",
        "imageId": "ami-0b69ea66ff7391e80",
        "availabilityZone": "np-north-1f",
        "ramdiskId": null,
        "kernelId": null,
        "devpayProductCodes": null,
        "marketplaceProductCodes": null,
        "version": "2017-09-30",
        "privateIp": "10.0.7.10",
        "billingProducts": null,
        "instanceId": "i-1234567890abcdef0",
        "pendingTime": "2019-10-31T07:02:24Z",
        "architecture": "x86_64",
        "instanceType": "m4.xlarge",
        "region": "np-north-1"
    }



# Grasping at straws

No 13th floor in Jack Frost Towers