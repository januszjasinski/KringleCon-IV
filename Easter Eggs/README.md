
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

# Yara Analysis #

When completing this terminal you get the following output:

    Elf Jolliness Quotient: 4a6f6c6c7920456e6f7567682c204f76657274696d6520417070726f766564

Do a HEX to Acii conversion and voila:

    Jolly Enough, Overtime Approved