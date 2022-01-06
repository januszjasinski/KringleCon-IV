import requests
import hashlib

# Making a GET request
for x in range(0,10000):
        r = requests.get('https://apply.jackfrosttower.com/images/'+str(x)+'.jpg')
        
        md5_value = hashlib.md5(r.text.encode('utf-8'))
        with open(md5_value.hexdigest()+".txt", "w") as f:
                f.write(r.text)
