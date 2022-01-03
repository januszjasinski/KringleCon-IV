import requests
import hashlib

# Making a GET request
file1 = open('rockyou.txt', 'rb')
for line in file1:
        r = requests.get('https://apply.jackfrosttower.com/images/'+str(line.strip())+'.jpg')

# check status code for response received
# success code - 200
        #print(str(line.strip()))
        md5_value = hashlib.md5(r.text.encode('utf-8'))
        with open(md5_value.hexdigest()+".txt", "w") as f:
                f.write(r.text)