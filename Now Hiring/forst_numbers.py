import requests
import hashlib

# Making a GET request
for x in range(4999,10000):
        r = requests.get('https://apply.jackfrosttower.com/images/'+str(x)+'.jpg')

# check status code for response received
# success code - 200
        print(x)
        md5_value = hashlib.md5(r.text.encode('utf-8'))
        with open(md5_value.hexdigest()+".txt", "w") as f:
                f.write(r.text)