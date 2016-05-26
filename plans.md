1. Solenoid valve  
*receive signal from Nano to turn on the valve 
*Receive signal from Nano to turn off valve 
*Receive signal from nano to turn on valve for a period of time (adjustable by user) and then have the signal turn off when the time expires. 
*Connected to nano pin 
*[sample code and project 1](http://www.bc-robotics.com/tutorials/controlling-a-solenoid-valve-with-arduino/)
*[sample code and project 2 (steps 7-9](http://www.instructables.com/id/Raspberry-Pi-Irrigation-Controller/step7/Software/)
*[Sample code and project 3](https://spin.atomicobject.com/2014/06/28/raspberry-pi-gardening/)

2. Water flow sensor 
*send signal to nano indicating water flow or no water flow 
*Connected to nano pin 
*[sample code and project](http://forum.arduino.cc/index.php?topic=8548.0)

3. Oops skipped #3 
  
4. 
  4.1 radio receiver 1 
*[sample code](http://www.instructables.com/files/orig/FQS/YAB6/HZV3O6IZ/FQSYAB6HZV3O6IZ.txt)
*Receive radio signal from UNO 
*Translate signal on nano to create a signal to activate solenoid valve 
  4.2 radio transmitter 1 
*[Sample Code](http://www.instructables.com/files/orig/F3S/72IM/HZS8WTVS/F3S72IMHZS8WTVS.txt)
*Transmit signal to activate solenoid valve from UNO to Nano 
NOTE: the sample code is taken from [this tutorial](http://www.instructables.com/id/SOLAR-POWERED-ARDUINO-WEATHER-STATION/?ALLSTEPS#step7) do there is parts of the code you can ignore. However I'm not sure how helpful it is to you because of it. It looks like it uses a library called VirtualWire, maybe they link to it in the tutorial (steps 7 and 9 show how to build and program the transmitter/receiver) maybe there is a better library out there too? 
￼  
5. 
  5.1 radio transmitter 2
*Transmit signal from Nano to Uno 
*Transmit signal indicating the state of water flow sensor  
  5.2 radio receiver 
*Receive signal from Nano indicating state of water flow sensor 

6. Wifi connection 
*Transmit Information to web server indicating state of water flow sensor 
*Receive inputs transmitted from web server to activate valve 
*[Tutorial on how to send commands to arduino from webpage](http://allaboutee.com/2015/01/02/esp8266-arduino-led-control-from-webpage/)
*[arduino esp8266 wifi library](https://github.com/sparkfun/SparkFun_ESP8266_AT_Arduino_Library/archive/master.zip)
7. Web server 
*A relay point between UNO and users phone 
*Transmits signal to UNO over wifi 
*Transmit data to users phone over Internet  
*Receives input from users phone 
*Phone connection (app? Website?) 
*Access point to server  
*Show data from web server in an easy to understand way 
*Receive input from user and then transmit it to web server

8. Phone connection (app? Website?) 
*Access point to server  
*Show data from web server in an easy to understand way 
*Receive input from user and then transmit it to web server 
