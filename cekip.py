#open source
#Kalo Mau Decode Kasi Credit Njink
#Dasar Decode Sampah!!!










import os
import json
import requests,time

b='\033[1;94m'

i='\033[1;92m'

c='\033[1;96m'

m='\033[1;91m'

u='\033[1;95m'

k='\033[1;93m'

p='\033[1;97m'

h='\033[1;92m'

P = '\x1b[1;97m' # PUTIH

M = '\x1b[1;91m' # MERAH

H = '\x1b[1;92m' # HIJAU

K = '\x1b[1;93m' # KUNING

B = '\x1b[1;94m' # BIRU

U = '\x1b[1;95m' # UNGU

O = '\x1b[1;96m' # BIRU MUDA

N = '\x1b[0m'    # WARNA MATI

__logo__ = """
%s         ╦ ┌─┐  ╔═╗┌┬┐┌┬┐┬─┐┌─┐┌─┐┌─┐
%s         ║ ├─┘  ╠═╣ ││ ││├┬┘├┤ └─┐└─┐
%s         ╩ ┴    ╩ ╩─┴┘─┴┘┴└─└─┘└─┘└─┘
       %s•%s•%s• %sAmmar Buthanuddin Nafis %s•%s•%s•
"""%(O,O,O,M,K,H,P,M,K,H)

def ___main___():
	os.system("clear")
	print(__logo__)
	with requests.Session() as ses:
		try:
			j = ses.get("https://ipapi.co/json/").json()
			print("%s╭─[%s•%s] %sIP Anda     %s:%s %s"%(O,P,O,P,O,H,j["ip"]))
			print("%s├─[%s•%s]────────────────────────────────────"%(O,P,O))
		except Exception as e:
			print("  "+O+"["+M+"!"+O+"] "+P+"Connection error no internet connection") 
			input("\n  %s[%s•%s] %sKembali "%(O,P,O,P))

#Start Program
___main___()
