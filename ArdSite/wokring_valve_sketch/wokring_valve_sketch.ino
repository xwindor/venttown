/************************************************************
ESP8266_Shield_Demo.h
SparkFun ESP8266 AT library - Demo
Jim Lindblom @ SparkFun Electronics
Original Creation Date: July 16, 2015
https://github.com/sparkfun/SparkFun_ESP8266_AT_Arduino_Library
This example demonstrates the basics of the SparkFun ESP8266
AT library. It'll show you how to connect to a WiFi network,
get an IP address, connect over TCP to a server (as a client),
and set up a TCP server of our own.
Development environment specifics:
  IDE: Arduino 1.6.5
  Hardware Platform: Arduino Uno
  ESP8266 WiFi Shield Version: 1.0
This code is released under the MIT license.
Distributed as-is; no warranty is given.
************************************************************/

//////////////////////
// Library Includes //
//////////////////////
// SoftwareSerial is required (even you don't intend on
// using it).
#include <SoftwareSerial.h> 
#include <SparkFunESP8266WiFi.h>

//////////////////////////////
// WiFi Network Definitions //
//////////////////////////////
// Replace these two character strings with the name and
// password of your WiFi network.
const char mySSID[] = "li";
const char myPSK[] = "6689581li";
const int solenoidValve = 13;
const int serverConnectStatus = 4; // on if arduino is connected to server GREEN
const int wifiStatus = 7; // if on LED is lit ORANGE
char onCode[23] = "ThisCodeTurnsTheUnoOnn";
char offCode[23] = "ThisCodeTurnsTheUnoOff";

//water flow calculation variables
volatile int flow_frequency; // Measures flow sensor pulses
unsigned int l_hour; // Calculated litres/hour
unsigned char flowsensor = 2; // Sensor Input
unsigned long currentTime;
unsigned long cloopTime;
void flow () // Interrupt function
{
   flow_frequency++;
}


//////////////////
// HTTP Strings //
//////////////////
ESP8266Client client;
const char destServer[] = "xaviersgarden.com"; //private ip

const String httpRequest = "GET /ArdOnOff.php HTTP/1.1\n"
                           "Host: xaviersgarden.com\n" //private ip
                           "Connection: close\n\n";

// All functions called from setup() are defined below the
// loop() function. They modularized to make it easier to
// copy/paste into sketches of your own.
void setup() 
{
  pinMode(flowsensor, INPUT);  
  pinMode(serverConnectStatus, OUTPUT);
  pinMode(wifiStatus, OUTPUT);
  pinMode(solenoidValve, OUTPUT);
  digitalWrite(flowsensor, HIGH); // Optional Internal Pull-Up
  attachInterrupt(0,flow, RISING); //Setup Interupt
  sei(); // Enable interrupts
  currentTime = millis();
  cloopTime = currentTime;
  initializeESP8266();
  connectESP8266();
    ESP8266Client client;
    int retVal = client.connect(destServer, 80);
    if (retVal > 0)
  {
    Serial.print("connected to website!");
    digitalWrite(serverConnectStatus, HIGH);
  }
}

void loop() 
{
  setFlow();
  valveControl();
}

void initializeESP8266()
{
  // esp8266.begin() verifies that the ESP8266 is operational
  // and sets it up for the rest of the sketch.
  // It returns either true or false -- indicating whether
  // communication was successul or not.
  // true
  esp8266.begin();
  }

void connectESP8266()
{
    // esp8266.connect([ssid], [psk]) connects the ESP8266
    // to a network.
    // On success the connect function returns a value >0
    // On fail, the function will either return:
    //  -1: TIMEOUT - The library has a set 30s timeout
    //  -3: FAIL - Couldn't connect to network.
    esp8266.setMode(ESP8266_MODE_STA);
    int retVal = esp8266.connect(mySSID, myPSK);
    if (retVal > 0)
  {
    Serial.print("connected to wifi");
    digitalWrite(wifiStatus, HIGH);
  }
  
}

void setFlow()
{
    currentTime = millis();
   // Every second, calculate and print litres/hour
   if(currentTime >= (cloopTime + 1000))
   {
      cloopTime = currentTime; // Updates cloopTime
      // Pulse frequency (Hz) = 7.5Q, Q is flow rate in L/min.
      l_hour = (flow_frequency * 60 / 7.5); // (Pulse frequency x 60 min) / 7.5Q = flowrate in L/hour
      flow_frequency = 0; // Reset Counter
   }

  // print and write can be used to send data to a connected
  // client connection.
  String httpPostRequest = "GET /SetFlow.php?flow=" + String(l_hour) + " HTTP/1.1\n" //sets the water flow value
                           "Host: http://xaviersgarden.com\n" //private ip
                           "Connection: close\n\n";
  client.print(httpPostRequest);
}

void valveControl()
{

  // print and write can be used to send data to a connected
  // client connection.
  client.print(httpRequest);

  // available() will return the number of characters
  // currently in the receive buffer.
  int onCount = 0;
  int offCount = 0;
  while (client.available()){
    char c = client.read();
    if( c == onCode[onCount]){
      onCount++;
      if(onCount==22){
        digitalWrite(solenoidValve, HIGH); 
      }
    }
    else{
      onCount = 0;
    }
    if( c == offCode[offCount]){
      offCount++;
      if(offCount==22){
        digitalWrite(solenoidValve, LOW);
      }
    }
    else{
      offCount = 0;
    }
    Serial.write(c);
  }
  
}


