# the first step is always the same: import all necessary components:
import smtplib
from socket import gaierror

# now you can play with your code. Let’s define the SMTP server separately here:
port = 2525
smtp_server = "smtp.mailtrap.io"
login = "266201e095ce7f" # paste your login generated by Mailtrap
password = "257992be384261" # paste your password generated by Mailtrap

# specify the sender’s and receiver’s email addresses
sender = "XXX"
receiver = "YYY"

# type your message: use two newlines (\n) to separate the subject from the message body, and use 'f' to  automatically insert variables in the text
message = f"""\
Subject: Encontact Reset Password
To: {receiver}
From: {sender}

This is my first message with Python."""

try:
    #send your message with credentials specified above
    with smtplib.SMTP(smtp_server, port) as server:
        server.login(login, password)
        server.sendmail(sender, receiver, message)

    # tell the script to report if your message was sent or which errors need to be fixed
    print('Sent')
except (gaierror, ConnectionRefusedError):
    print('Failed to connect to the server. Bad connection settings?')
except smtplib.SMTPServerDisconnected:
    print('Failed to connect to the server. Wrong user/password?')
except smtplib.SMTPException as e:
    print('SMTP error occurred: ' + str(e))