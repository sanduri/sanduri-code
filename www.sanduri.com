<?xml version="1.0"?>
<?xml-stylesheet href="file:///usr/bin/../share/nmap/nmap.xsl" type="text/xsl"?>
<!-- Nmap 6.40 scan initiated Wed Jun  1 18:09:09 2016 as: nmap -A -T4 -p53,80 -v -oX www.sanduri.com -->
<nmaprun scanner="nmap" args="nmap -A -T4 -p53,80 -v -oX www.sanduri.com" start="1464818949" startstr="Wed Jun  1 18:09:09 2016" version="6.40" xmloutputversion="1.04">
<scaninfo type="syn" protocol="tcp" numservices="2" services="53,80"/>
<verbose level="1"/>
<debugging level="0"/>
<runstats><finished time="1464818950" timestr="Wed Jun  1 18:09:10 2016" elapsed="1.13" summary="Nmap done at Wed Jun  1 18:09:10 2016; 0 IP addresses (0 hosts up) scanned in 1.13 seconds" exit="success"/><hosts up="0" down="0" total="0"/>
</runstats>
</nmaprun>
