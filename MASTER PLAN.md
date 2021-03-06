 ![Xaiver Image] (https://github.com/xwindor/venttown/blob/master/nano%20plans.jpg)

1. Solenoid valve - PIN 13
*receive signal from Nano to turn on the valve 
*Receive signal from Nano to turn off valve 
*Receive signal from nano to turn on valve for a period of time (adjustable by user) and then have the signal turn off when the time expires. 
*Connected to nano pin 
*[sample code and project 1](http://www.bc-robotics.com/tutorials/controlling-a-solenoid-valve-with-arduino/)
*[sample code and project 2 (steps 7-9](http://www.instructables.com/id/Raspberry-Pi-Irrigation-Controller/step7/Software/)
*[Sample code and project 3](https://spin.atomicobject.com/2014/06/28/raspberry-pi-gardening/)

2. Water flow sensor - PIN 4
*send signal to nano indicating water flow or no water flow 
*Connected to nano pin 2

*Formula for water remaining in barrel: 

Water Remaining = Water remaining L - (water flow rate L/hr x time water is flowing hr)
*there may be a problem with this formula, if the water flow rate changes drastically due to a change in water pressure then we may have to change the formula to account for this

*Formula for water dripped into plants: 

Water dripped = time water dripped hr x (water drip rate G/hr x 3.785 L/G)
*there are two dripers, one is 1 gallon per hour and the other is 2 gallons per hour, both should be represented on the website
*[sample code and project](http://forum.arduino.cc/index.php?topic=8548.0)

3. Oops skipped #3 
  
4. 4.1 radio receiver 1 - NANO PIN 10
*[sample code](http://www.instructables.com/files/orig/FQS/YAB6/HZV3O6IZ/FQSYAB6HZV3O6IZ.txt)
*Receive radio signal from UNO 
*Translate signal on nano to create a signal to activate solenoid valve 
  4.2 radio transmitter 1 - UNO PIN 11
*[Sample Code](http://www.instructables.com/files/orig/F3S/72IM/HZS8WTVS/F3S72IMHZS8WTVS.txt)
*Transmit signal to activate solenoid valve from UNO to Nano 
NOTE: the sample code is taken from [this tutorial](http://www.instructables.com/id/SOLAR-POWERED-ARDUINO-WEATHER-STATION/?ALLSTEPS#step7) do there is parts of the code you can ignore. However I'm not sure how helpful it is to you because of it. It looks like it uses a library called VirtualWire, maybe they link to it in the tutorial (steps 7 and 9 show how to build and program the transmitter/receiver) maybe there is a better library out there too? 
[virtual wire library for receiver/transmiter](http://www.airspayce.com/mikem/arduino/VirtualWire/)
[tutorial 1 w sample code](https://www.sparkfun.com/datasheets/RF/KLP_Walkthrough.pdf)
[tutorial 2 w sample code](http://winavr.scienceprog.com/example-avr-projects/running-tx433-and-rx433-rf-modules-with-avr-microcontrollers.html)
[virtual wire Rx/Tx example](https://www.pjrc.com/teensy/td_libs_VirtualWire.html)
[another Rx/Tx example project](http://www.instructables.com/id/RF-315433-MHz-Transmitter-receiver-Module-and-Ardu/?ALLSTEPS)
￼  
5. 
  5.1 radio transmitter 2 - NANO PIN 11
*Transmit signal from Nano to Uno 
*Transmit signal indicating the state of water flow sensor  
  5.2 radio receiver - UNO PIN 10
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
