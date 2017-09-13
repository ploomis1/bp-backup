--- 
customlog: 
  - 
    format: combined
    target: /usr/local/apache/domlogs/bpdevelopments6.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /usr/local/apache/domlogs/bpdevelopments6.com-bytes_log
documentroot: /home/bpdevelopments6/public_html
group: bpdevelopments6
hascgi: 1
homedir: /home/bpdevelopments6
ifmodulealiasmodule: 
  scriptalias: 
    - 
      path: /home/bpdevelopments6/public_html/cgi-bin/
      url: /cgi-bin/
ifmoduleincludemodule: 
  directoryhomebpdevelopmentspublichtml: 
    ssilegacyexprparser: 
      - 
        value: " On"
ifmoduleitkc: {}

ifmodulemodincludec: 
  directoryhomebpdevelopmentspublichtml: 
    ssilegacyexprparser: 
      - 
        value: " On"
ifmoduleuserdirmodule: 
  ifmodulempmitkc: 
    ifmoduleruidmodule: {}

ip: 166.62.28.110
owner: gdresell
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/bpdevelopments6/public_html/cgi-bin
    url: /cgi-bin/
  - 
    path: /home/bpdevelopments6/public_html/cgi-bin/
    url: /cgi-bin/
serveradmin: webmaster@bpdevelopments6.com
serveralias: www.bpdevelopments6.com
servername: bpdevelopments6.com
usecanonicalname: 'Off'
user: bpdevelopments6
userdirprotect: ''
